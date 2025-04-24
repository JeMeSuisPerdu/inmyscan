<?php

// src/Controller/MangaUploadController.php

namespace App\Controller;

use App\Entity\Manga;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MangaUploadController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/creation_manga', name: 'manga_create_form', methods: ['GET'])]
    public function showForm(): Response
    {
        // Récupérer le dernier ID du Manga dans la base de données
        $lastManga = $this->entityManager->getRepository(Manga::class)->findOneBy([], ['id' => 'DESC']);
        $nextId = $lastManga ? (int)$lastManga->getId() + 1 : 1;

        // Renvoyer le formulaire avec le prochain ID
        return $this->render('manga_upload/index.html.twig', [
            'nextId' => $nextId
        ]);
        
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/creation_manga', name: 'manga_create', methods: ['POST'])]
    public function create(Request $request): Response
    {
        // Récupérer l'ID envoyé dans le formulaire (mais ne pas le définir sur l'entité Manga)
        $title = $request->request->get('title');
        $description = $request->request->get('description');
        $author = $request->request->get('author');

        /** @var UploadedFile $photoFile */
        $photoFile = $request->files->get('photo');

        $manga = new Manga();
        $manga->setTitre($title);
        $manga->setDescription($description);
        $manga->setAuthor($author);

        // Gérer le téléchargement de la photo
        if ($photoFile) {
            $photoFilename = 'photo_' . ($this->entityManager->getRepository(Manga::class)->findOneBy([], ['id' => 'DESC'])->getId() + 1) . '.jpg'; 
            try {
                $photoFile->move(
                    $this->getParameter('photo_directory'),
                    $photoFilename
                );
                $manga->setPhoto($photoFilename);
            } catch (FileException $e) {
                // Gestion des erreurs en cas de problème de téléchargement
                return new Response('Erreur lors du téléchargement de la photo', Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        // Sauvegarder le manga dans la base de données
        $this->entityManager->persist($manga);
        $this->entityManager->flush();

        return new Response('Manga créé avec succès', Response::HTTP_CREATED);
    }
}
