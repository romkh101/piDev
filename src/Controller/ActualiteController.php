<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\Categorie;
use App\Repository\ActualiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ActualiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;



class ActualiteController extends AbstractController
{
    #[Route('/actualite', name: 'actualite')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'ActualiteController',
        ]);
    }
   
    
    /**
 * @Route("/AfficherA", name="AfficherA")
 */
    public function Afficher(ActualiteRepository $repository)
{
$actualite=$repository->findAll();
return $this->render('actualite/afficher.html.twig',
["actualite"=>$actualite]);
}

/**
 * @Route("/SupprimerA/{id}", name="SupprimerA")
 */
public function Supprimer($id, ActualiteRepository $repository)
{
$actualite=$repository->find($id);
$em=$this->getDoctrine()->getManager();
$em->remove($actualite);
$em->flush();
return $this->redirectToRoute('AfficherA');
}
/**
 * @Route("/AjouterA", name="AjouterA")
 */
public function ajouter(Request $request)
{
    $em = $this->getDoctrine()->getManager();

    $actualite = new Actualite();
    $form = $this->createForm(ActualiteType::class, $actualite);
    $form->add('Ajouter', SubmitType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        
        $imageFile = $form->get('Image')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = strtolower(preg_replace('/[^A-Za-z0-9_]+/', '-', $originalFilename));
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('actualite_images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // Gérer l'exception si quelque chose se passe pendant le téléchargement du fichier
            }

            $actualite->setImage($newFilename);
        }

        $em->persist($actualite);
        $em->flush();

        $this->addFlash('success', 'L\'actualité a été ajoutée avec succès.');

        return $this->redirectToRoute('AfficherA', ['id' => $actualite->getCategorie()->getId()]);
    }

    return $this->render('Actualite/ajouter.html.twig', [
        'form' => $form->createView(),
    ]);
}
    /**
 * @Route("/ModifierA", name="ModifierA")
 */
public function Modifier(ActualiteRepository $repository,  Request $request)
{
    
   
    $id = $request->query->get('id');
    if (!$id) {
        throw $this->createNotFoundException('L\'identifiant de l\'actualité est manquant.');
    }
    $actualite = $repository->find($id);
    $form = $this->createForm(ActualiteType::class, $actualite);
    $form->add('Modifier', SubmitType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('Image')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = preg_replace('/\s+/', '-', $originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
            try {
                $imageFile->move(
                    $this->getParameter('actualite_images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // handle exception if something happens during file upload
            }
            $actualite->setImage($newFilename);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($actualite);
        $em->flush();
        return $this->redirectToRoute('AfficherA');
    }

    return $this->render('actualite/modifier.html.twig', [
        'form' => $form->createView(),
        'actualite' => $actualite
    ]);
}
    /**
 * @Route("/Afficherfront", name="Afficherfront")
 */
public function Afficherfront(ActualiteRepository $repository, Request $request)
{
    {
        $actualite=$repository->findAll();
        return $this->render('actualite/afficherfront.html.twig',
        ["actualite"=>$actualite]);
        }
}

/**
 * @Route("/Afficheractualite", name="Afficheractualite")
 */
public function afficherActualite(ActualiteRepository $repository, Request $request)
{
    $id = $request->query->get('id');
    if (!$id) {
        throw $this->createNotFoundException('L\'identifiant de l\'actualité est manquant.');
    }
    $actualite = $repository->find($id);
    
    return $this->render('actualite/afficheractualite.html.twig', [
        'actualite' => $actualite
    ]);
}
/**
 * @Route("/RechercheA", name="RechercheA")
 */
public function recherche(Request $request)
{
    $criteria = [
        'titre' => $request->get('titre'),
        'dateDebut' => $request->get('dateDebut'),
        'dateFin' => $request->get('dateFin')
    ];

    $actualites = $this->getDoctrine()->getRepository(Actualite::class)->findByCriteria($criteria);

    return $this->render('actualite/recherche.html.twig', [
        'actualites' => $actualites
    ]);
}

}

