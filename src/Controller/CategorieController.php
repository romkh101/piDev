<?php

namespace App\Controller;

use App\Entity\Categorie;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CategorieType;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
        /**
 * @Route("/AfficherC", name="AfficherC")
 */
public function Afficher(CategorieRepository $repository)
{
$categorie=$repository->findAll();
return $this->render('categorie/afficherC.html.twig',
["categorie"=>$categorie]);
}
/**
 * @Route("/SupprimerC/{id}", name="SupprimerC")
 */
public function Supprimer($id, CategorieRepository $repository)
{
$categorie=$repository->find($id);
$em=$this->getDoctrine()->getManager();
$em->remove($categorie);
$em->flush();
return $this->redirectToRoute('AfficherC');
}
/**
 * @Route("/AjouterC", name="AjouterC")
 */
public function ajouter(Request $request)
{
    $categorie = new Categorie();
    $form = $this->createForm(CategorieType::class, $categorie);
    $form->add('Ajouter', SubmitType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($categorie);
        $em->flush();

        return $this->redirectToRoute('AfficherC');
    }

    return $this->render('Categorie/ajouterC.html.twig', [
        'form' => $form->createView(),
    ]);
}
 /**
 * @Route("/ModifierC", name="ModifierC")
 */
public function Modifier(CategorieRepository $repository, Request $request)
{
    $id = $request->query->get('id');
    if (!$id) {
        throw $this->createNotFoundException('L\'identifiant de l\'actualité est manquant.');
    }
    $categorie = $repository->find($id);
    $form = $this->createForm(CategorieType::class, $categorie);
    $form->add('Modifier', SubmitType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($categorie);
        $em->flush();
        return $this->redirectToRoute('AfficherC');
    }

    return $this->render('categorie/modifierC.html.twig', [
        'form' => $form->createView(),
        'categorie' => $categorie
    ]);
}
}
