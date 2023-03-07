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
        
        // Générez le contenu HTML de l'actualité
        $html = '<html><body>';
        $imagePath = $this->getParameter('kernel.project_dir') . '/public/assets/images/logo.png';
        $html .= '<div style="text-align:center;"><img src="' . $imagePath . '" /></div>';
        if ($actualite->getImage()) {
            $path = $this->getParameter('kernel.project_dir') . '/public/uploads/images/actualites/' . $actualite->getImage();
            $data = base64_encode(file_get_contents($path));
            $html .= '<img src="data:image/png;base64,' . $data . '" />';
        }
        $html .= '<h1>' . $actualite->getTitre() . '</h1>';
        
        $html .= '<p>' . $actualite->getContenu() . '</p>';
        $html .= '<p>' . $actualite->getAuteur() . '</p>';
        
        $html .= '</body></html>';
        
        // Générez le fichier PDF en utilisant Dompdf
        
        $dompdf = new Dompdf();
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

