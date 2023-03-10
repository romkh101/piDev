<?php

namespace App\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Entity\Athlete;
use App\Entity\Tournoi;
use App\Form\TournoiType;
use App\Repository\TournoiRepository;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Knp\Component\Pager\PaginatorInterface;
use PharIo\Manifest\Email;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Test\Constraint\EmailAttachmentCount;
use \Swift_Mailer;
use Endroid\QrCodeBundle\Response\QrCodeResponse;
use Endroid\QrCode\QrCodeFactoryInterface;

#[Route('/tournoi')]
class TournoiController extends AbstractController
{ private $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }
    
    #[Route('/', name: 'app_tournoi_index', methods: ['GET'])]
    
    public function index(TournoiRepository $tournoiRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
    
        // récupérer les paramètres de la requête
        $limit = $request->query->getInt('limit', 5);
        $page = $request->query->getInt('page', 1);
        $q = $request->query->get('q');
    
        // construire la requête pour récupérer les tournois
        $queryBuilder = $tournoiRepository->createQueryBuilder('t');
        $queryBuilder->orderBy('t.id', 'ASC');
        if ($q) {
            $queryBuilder->where('t.titre LIKE :q')
                         ->setParameter('q', '%'.$q.'%');
        }
        $query = $queryBuilder->getQuery();
    
        // paginer les résultats
        $pagination = $paginator->paginate(
            $query,
            $page,
            $limit
        );
    
        return $this->render('tournoi/index.html.twig', [
            'tournoi' => $pagination,
            'q' => $q,
        ]);
    }
    
    

    #[Route('/new', name: 'app_tournoi_new', methods: ['GET', 'POST'])]
public function new(Request $request, TournoiRepository $tournoiRepository, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
{
    $tournoi = new Tournoi();
    $form = $this->createForm(TournoiType::class, $tournoi);
    $form->handleRequest($request);
    

    if ($form->isSubmitted() && $form->isValid()) {
        $tournoiRepository->save($tournoi, true);
        
        // Ajout de flush pour enregistrer les changements en base de données
        $entityManager->flush();
        $message = (new \Swift_Message('PDF'))
                ->setFrom('mansoussr@gmail.com')
                ->setTo('ferjaniwael40@gmail.com')
                ->setBody(
                    $this->renderView(
                        'emails/pdf.html.twig',
                        
                    ),
                    'text/html'
                );

            $mailer->send($message);

        return $this->redirectToRoute('app_tournoi_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('tournoi/new.html.twig', [
        'tournoi' => $tournoi,
        'form' => $form,
    ]);
}


    #[Route('/{id}', name: 'app_tournoi_show', methods: ['GET'])]
    public function show(Tournoi $tournoi): Response
    {
       
    return $this->render('tournoi/show.html.twig', [
        'tournoi' => $tournoi,
        
    ]);
    }

    #[Route('/{id}/edit', name: 'app_tournoi_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tournoi $tournoi, TournoiRepository $tournoiRepository): Response
    {
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tournoiRepository->save($tournoi, true);

            return $this->redirectToRoute('app_tournoi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tournoi/edit.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tournoi_delete', methods: ['POST'])]
    public function delete(Request $request, Tournoi $tournoi, TournoiRepository $tournoiRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tournoi->getId(), $request->request->get('_token'))) {
            $tournoiRepository->remove($tournoi, true);
        }

        return $this->redirectToRoute('app_tournoi_index', [], Response::HTTP_SEE_OTHER);
    }
 
#[Route('/{id}/assign-athlete', name:'tournoi_assign_athlete' ,methods: ['POST','GET'])]

public function assignAthlete(Request $request, Tournoi $tournoi): Response
{
    
    $form = $this->createFormBuilder()
        ->add('athlete', EntityType::class, [
            'class' => Athlete::class,
            'choice_label' => 'prenom',
            'placeholder' => 'Select an athlete',
        ])
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $athlete = $form->get('athlete')->getData();
        $tournoi->addAthlete($athlete);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($tournoi);
        $entityManager->flush();

        $this->addFlash('success', 'Athlete added to tournoi successfully.');

        return $this->redirectToRoute('app_tournoi_show', ['id' => $tournoi->getId()]);
    }

    return $this->render('tournoi/assign-athlete.html.twig', [
        'form' => $form->createView(),
        'tournoi'=>$tournoi
    ]);
}



#[Route('/{id}/pdf', name: 'app_tournoi_pdf', methods: ['GET','POST'])]
public function pdf(Tournoi $tournoi): Response
{
    // Générer le contenu HTML pour le PDF
    $pathlogo = $this->getParameter('kernel.project_dir') . '/public/assets/images/logo.png';
    $imageData = base64_encode(file_get_contents($pathlogo));
    
  

    // Rendre la vue pour le PDF
    $html = $this->renderView('tournoi/pdf.html.twig', [
        'tournoi' => $tournoi, 
        'image_data' => $imageData,
        
    ]);
    
    // Créer un nouveau document PDF
    $dompdf = new Dompdf();
    
    // Charger le contenu HTML dans le document PDF
    $dompdf->loadHtml($html);

    // Définir la taille de papier et l'orientation
    $dompdf->setPaper('A4', 'portrait');

    // Appliquer les options pour l'affichage sur une seule page
    $options = new Options();
    $options->setIsPhpEnabled(true);
    $options->setIsRemoteEnabled(true);
    $options->setIsFontSubsettingEnabled(true);
    $options->setIsHtml5ParserEnabled(true);
    $options->setChroot($this->getParameter('kernel.project_dir'));
    $options->setDebugCss(false);
    $options->setDebugLayout(false);
    $options->setDebugLayoutLines(false);
    $options->setDebugLayoutBlocks(false);
    $options->setIsFontSubsettingEnabled(true);
    $options->setDefaultPaperSize('A4');
    $options->setDefaultFont('Helvetica');
    $options->setDpi(150);
    $options->setIsJavascriptEnabled(false);
    $options->setIsRemoteEnabled(false);
    $dompdf->setOptions($options);


    // Générer le document PDF
    $dompdf->render();

    // Récupérer le contenu du document PDF généré
    $output = $dompdf->output();

    // Créer une réponse HTTP avec le contenu du document PDF
    $response = new Response($output);

    // Définir le type de contenu comme application/pdf
    $response->headers->set('Content-Type', 'application/pdf');

    // Ajouter le nom du fichier PDF en tant que disposition
    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_INLINE,
        'certificat.pdf'
    );
    $response->headers->set('Content-Disposition', $disposition);

    return $response;
}


}
