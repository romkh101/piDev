<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Form\ParticipantType;
use App\Repository\ParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Back;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Endroid\QrCode\QrCode;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;

class ParticipantController extends AbstractController
{
    #[Route('/participant/count', name: 'participant_count')]
    public function count(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('name')
            ->add('search', SubmitType::class, ['label' => 'Search'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $count = $this->getDoctrine()
                ->getRepository(Participant::class)
                ->createQueryBuilder('p')
                ->select('COUNT(p.id)')
                ->join('p.evenement', 'e')
                ->where('e.name = :name')
                ->setParameter('name', $data['name'])
                ->getQuery()
                ->getSingleScalarResult(); }
                else{
                    $count=null ;
                }

            return $this->render('participant/count.html.twig', [
                'count' => $count,
                            'form' => $form->createView(),

            ]);
       

        return $this->render('participant/count.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }

    







    #[Route('/part', name: 'app_participant_index', methods: ['GET'])]
    public function index(ParticipantRepository $participantRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

    $limit = $request->query->get('limit', 1);
    $page = $request->query->get('page', 1);
    $query = $participantRepository->createQueryBuilder('t')
    ->orderBy('t.date', 'DESC')
    ->getQuery();
    

    $yourEntities = $entityManager->getRepository(Participant::class)->findAll();
    $pagination = $paginator->paginate(
        $yourEntities,
        $page,
        $limit
    );
    return $this->render('participant/index.html.twig', [
        
        'participant' => $pagination,
    ]);
}

    #[Route('/new', name: 'app_participant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParticipantRepository $participantRepository): Response
    {
        $back=new Back();
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);
        $myArray = [];
       
        if ($form->isSubmitted() && $form->isValid()) {
            $back->setNbPart($back->getNbPart()+1);
            // Vérifier si l'athlète existe déjà en base de données
            $existingparticipant = $participantRepository->findOneBy(['nom' => $participant->getNom(), 'prenom' => $participant->getPrenom()]);
            
            if ($back->getNbPart() == $back->getNbMaxPart()) {
                // Ajouter un message d'erreur flash
                echo("nombre de participant plein");
                $this->addFlash('danger', 'L ne peut pas être ajouté car il ne répond pas aux critères d\'âge et de poids requis.');
                return $this->redirectToRoute('app_participant_new');
                
            } else {
                var_dump($back->getNbPart());
                $participantRepository->save($participant, true);
                $this->addFlash('success', ' a été ajouté avec succès.');
                return $this->redirectToRoute('app_participant_index', [], Response::HTTP_SEE_OTHER);
            }
        }
    
        return $this->renderForm('participant/new.html.twig', [
            'participant' => $participant,
            'form' => $form,
            'myArray' => $myArray,
    
            
        ]);
    }

    
    #[Route('/{id}', name: 'app_participant_show', methods: ['GET'])]
    public function show(Participant $participant): Response
    {
        return $this->render('participant/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participant $participant, ParticipantRepository $participantRepository): Response
    {
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participantRepository->save($participant, true);

            return $this->redirectToRoute('app_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participant/edit.html.twig', [
            'participant' => $participant,
            'form' => $form,
        ]);
    } 

    #[Route('/{id}', name: 'app_participant_delete', methods: ['POST'])]
    public function delete(Request $request, Participant $participant, ParticipantRepository $participantRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participant->getId(), $request->request->get('_token'))) {
            $participantRepository->remove($participant, true);
        }

        return $this->redirectToRoute('app_participant_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/assign-participant', name:'back_assign_participant' ,methods: ['POST','GET'])]


public function assignParticipan(Request $request, Back $back): Response
{
    $form = $this->createFormBuilder()
        ->add('participant', EntityType::class, [
            'class' => Participant::class,
            'choice_label' => 'prenom',
            'placeholder' => 'Select an participant',
        ])
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid() && !$back->setNbMaxPart(3)) {
        $participant = $form->get('participant')->getData();
        $back->addParticipant($participant);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($back);
        $entityManager->flush();

        $this->addFlash('success', 'Participant added to back successfully.');

        return $this->redirectToRoute('app_back_show', ['id' => $back->getId()]);
    }

    return $this->render('back/assign-participant.html.twig', [
        'form' => $form->createView(),
        'back'=>$back
    ]);
}
public function indexx(ParticipantRepository $participantRepository, Request $request, PaginatorInterface $paginator): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $limit = $request->query->get('limit', 5);
    $page = $request->query->get('page', 1);
    $query = $participantRepository->createQueryBuilder('t')
    ->orderBy('t.date', 'DESC')
    ->getQuery();
    

    $yourEntities = $entityManager->getRepository(Participant::class)->findAll();
    $pagination = $paginator->paginate(
        $yourEntities,
        $page,
        $limit
    );
    return $this->render('participant/index.html.twig', [
        
        'participant' => $pagination,
    ]);
}


public function __construct(PaginatorInterface $paginator)
{
    $this->paginator = $paginator;
}

#[Route('/', name: 'app_participant_index', methods: ['GET'])]

public function indexxx(ParticipantRepository $participantRepository, Request $request, PaginatorInterface $paginator): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    // récupérer les paramètres de la requête
    $limit = $request->query->getInt('limit', 5);
    $page = $request->query->getInt('page', 1);
    $q = $request->query->get('q');

    // construire la requête pour récupérer les participants
    $queryBuilder = $participantRepository->createQueryBuilder('t');
    $queryBuilder->orderBy('t.id', 'ASC');
    if ($q) {
        $queryBuilder->where('t.name_event LIKE :q')
                     ->setParameter('q', '%'.$q.'%');
    }
    $query = $queryBuilder->getQuery();

    // paginer les résultats
    $pagination = $paginator->paginate(
        $query,
        $page,
        $limit
    );

    return $this->render('participant/index.html.twig', [
        'participant' => $pagination,
        'q' => $q,
    ]);
}

#[Route('/{id}/pdf', name: 'app_participant_pdf', methods: ['GET','POST'])]
public function pdf(Participant $participant): Response
{
    // create new PDF document
    $dompdf = new Dompdf();
    
    // generate HTML content for the document
    $html = $this->renderView('participant/pdf.html.twig', [
        'participant' => $participant, 
        
    ]);

    // load HTML into the PDF document
    $dompdf->loadHtml($html);

    // set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // render PDF document
    $dompdf->render();

    // create a response object to return the PDF file
    $response = new Response($dompdf->output());
    
    // set content type to application/pdf
    $response->headers->set('Content-Type', 'application/pdf');

    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_INLINE,
        'participant.pdf'
    );
    $response->headers->set('Content-Disposition', $disposition);

    return $response;
}

    /**
     * @Route("/front", name="app_podcasts_indexfront", methods={"GET"})
     */
    public function qr()
    {
        $qrCode = new QrCode('Hello, world!');
        $qrCode->setSize(300);
        $qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(QrCode::LEVEL_HIGH);
        
        // Render the QR code as an image
        $qrCode->writeFile('/public/qr-code/6224ed784ac7e.png');
        
        // Or render the QR code as a string
        $qrCodeDataUri = $qrCode->writeDataUri();
    }

}

