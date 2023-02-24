<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Form\ForumType;
use App\Repository\ForumRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{
    #[Route('/back', name: 'app_forum')]
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'ForumController',
        ]);
    }
    #[Route('/', name: 'add_Forum')]
    public function Add(Request  $request , ManagerRegistry $doctrine ) : Response {
        $Forum =  new Forum() ;
        $form =  $this->createForm(ForumType::class,$Forum) ;
        $form->add('Ajouter' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
            $Forum = $form->getData();
            $em= $doctrine->getManager() ;
            $em->persist($Forum);
            $em->flush();
            return $this ->redirectToRoute('add_Forum') ;
        }
        return $this->render('front/addfor.html.twig' , [
            'form' => $form->createView()
        ]) ;
    }

    #[Route('/afficher_for', name: 'afficher_for')]
    public function AfficheForum (ForumRepository $repo   ): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Forum::class) ;
        $Forum=$repo->findAll() ;
        return $this->render('back/index.html.twig' , [
            'Forum' => $Forum ,
            'ajoutF' => $Forum
        ]) ;
    }

    #[Route('/delete_for/{id}', name: 'delete_for')]
    public function Delete($id,ForumRepository $repository , ManagerRegistry $doctrine) : Response {
        $Forum=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($Forum);
        $em->flush();
        return $this->redirectToRoute("afficher_for") ;

    }
    #[Route('/update_for/{id}', name: 'update_for')]
    function update(ForumRepository $repo,$id,Request $request , ManagerRegistry $doctrine){
        $Forum = $repo->find($id) ;
        $form=$this->createForm(ForumType::class,$Forum) ;
        $form->add('update' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $Forum = $form->getData();
            $em=$doctrine->getManager() ;
            $em->flush();
            return $this ->redirectToRoute('afficher_for') ;
        }
        return $this->render('back/updatefor.html.twig' , [
            'form' => $form->createView()
        ]) ;

    }
}
