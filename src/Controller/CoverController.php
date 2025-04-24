<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\EpisodeSerie;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Manga;
use App\Entity\Serie;
use App\Entity\Films;
class CoverController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/manga/search', name: 'search_manga')]
    public function searchManga(Request $request, EntityManagerInterface $entityManager): Response
    {
        $searchTerm = strtolower($request->query->get('query'));
    
        // Rechercher dans Manga
        $manga = $entityManager->getRepository(Manga::class)->findOneBy(['titre' => $searchTerm]);
        if ($manga) {
            return $this->redirectToRoute('manga_profile', ['id' => $manga->getId()]);
        }
    
        // Rechercher dans Films
        $film = $entityManager->getRepository(Films::class)->findOneBy(['titre' => $searchTerm]);
        if ($film) {
            return $this->redirectToRoute('film_profile', ['id' => $film->getId()]);
        }
    
        // Rechercher dans Series
        $serie = $entityManager->getRepository(Serie::class)->findOneBy(['titre' => $searchTerm]);
        if ($serie) {
            return $this->redirectToRoute('serie_profile', ['id' => $serie->getId()]);
        }
    
        // Redirection si aucun résultat trouvé
        return $this->redirectToRoute('app_home');
    }
    
    #[Route('/manga/search/ajax', name: 'ajax_search_manga')]
    public function ajaxSearchManga(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $searchTerm = strtolower($request->query->get('query'));
    
        // Rechercher dans Manga
        $mangas = $entityManager->getRepository(Manga::class)
            ->createQueryBuilder('m')
            ->where('LOWER(m.titre) LIKE :term')
            ->setParameter('term', '%' . $searchTerm . '%')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    
        // Rechercher dans Films
        $films = $entityManager->getRepository(Films::class)
            ->createQueryBuilder('f')
            ->where('LOWER(f.titre) LIKE :term')
            ->setParameter('term', '%' . $searchTerm . '%')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    
        // Rechercher dans Series
        $series = $entityManager->getRepository(Serie::class)
            ->createQueryBuilder('s')
            ->where('LOWER(s.titre) LIKE :term')
            ->setParameter('term', '%' . $searchTerm . '%')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    
        // Préparer les résultats pour le format JSON
        $results = [];
        foreach ($mangas as $manga) {
            $results[] = [
                'id' => $manga->getId(),
                'type' => 'manga',
                'titre' => $manga->getTitre(),
                'photo' => $manga->getPhoto(),
            ];
        }
    
        foreach ($films as $film) {
            $results[] = [
                'id' => $film->getId(),
                'type' => 'film',
                'titre' => $film->getTitre(),
                'photo' => $film->getPhoto(),
            ];
        }
    
        foreach ($series as $serie) {
            $results[] = [
                'id' => $serie->getId(),
                'type' => 'serie',
                'titre' => $serie->getTitre(),
                'photo' => $serie->getPhoto(),
            ];
        }
    
        return $this->json($results);
    }
    

    #[Route('/manga/{id}', name: 'manga_profile')]
    public function mangaProfile(int $id): Response
    {
        // Récupérer le manga par ID
        $manga = $this->entityManager->getRepository(Manga::class)->find($id);
    
        if (!$manga) {
            throw $this->createNotFoundException('Manga non trouvé');
        }
        
        // Récupérer les scans associés
        $scans = $manga->getScans();
        
        // Récupérer les saisons d'anime associées au manga
        $saisons = $this->entityManager->getRepository(Anime::class)->findBy(['manga_id' => $manga], ['saison_numero' => 'ASC']);
    
        // Grouper les épisodes par saison
        $groupedEpisodesBySaison = [];
        foreach ($saisons as $anime) {
            $groupedEpisodesBySaison[$anime->getSaisonNumero()][] = $anime;
        }
        
        // Récupérer les rôles associés au manga
        $rolesForManga = [];
        foreach ($manga->getRoles() as $role) {
            $rolesForManga[] = $role->getNom();
        }
    
        return $this->render('manga/profile.html.twig', [
            'manga' => $manga,
            'scans' => $scans,
            'saisons' => $groupedEpisodesBySaison,
            'roles' => $rolesForManga, // Passer les rôles au template
        ]);
    }

    #[Route('/manga/{id}/scans', name: 'manga_scans')]
    public function showScans(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        // Récupérer le manga par ID
        $manga = $entityManager->getRepository(Manga::class)->find($id);
    
        if (!$manga) {
            throw $this->createNotFoundException('Manga non trouvé');
        }
    
        // Récupérer tous les scans associés à ce manga
        $scans = $manga->getScans();
    
        // Vérifier si des scans existent
        if (empty($scans)) {
            throw $this->createNotFoundException('Aucun scan trouvé pour ce manga');
        }
    
        // Récupérer le premier scan par défaut
        $currentScan = $scans[0];
    
        // Récupérer les liens pour ce scan
        $liens = $currentScan->getLiens(); // On suppose que ceci renvoie déjà un tableau
    
        // Récupérer les chapitres disponibles
        $chapters = array_keys($liens); // On obtient les clés (eps1, volume1, etc.)
    
        // Traitement de la sélection directe d'un chapitre/volume à afficher
        $selectedChapter = $request->query->get('chapter', $chapters[0] ?? null);
        $selectedLinks = $liens[$selectedChapter] ?? []; // Liens pour le chapitre sélectionné
    
        return $this->render('scan_view/scan.html.twig', [
            'manga' => $manga,
            'scans' => $scans,
            'currentScan' => $currentScan,
            'chapters' => $chapters,
            'selectedLinks' => $selectedLinks,
            'selectedChapter' => $selectedChapter,
        ]);
    }
    

    #[Route('/anime/{mangaId}/{saison}', name: 'voir_anime')]
    public function voirAnime(int $mangaId, int $saison, EntityManagerInterface $entityManager): Response
    {
        $manga = $entityManager->getRepository(Manga::class)->find($mangaId);

        if (!$manga) {
            throw $this->createNotFoundException('Manga non trouvé.');
        }

        // Récupérer les épisodes pour la saison spécifiée
        $episodes = $entityManager->getRepository(Anime::class)->findBy([
            'manga_id' => $manga,
            'saison_numero' => $saison
        ]);

        $episodeLinks = [];
        foreach ($episodes as $episode) {
            $lecteurLinks = $episode->getLecteurLinks();
            $episodeLinks[$episode->getEpisodeNumber()] = $lecteurLinks;
        }

        return $this->render('anime/voir_anime.html.twig', [
            'manga' => $manga,
            'episodes' => $episodeLinks,
            'saison' => $saison,
        ]);
    }

    #[Route('/series/{id}', name: 'series_profile')]
    public function seriesProfile(int $id): Response
    {
        // Récupérer le manga par ID
        $serie = $this->entityManager->getRepository(Serie::class)->find($id);
    
        if (!$serie) {
            throw $this->createNotFoundException('Série non trouvé');
        }
        
        // Récupérer les saisons des series associées à Serie
        $saisons = $this->entityManager->getRepository(EpisodeSerie::class)->findBy(['serie_id' => $serie], ['saison_numero' => 'ASC']);
    
        // Grouper les épisodes par saison
        $groupedEpisodesBySaison = [];
        foreach ($saisons as $series) {
            $groupedEpisodesBySaison[$series->getSaisonNumero()][] = $series;
        }
    
        return $this->render('manga/series.html.twig', [
            'serie' => $serie,
            'saisons' => $groupedEpisodesBySaison,
        ]);
    }

    #[Route('/serie/{serieId}/{saison}', name: 'voir_series')]
    public function serieAnime(int $serieId, int $saison, EntityManagerInterface $entityManager): Response
    {
        $serie = $entityManager->getRepository(Serie::class)->find($serieId);

        if (!$serie) {
            throw $this->createNotFoundException('Serie non trouvé.');
        }

        // Récupérer les épisodes pour la saison spécifiée
        $episodes = $entityManager->getRepository(EpisodeSerie::class)->findBy([
            'serie_id' => $serie,
            'saison_numero' => $saison
        ]);

        $episodeLinks = [];
        foreach ($episodes as $episode) {
            $lecteurLinks = $episode->getLecteurLinks();
            $episodeLinks[$episode->getEpisodeNumber()] = $lecteurLinks;
        }

        return $this->render('serie/voir_serie.html.twig', [
            'serie' => $serie,
            'episodes' => $episodeLinks,
            'saison' => $saison,
        ]);
    }

    #[Route('/films/{id}', name: 'films_profile')]
    public function filmsProfile(int $id): Response
    {
        // Récupérer le film par ID
        $film = $this->entityManager->getRepository(Films::class)->find($id);
    
        // Vérifier si le film existe
        if (!$film) {
            throw $this->createNotFoundException('Film non trouvé');
        }
    
        // Renvoyer les données au template
        return $this->render('manga/films.html.twig', [
            'film' => $film,
            'lecteurLinks' => $film->getLecteurLinks(), // Pas besoin de json_decode ici
        ]);
    }
    
    
    #[Route('/film/id/{id}', name: 'voir_film')]
    public function voirFilm(int $id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer le film par ID
        $film = $entityManager->getRepository(Films::class)->find($id);
    
        if (!$film) {
            throw $this->createNotFoundException('Film non trouvé.');
        }
    
        // Récupérer directement les liens des lecteurs, qui sont déjà un tableau
        $lecteurLinks = $film->getLecteurLinks(); // Pas besoin de json_decode ici
    
        return $this->render('films/voir_film.html.twig', [
            'film' => $film,
            'lecteurLinks' => $lecteurLinks, // Envoyer les lecteurs au template
        ]);
    }
    

}
