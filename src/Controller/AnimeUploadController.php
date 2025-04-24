<?php 
// src/Controller/AnimeSeasonUploadController.php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\Manga;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AnimeUploadController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/anime/upload/season', name: 'anime_season_upload_form', methods: ['GET'])]
    public function showForm(): Response
    {
        return $this->render('anime/season_upload.html.twig');
    }

    #[Route('/anime/upload/season', name: 'anime_season_upload', methods: ['POST'])]
    public function uploadSeason(Request $request): Response
    {
        $mangaId = $request->request->get('manga_id');
    
        // Récupération de l'entité Manga à partir de son ID
        $manga = $this->entityManager->getRepository(Manga::class)->find($mangaId);
    
        if (!$manga) {
            throw $this->createNotFoundException('Manga not found');
        }
    
        $saisonNumero = $request->request->get('saison_numero');
        $isFilm = $request->request->get('is_film') === 'true'; // Récupérer la valeur de la checkbox
    
        // Récupération des liens des lecteurs pour la saison entière
        $lecteur1 = $request->request->get('lecteur1', '');
        $lecteur2 = $request->request->get('lecteur2', '');
        $lecteur3 = $request->request->get('lecteur3', '');
    
        // Conversion des chaînes de liens en tableaux
        $links = [
            'SIBNET' => $this->convertLinksToArray($lecteur1),
            'VIDMOLY' => $this->convertLinksToArray($lecteur2),
            'SENDVID' => $this->convertLinksToArray($lecteur3),
        ];
    
        // Déterminez le nombre maximum d'épisodes
        $maxEpisodes = max(array_map('count', array_filter($links)));
    
        for ($episodeNumber = 1; $episodeNumber <= $maxEpisodes; $episodeNumber++) {
            $episodeLinks = [];
    
            // Récupérer les liens pour chaque lecteur par épisode
            foreach ($links as $key => $linkArray) {
                if (isset($linkArray[$episodeNumber - 1])) {
                    $episodeLinks[$key] = $linkArray[$episodeNumber - 1];
                }
            }
    
            // Vérifier que les liens ne sont pas tous vides avant d'insérer l'épisode
            if (array_filter($episodeLinks)) {
                $anime = new Anime();
                $anime->setMangaId($manga); // Passer l'objet Manga ici
                $anime->setSaisonNumero($saisonNumero);
                $anime->setEpisodeNumber($isFilm ? 0 : $episodeNumber); // Définit 0 pour les films
                $anime->setLecteurLinks($episodeLinks);
                $anime->setFilm($isFilm); // Ajouter la valeur de film ici
    
                $this->entityManager->persist($anime);
            }
        }
    
        $this->entityManager->flush();
    
        return new Response('Liens de la saison insérés avec succès.', Response::HTTP_CREATED);
    }

    private function convertLinksToArray(string $links): ?array
    {
        if (empty($links)) {
            return null;
        }
    
        return array_map(function ($link) {
            return trim(str_replace(["\r", "\n", "'"], '', $link));
        }, explode(',', $links));
    }
}
