<?php
namespace App\Controller;

use App\Entity\Scan;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ScanController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/creation_scan', name: 'scan_create_form', methods: ['GET'])]
    public function showCreateScanForm(): Response
    {
        return $this->render('scan_view/create.html.twig');
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/scan/{id}/ajout_chapitre_form', name: 'scan_ajout_chapitre_form', methods: ['GET'])]
public function showAddChapitreForm(int $id): Response
{
    return $this->render('scan_view/add.html.twig', [
        'scanId' => $id,  // Passe l'ID du scan au template pour l'ajout des chapitres
    ]);
}

#[IsGranted('ROLE_ADMIN')]
#[Route('/scan/ajouter', name: 'ajouter_scan', methods: ['POST'])]
public function ajouterScan(Request $request, EntityManagerInterface $entityManager): Response
{
    // Créer un nouvel objet Scan
    $scan = new Scan();

    // Récupérer le nom, l'eps et les liens depuis la requête
    $nom = $request->request->get('nom');
    $eps = $request->request->get('eps');
    $liens = $request->request->get('liens');

    // Assigner les valeurs
    $scan->setNom($nom);

    // Convertir les liens en tableau
    $liensArray = explode(',', $liens); // On sépare les liens par des virgules
    $liensJSON = [
        $eps => $liensArray
    ];

    // Ajouter les liens au Scan
    $scan->setLiens($liensJSON);

    // Persister et enregistrer en base de données
    $entityManager->persist($scan);
    $entityManager->flush();

    // Rediriger ou renvoyer une réponse
    return $this->redirectToRoute('app_home');
}

#[IsGranted('ROLE_ADMIN')]
#[Route('/scan/{id}/ajouter-chapitre', name: 'ajouter_chapitre', methods: ['POST'])]
public function ajouterChapitre(Request $request, Scan $scan, EntityManagerInterface $entityManager): Response
{
    // Récupérer l'eps et les liens depuis la requête
    $eps = $request->request->get('eps');
    $liens = $request->request->get('liens');

    // Convertir les liens en tableau
    $liensArray = explode(',', $liens);

    // Récupérer les liens existants du scan
    $liensExistants = $scan->getLiens();

    // Ajouter ou mettre à jour les nouveaux liens dans l'épisode donné
    $liensExistants[$eps] = $liensArray;
    $scan->setLiens($liensExistants);

    // Mettre à jour la date de modification
    $scan->setDateModification(new \DateTime());

    // Persister et enregistrer en base de données
    $entityManager->persist($scan);
    $entityManager->flush();

    // Rediriger ou renvoyer une réponse
    return $this->redirectToRoute('app_home');
}

}
