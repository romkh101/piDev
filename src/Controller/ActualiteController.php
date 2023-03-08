<?php

namespace App\Controller;


use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Actualite;
use App\Entity\Categorie;
use App\Repository\ActualiteRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ActualiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Dompdf\Dompdf;
use App\Form\RechercheType;
use App\Form\ListcategorieType;

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
    public function Afficher(ActualiteRepository $repository,CategorieRepository $rc,  Request $request)
{
    
$actualite=$repository->findAll();
    $form=$this->createform(RechercheType::class);
        $search=$form->handleRequest($request);
        
        $categorie = $rc->findAll();
        
          if($form->isSubmitted() && $form->isValid()){
            // On recherche les actualites correspondant aux mots clés
            $actualite = $repository->search(
                $search->get('mots')->getData(),
                $search->get('categorie')->getData()
            );
        }
return $this->render('actualite/afficher.html.twig',
["actualite"=>$actualite,
'categories' => $categorie,
            'form' => $form->createView(),]);
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
    public function Afficherfront(ActualiteRepository $repository, Request $request,CategorieRepository $rc)
    {   
        $limit = 2;
        $page = (int)$request->query->get("page", 1);
        $total = $repository->getTotalActualites();
        $actualite = $repository->getPaginatedActualites($page, $limit);
        
        return $this->render('actualite/afficherfront.html.twig', [
            
            'actualite' => $actualite,
            'total' => $total,
            'limit' => $limit,
            'page' => $page,
        ]);
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
     * @Route("/AfficherA/{id}/export-pdf", name="export_actualite")
     */
    public function exportAction($id)
{
    // Récupérez l'actualité à exporter en utilisant l'ID
    $actualite = $this->getDoctrine()->getRepository(Actualite::class)->find($id);

    // Générez le contenu HTML de l'actualité avec un style personnalisé
    $html = '<html><head><style>
    .container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        
    }
    .logo-container {
        width: 200px;
        height: 200px;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }
    .logo {
        max-width: 100%;
        max-height: 100%;
    }
    .date-container {
        width: 200px;
        height: 50px;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }
    .date {
        font-size: 18px;
        font-weight: bold;
    }
    .title {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .date-container {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }
    .center-image img {
        width: 100%;
        height: auto;
      }
    
    .content {
        margin-top: 50px;
        text-align: justify;
        line-height: 1.5;
    }
    .content-container {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
     }
    
    .author {
        margin-top: 30px;
        font-style: italic;
        text-align: right;
    }
    
    .footer {
        margin-top: 50px;
        font-size: 14px;
        font-style: italic;
        text-align: center;
    }
    
    </style></head><body>';

    $pathlogo = $this->getParameter('kernel.project_dir') . '/public/assets/images/logo.png';
    $imageData = base64_encode(file_get_contents($pathlogo));
    $html .= '<div class="container"><div class="logo-container"><img class="logo" src="data:image/png;base64,' . $imageData . '"/></div>';

    $date = new \DateTime();
    $dateStr = $date->format('d/m/Y');
    $html .= '<div class="date-container"><div class="date">Date: ' . $dateStr . '</div></div>';

    if ($actualite->getImage()) {
    $path = $this->getParameter('kernel.project_dir') . '/public/uploads/images/actualites/' . $actualite->getImage();
    $data = base64_encode(file_get_contents($path));
    $html .= '<div class="center-image"><img src="data:image/png;base64,' . $data . '" /></div>';
    }
    $html .= '<div class="title">' . $actualite->getTitre() . '</div></div>';
    $html .= '<div  class="content-container"><p>' . $actualite->getContenu() . '</p></div>';
    $html .= '<div style="text-align: center;"><p> Auteur: ' . $actualite->getAuteur() . '</p> </div>';
    $html .= '<div style="text-align: center; margin-top: 50px; font-size: 14px; " class="footer">Copyright © 2023 ABC-Sports. All rights reserved.</div>';
    $html .= '</body></html>';


    // Générez le fichier PDF en utilisant Dompdf
    $dompdf = new Dompdf();
    $dompdf->set_option('isRemoteEnable', TRUE);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $pdf = $dompdf->output();

    // Retournez le fichier PDF en tant que réponse HTTP
    $response = new Response();
    $response->headers->set('Content-Type', 'application/pdf');
    $response->setContent($pdf);
    $response->headers->set('Content-Disposition', 'attachment;filename="actualite.pdf"');

    return $response;
}

}

