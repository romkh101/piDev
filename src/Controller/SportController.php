<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Sport;
use App\Form\SportType;
use App\Repository\SportRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Form\FormView ;

class SportController extends AbstractController
{
    #[Route('/sport', name: 'app_sport')]
    public function index(): Response
    {
        return $this->render('sport/index.html.twig', [
            'controller_name' => 'SportController',
        ]);
    }
    #[Route('/new', name: 'app_Sport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SportRepository $SportRepository): Response
    {
        $Sport = new Sport();
        $form = $this->createForm(SportType::class, $Sport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $SportRepository->save($Sport, true);

            return $this->redirectToRoute('app_Sport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Sport/new.html.twig', [
            'Sport' => $Sport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_Sport_show', methods: ['GET'])]
    public function show(Sport $Sport): Response
    {
        return $this->render('Sport/show.html.twig', [
            'Sport' => $Sport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_Sport_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sport $Sport, SportRepository $SportRepository): Response
    {
        $form = $this->createForm(SportType::class, $Sport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $SportRepository->save($Sport, true);

            return $this->redirectToRoute('app_Sport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Sport/edit.html.twig', [
            'Sport' => $Sport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_Sport_delete', methods: ['POST'])]
    public function delete(Request $request, Sport $Sport, SportRepository $SportRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Sport->getId(), $request->request->get('_token'))) {
            $SportRepository->remove($Sport, true);
        }

        return $this->redirectToRoute('app_Sport_index', [], Response::HTTP_SEE_OTHER);
    }

}
