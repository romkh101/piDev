<?php

namespace App\Controller;

use App\Entity\Athlete;
use App\Entity\Competition;
use App\Entity\Tournoi;
use App\Form\AthleteType;
use App\Form\CompetitionType;
use App\Repository\AthleteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/athlete')]
class AthleteController extends AbstractController
{
    #[Route('/', name: 'app_athlete_index', methods: ['GET'])]
    public function index(AthleteRepository $athleteRepository): Response
    {
        
        return $this->render('athlete/index.html.twig', [
            'athletes' => $athleteRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'app_athlete_new', methods: ['GET', 'POST'])]
public function new(Request $request, AthleteRepository $athleteRepository): Response
{
    $athlete = new Athlete();
    $form = $this->createForm(AthleteType::class, $athlete);
    $form->handleRequest($request);
    $myArray = [];
   
    if ($form->isSubmitted() && $form->isValid()) {
        // Vérifier si l'athlète existe déjà en base de données
        $existingAthlete = $athleteRepository->findOneBy(['name' => $athlete->getName(), 'prenom' => $athlete->getPrenom()]);
        if ($athlete->getAge() < 18 || $athlete->getPoids() < 60) {
            // Ajouter un message d'erreur flash
            $this->addFlash('danger', 'L\'athlète ne peut pas être ajouté car il ne répond pas aux critères d\'âge et de poids requis.');
            return $this->redirectToRoute('app_athlete_new');
            
        } else {
            $athleteRepository->save($athlete, true);
            $this->addFlash('success', 'L\'athlète a été ajouté avec succès.');
            return $this->redirectToRoute('app_athlete_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    return $this->renderForm('athlete/new.html.twig', [
        'athlete' => $athlete,
        'form' => $form,
        'myArray' => $myArray,

        
    ]);

}

#[Route('/error', name: 'app_athlete_error')]
public function error(): Response
{
    return $this->render('athlete/error.html.twig');
}

    #[Route('/{id}', name: 'app_athlete_show', methods: ['GET'])]
    public function show(Athlete $athlete): Response
    {
        return $this->render('athlete/show.html.twig', [
            'athlete' => $athlete,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_athlete_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Athlete $athlete, AthleteRepository $athleteRepository): Response
    {
        $form = $this->createForm(AthleteType::class, $athlete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $athleteRepository->save($athlete, true);

            return $this->redirectToRoute('app_athlete_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('athlete/edit.html.twig', [
            'athlete' => $athlete,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_athlete_delete', methods: ['POST'])]
    public function delete(Request $request, Athlete $athlete, AthleteRepository $athleteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$athlete->getId(), $request->request->get('_token'))) {
            $athleteRepository->remove($athlete, true);
        }

        return $this->redirectToRoute('app_athlete_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/competition/new', name: 'app_com',methods: ['GET', 'POST'])]

    public function neeew(Athlete $athlete, Request $request)
    {
        
        $competition = new Competition();
        $form = $this->createForm(CompetitionType::class, $competition);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $competition = $form->getData();
            $competition->setAthlete($athlete);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competition);
            $entityManager->flush();

            return $this->redirectToRoute('app_competition_index', ['id' => $athlete->getId()],);
        }

        return $this->render('competition/neew.html.twig', [
            'form' => $form->createView(), 
        ]);
    }
    #[Route('/{id}/tournoi/', name: 'athlete_tournoi',methods: ['GET'])]
    public function participerEvenement($tournoiId=null, $athleteId, EntityManagerInterface $entityManager)
{
    $tournoi = $entityManager->getRepository(Tournoi::class)->find($tournoiId);
    $athlete = $entityManager->getRepository(Athlete::class)->find($athleteId);

    $tournoi->addAthlete($athlete);

    $entityManager->persist($tournoi);
    $entityManager->flush();

    return $this->redirectToRoute('app_tournoi_index', ['id' => $athlete->getId()]);
    
    
}

}
