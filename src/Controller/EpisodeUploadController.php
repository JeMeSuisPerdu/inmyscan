<?php
// src/Controller/EpisodeUploadController.php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\Manga;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use DateTime; // Assurez-vous d'importer DateTime

class EpisodeUploadController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/episode/upload', name: 'episode_upload_form', methods: ['GET'])]
    public function showForm(): Response
    {
        // Récupérer tous les mangas disponibles pour les afficher dans le formulaire
        $mangas = $this->entityManager->getRepository(Manga::class)->findAll();

        return $this->render('episode_upload/index.html.twig', [
            'mangas' => $mangas,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/episode/upload', name: 'episode_upload', methods: ['POST'])]
    public function upload(Request $request): Response
    {
        $mangaId = $request->request->get('manga_id');
        $manga = $this->entityManager->getRepository(Manga::class)->find($mangaId);

        if (!$manga) {
            throw $this->createNotFoundException('Manga non trouvé');
        }

        $saisonNumero = $request->request->get('saison_numero');
        $episodeNumber = $request->request->get('episode_number');
        $isFilm = $request->request->get('is_film') === 'true';

        // Récupération des liens des lecteurs
        $lecteur1 = $request->request->get('lecteur1', '');
        $lecteur2 = $request->request->get('lecteur2', '');
        $lecteur3 = $request->request->get('lecteur3', '');

        // Conversion des liens en tableau
        $episodeLinks = [
            'SIBNET' => $lecteur1,
            'VIDMOLY' => $lecteur2,
            'SENDVID' => $lecteur3,
        ];

        // Créer une instance de Anime pour enregistrer l'épisode
        $anime = new Anime();
        $anime->setMangaId($manga);
        $anime->setSaisonNumero($saisonNumero);
        $anime->setEpisodeNumber($isFilm ? 0 : $episodeNumber);
        $anime->setLecteurLinks($episodeLinks);
        $anime->setFilm($isFilm);

        // Définir la date de sortie à la date actuelle
        $anime->setDateSortie(new DateTime());

        $this->entityManager->persist($anime);
        $this->entityManager->flush();

        return new Response('Épisode inséré avec succès', Response::HTTP_CREATED);
    }
}
