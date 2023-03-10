<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Equipe;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Form\FormView ;


class EquipeController extends AbstractController
{
    #[Route('/', name: 'app_equipe_index', methods: ['GET'])]
    public function index(EquipeRepository $EquipeRepository): Response
    {
        return $this->render('Equipe/index.html.twig', [
            'Equipe' => $EquipeRepository->findAll(),
        ]);
    }


    
    #[Route('/new', name: 'app_Equipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EquipeRepository $EquipeRepository): Response
    {
        $Equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $Equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                  // Récupération du fichier image
        $imageFile = $form->get('Logo')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            // ceci est nécessaire pour inclure en toute sécurité le nom de fichier en tant qu'URL
            $safeFilename = strtolower(preg_replace('/[^A-Za-z0-9_]+/', '-', $originalFilename));
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                   //$this->getParameter('equipe_images_directory'),
                     $this->getParameter('equipe_images_directory'),
                     $newFilename
                   
                );
            } catch (FileException $e) {
                // Gérer l'exception si quelque chose se passe pendant le téléchargement du fichier
            }

            $Equipe->setLogo($newFilename);
        }
            
        
        
            $EquipeRepository->save($Equipe, true);
            return $this->redirectToRoute('App');
        
    }
        return $this->renderForm('equipe/add.html.twig', [
            'Equipe' => $Equipe,
            'form' => $form,
        ]);
        

    }

   
    #[Route('/consulterequipe', name: 'app_equipe_index')]
    public function liste( equipeRepository $equipeRepository)
    {

        $equipe = $equipeRepository->findAll(); // Query the database to retrieve all the equipe data
        return $this->render('equipe/show.html.twig', [
            'Equipe' => $equipe, // Pass the equipe data to the template
        ]);
    }

    #[Route('/show/{id}', name: 'app_equipe_show', methods: ['GET'])]
    public function show(Equipe $Equipe): Response
    {
        
        return $this->render('equipe/show.html.twig', [
            'Equipe' => $Equipe->createView(),
        ]);
    }


    #[Route('/{id}/edit', name: 'app_Equipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Equipe $Equipe, EquipeRepository $EquipeRepository): Response
    {
        $form = $this->createForm(EquipeType::class, $Equipe);
        //Handle form submission
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $EquipeRepository->save($Equipe, true);

            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Equipe/edit.html.twig', [
            'form' => $form->createView(),
            'Equipe' => $Equipe, // pass the form model to the template
            
        ]);
    }

    #[Route('/{id}/delete', name: 'app_Equipe_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Equipe $Equipe, EquipeRepository $EquipeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Equipe->getId(), $request->request->get('_token'))) {
            $EquipeRepository->remove($Equipe, true);
        }

        return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
    }
}



