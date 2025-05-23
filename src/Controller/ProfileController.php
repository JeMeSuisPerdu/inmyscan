<?php
// src/Controller/ProfileController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/mylist', name: 'profile')]
    public function index(): Response
    {
        // Simplement rendre la vue pour afficher les animes du localStorage côté client
        return $this->render('profile/index.html.twig', []);
    }
}
