<?php
namespace App\Controller;

use App\Entity\Serie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Cache\CacheItemPoolInterface;

class SerieController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/serie_catalogue', name: 'serie_catalogue')]
    public function catalogue(Request $request, CacheItemPoolInterface $cache): Response
    {
        $limit = 25; // Nombre de séries par page
        $page = $request->query->getInt('page', 1); // Numéro de page
        $offset = ($page - 1) * $limit;

        // Création d'une clé de cache unique
        $cacheKey = 'serie_catalogue_' . md5(serialize([$page]));

        // Vérification du cache
        $cachedResult = $cache->getItem(key: $cacheKey);
        if ($cachedResult->isHit()) {
            $data = $cachedResult->get();
            return $this->render('serie/catalogue.html.twig', $data);
        }

        // Construction de la requête pour filtrer les séries
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('s')
            ->from(Serie::class, 's')
            ->orderBy('s.titre', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        // Exécution des requêtes
        $series = $queryBuilder->getQuery()->getResult();

        // Calcul du nombre total de séries
        $totalSeries = $this->entityManager->createQueryBuilder()
            ->select('COUNT(s.id)')
            ->from(Serie::class, 's')
            ->getQuery()
            ->getSingleScalarResult();

        $totalPages = ceil($totalSeries / $limit);

        // Sauvegarde des résultats dans le cache
        $cachedData = [
            'series' => $series,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];

        $cachedResult->set($cachedData);
        $cachedResult->expiresAfter(3600); // 1 heure
        $cache->save($cachedResult);

        return $this->render('serie/catalogue.html.twig', $cachedData);
    }
}
