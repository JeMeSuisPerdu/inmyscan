<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; 

class HomeController extends AbstractController
{
    private $entityManager; 

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Récupérer tous les mangas avec leurs rôles
        $query = $this->entityManager->createQuery(
            'SELECT m, r
            FROM App\Entity\Manga m
            LEFT JOIN m.roles r
            ORDER BY m.titre ASC'
        )
        ->setMaxResults(100);
        
        $mangas = $query->getResult();
        
        // Préparer les rôles pour chaque manga
        $mangasRolesArray = [];
        foreach ($mangas as $manga) {
            $rolesForManga = [];
            foreach ($manga->getRoles() as $role) {
                $rolesForManga[] = $role->getNom();
            }
            $mangasRolesArray[$manga->getTitre()] = $rolesForManga;
        }

        // Nouvelle requête pour récupérer 15 mangas avec le rôle "Romance"
        $romanceMangasQuery = $this->entityManager->createQuery(
            'SELECT m, r
            FROM App\Entity\Manga m
            JOIN m.roles r
            WHERE r.nom = :roleName
            ORDER BY m.titre ASC'
        )
        ->setParameter('roleName', 'Romance')
        ->setMaxResults(29);
                
        $romanceMangas = $romanceMangasQuery->getResult();
    
        // Nouvelle requête pour récupérer 19 mangas avec le rôle "Horreur"
        $actionMangasQuery = $this->entityManager->createQuery(
            'SELECT m, r
            FROM App\Entity\Manga m
            JOIN m.roles r
            WHERE r.nom = :roleName
            ORDER BY m.titre ASC'
        )
        ->setParameter('roleName', 'Horreur')
        ->setMaxResults(19);
        
        $actionMangas = $actionMangasQuery->getResult();
    
        // Nouvelle requête pour récupérer 19 films triés par titre
        $filmsQuery = $this->entityManager->createQuery(
            'SELECT f
            FROM App\Entity\Films f
            ORDER BY f.titre ASC'
        )
        ->setMaxResults(19);

        $films = $filmsQuery->getResult();


        // Nouvelle requête pour récupérer 19 films triés par titre
        $seriesQuery = $this->entityManager->createQuery(
            'SELECT f
            FROM App\Entity\Serie f
            ORDER BY f.titre ASC'
        )
        ->setMaxResults(19);

        $series = $seriesQuery->getResult();
        
        // Nouvelle requête pour récupérer les 5 derniers films ajoutés
        $latestFilmsQuery = $this->entityManager->createQuery(
            'SELECT f
            FROM App\Entity\Films f
            ORDER BY f.createdAt DESC'
        )
        ->setMaxResults(5);
        $latestFilms = $latestFilmsQuery->getResult();

        return $this->render('home/home.html.twig', [
            'mangas' => $mangas,
            'mangasWithRoles' => $mangasRolesArray,
            'actionMangas' => $actionMangas,
            'romanceMangas' => $romanceMangas,
            'films' => $films,
            'series'=> $series,
            'latestFilms' => $latestFilms,
        ]);
    }
    
}
