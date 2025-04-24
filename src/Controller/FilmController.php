<?php

namespace App\Controller;

use App\Entity\Films;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Cache\CacheItemPoolInterface;

class FilmController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/films_catalogue', name: 'films_catalogue')]
    public function catalogue(Request $request, CacheItemPoolInterface $cache): Response
    {
        $limit = 25; // Nombre de films par page
        $page = $request->query->getInt('page', 1); // Numéro de page (par défaut 1)
        $offset = ($page - 1) * $limit;
    
        // Création d'une clé de cache unique
        $cacheKey = 'films_catalogue_' . md5(serialize([$page]));
    
        // Vérification du cache
        $cachedResult = $cache->getItem($cacheKey);
        if ($cachedResult->isHit()) {
            $data = $cachedResult->get();
            return $this->render('films/catalogue.html.twig', $data);
        }
    
        // Construction de la requête pour filtrer les films
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('f')
            ->from(Films::class, 'f')
            ->orderBy('f.titre', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);
    
        // Exécution des requêtes
        $films = $queryBuilder->getQuery()->getResult();
    
        // Calcul du nombre total de films
        $totalFilms = $this->entityManager->createQueryBuilder()
            ->select('COUNT(f.id)')
            ->from(Films::class, 'f')
            ->getQuery()
            ->getSingleScalarResult();
    
        $totalPages = ceil($totalFilms / $limit);
    
        // Sauvegarde des résultats dans le cache
        $cachedData = [
            'films' => $films,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ];
    
        $cachedResult->set($cachedData);
        $cachedResult->expiresAfter(3600); // 1 heure
        $cache->save($cachedResult);
    
        return $this->render('films/catalogue.html.twig', $cachedData);
    }
    
}
