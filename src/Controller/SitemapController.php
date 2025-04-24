<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Manga;
use App\Entity\Anime;
use DateTime;

class SitemapController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/sitemap', name: 'app_sitemap', defaults: ['_format' => 'xml'])]
    public function index(): Response
    {
        $hostname = ''; // URL de base complète
        $urls = [];

        // URLs statiques
        $urls[] = [
            'loc' => $hostname . $this->generateUrl('app_home', [], false),
            'priority' => 1.0,
            'changefreq' => 'daily'
        ];

        // Récupérer uniquement les animes récents
        $dateLimite = (new DateTime())->modify('-30 days');
        $animes = $this->entityManager->getRepository(Anime::class)
            ->createQueryBuilder('a')
            ->where('a.date_sortie >= :dateLimite')
            ->setParameter('dateLimite', $dateLimite)
            ->getQuery()
            ->getResult();

        foreach ($animes as $anime) {
            $lastmod = $anime->getDateSortie(); // Utilisation de date_sortie pour le lastmod
            $urls[] = [
                'loc' => $hostname . $this->generateUrl('voir_anime', [
                    'mangaId' => $anime->getMangaId()->getId(),
                    'saison' => $anime->getSaisonNumero()
                ], false),
                'lastmod' => $lastmod->format('Y-m-d'),
                'priority' => 0.9,
                'changefreq' => 'daily'
            ];
        }

        // Autres URLs
        $urls[] = [
            'loc' => $hostname . $this->generateUrl('search_manga', [], false),
            'priority' => 0.8,
            'changefreq' => 'weekly'
        ];
        $urls[] = [
            'loc' => $hostname . $this->generateUrl('app_login', [], false),
            'priority' => 0.5,
            'changefreq' => 'monthly'
        ];
        $urls[] = [
            'loc' => $hostname . $this->generateUrl('app_logout', [], false),
            'priority' => 0.5
        ];
        $urls[] = [
            'loc' => $hostname . $this->generateUrl('profile', [], false),
            'priority' => 0.6
        ];

        // Récupérer tous les mangas pour afficher leurs profils
        $mangas = $this->entityManager->getRepository(Manga::class)->findAll();

        foreach ($mangas as $manga) {
            // Ajouter l'URL du profil pour chaque manga
            $urls[] = [
                'loc' => $hostname . $this->generateUrl('manga_profile', ['id' => $manga->getId()], false),
                'priority' => 0.7,
                'changefreq' => 'weekly'
            ];
        }

        // Récupérer uniquement les mangas qui ont des scans pour ajouter les URLs des scans
        $mangasAvecScans = $this->entityManager->createQueryBuilder()
            ->select('m')
            ->from(Manga::class, 'm')
            ->innerJoin('m.scans', 's') // Ne récupérer que les mangas ayant des scans
            ->getQuery()
            ->getResult();

        foreach ($mangasAvecScans as $manga) {
            // Ajouter l'URL des scans uniquement pour les mangas qui en ont
            $urls[] = [
                'loc' => $hostname . $this->generateUrl('manga_scans', ['id' => $manga->getId()], false),
                'priority' => 0.7,
                'changefreq' => 'weekly'
            ];
        }

        // Générer le rendu
        $response = new Response(
            $this->renderView('sitemap/index.html.twig', ['urls' => $urls]),
            200
        );
        $response->headers->set('Content-Type', 'text/xml');
        return $response;
    }
}
