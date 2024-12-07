<?php

namespace App\Controller;

use App\Entity\Admin\Comment;
use App\Entity\Admin\Messages;
use App\Entity\Product;
use App\Entity\User;
use App\Form\Admin\MessagesType;
use App\Form\User\CommentType;
use App\Form\UserType;
use App\Repository\Admin\CommentRepository;
use App\Repository\CategoryRepository;
use App\Repository\ImageRepository;
use App\Repository\ProductRepository;
use App\Repository\SettingRepository;
use App\Repository\ShopcartRepository;
use App\Repository\UserRepository;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Bridge\Google\Smtp\GmailTransport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Knp\Component\Pager\PaginatorInterface;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, SettingRepository $settingRepository, PaginatorInterface $paginator, ProductRepository $productRepository, CategoryRepository $categoryRepository, ShopcartRepository $shopcartRepository, EventRepository $eventRepository)
    {
        $setting = $settingRepository->findBy(['id'=>3]);
        $slider = $productRepository->findBy(['status'=> 'True', 'isPromoted' => true],['title'=>'ASC']);
        $categories = $categoryRepository->findBy(['isActive'=>true],['title'=>'ASC']);
        $parameter = $request->get('category');
        $limit = $request->get('limit');
        $order = $request->get('order');
        $query = $request->get('query');
        $promotedProducts = $productRepository->findBy(['isPromoted'=>true],['title'=>'ASC']);
        $currentLimit = 27;
        $currentOrder = 'ASC';
        
        if($limit){
            $defaultLimit = $limit;
        }
        if($order && ($order == 'ASC' || $order == 'DESC')){
            $currentOrder = $order;
        }
        if(!empty($query)){
            $products = $paginator->paginate(
                $productRepository->findSearch($query), /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
                $currentLimit /*limit per page*/
                );
        }
        elseif(!empty($parameter)){
            $parameter  = $categoryRepository->find($parameter);
            $products = $paginator->paginate(
                $productRepository->findBy(['category'=>$parameter, 'status'=> 'True'],['title'=>$currentOrder]), /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
                $currentLimit /*limit per page*/
                );
            
        }else{
            $products = $paginator->paginate(
                $productRepository->findBy(['status'=> 'True'],['title'=>$currentOrder]), /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
                $currentLimit /*limit per page*/
                );
        }

        if($query || $parameter || $limit || $order) {
            return $this->render('home/filtered.html.twig', [
                'setting' => $setting,
                'products' => $products,
                'categories' => $categories,
            ]);
        }

        $shopcarts = $shopcartRepository->findBy(['user'=>$this->getUser()]);
        $events = $eventRepository->findActiveEventsWithinTimeframe();
        //$newproducts = $productRepository->findBy([],['title'=>'DESC'],10 );

        // array findBy(array $criteria, array $orderBy = null, int|null $limit = null, int|null $offset = null)
        // dump($slider);
        // die();
        return $this->render('home/index.html.twig', [
            'setting' => $setting,
            'slider' => $slider,
            'products' => $products,
            'categories' => $categories,
            'promotedProducts' => $promotedProducts,
            'events' => $events
        ]);
    }

     /**
     * @Route("/events", name="home_events")
     */
    public function events(Request $request, SettingRepository $settingRepository,  ShopcartRepository $shopcartRepository, EventRepository $eventRepository)
    {
        $setting = $settingRepository->findBy(['id'=>3]);
       

        $shopcarts = $shopcartRepository->findBy(['user'=>$this->getUser()]);
        $events = $eventRepository->findActiveEventsWithinTimeframe();
        //$newproducts = $productRepository->findBy([],['title'=>'DESC'],10 );

        // array findBy(array $criteria, array $orderBy = null, int|null $limit = null, int|null $offset = null)
        // dump($slider);
        // die();
        return $this->render('home/events.html.twig', [
            'setting' => $setting,
            'events' => $events
        ]);
    }

    /**
     * @Route("/product/{id}", name="product_show", methods={"GET"})
     */
    public function show(SettingRepository $settingRepository, ShopcartRepository $shopcartRepository,Product $product, $id, ImageRepository $imageRepository, CommentRepository $commentRepository, UserRepository $userRepository, EventRepository $eventRepository): Response
    {
        $images = $imageRepository->findBy(['product'=>$id]);
        $comments = $commentRepository->findBy(['productid'=>$id,'status'=>'True']);
        $users = $userRepository->findAll();
        $comment = new Comment();
        $form = $this->createForm(CommentType::class,$comment,[
            'action' => $this->generateUrl('user_new_comment', ['id'=>$id]),
            'attr' => [
                'class'=>'contact_form'
                ]
        ]);
        $event = $eventRepository->findOneByProducts([$product]);
        $relatedProducts = $product->getCategory()->getProducts();


       


        return $this->render('home/productshow.html.twig', [
            'product' => $product,
            'images' => $images,
            'comments' => $comments,
            'users' => $users,
            'form' => $form->createView(),
            'setting' => $settingRepository->findAll(),
            'event' => $event,
            'relatedProducts' => $relatedProducts

        ]);
    }

    /**
     * @Route("/terms-conditions", name="home_about")
     */
    public function abouts(SettingRepository $settingRepository): Response
    {
        $setting = $settingRepository->findAll();
        return $this->render('home/aboutus.html.twig', [
            'setting' => $setting,
        ]);
    }

     /**
     * @Route("/privacy-policy", name="home_privacy")
     */
    public function privacy(SettingRepository $settingRepository): Response
    {
        $setting = $settingRepository->findAll();
        return $this->render('home/privacy.html.twig', [
            'setting' => $setting,
        ]);
    }

    /**
     * @Route("/contact", name="home_contact", methods={"GET","POST"})
     */
    public function contact(SettingRepository $settingRepository, Request $request, \Swift_Mailer $mailer): Response
    {
        $message = new Messages();
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);
        $submittedToken = $request->get('token');
        $setting=$settingRepository->findAll(); // Get setting data
        // dump($request);
        // die();

        if ($form->isSubmitted()) {
            if($this->isCsrfTokenValid('form-message',$submittedToken)){
                $entityManager = $this->getDoctrine()->getManager();
                $message->setStatus('New');
                $message->setIp($_SERVER['REMOTE_ADDR']);
                $entityManager->persist($message);
                $entityManager->flush();
                $this->addFlash('success','Votre message à été envoyé!');

                // ************ SEND EMAIL ************

                $message = (new \Swift_Message('Museum Message de '.$message->getName()))
                // On attribue l'expéditeur
                ->setFrom($message->getEmail())
                // On attribue le destinataire
                ->setTo('support@my-muzeum.com')
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'email/contact.html.twig', [
                            'contact' => $message,

                        ]
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

                // ************ SEND EMAIL ************

                return $this->redirectToRoute('home_contact');


            }
        }

        $setting = $settingRepository->findAll();
        return $this->render('home/contact.html.twig', [
            'setting' => $setting,
            'form' => $form->createView(),
        ]);
    }


    
 /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function sitemap(Request $request)
    {
        // Nous récupérons le nom d'hôte depuis l'URL
        $hostname = $request->getSchemeAndHttpHost();

        // On initialise un tableau pour lister les URLs
        $urls = [];

        // On ajoute les URLs "statiques"
        $urls[] = ['loc' => $this->generateUrl('home')];
        $urls[] = ['loc' => $this->generateUrl('home_about')];
        $urls[] = ['loc' => $this->generateUrl('app_register')];
        $urls[] = ['loc' => $this->generateUrl('login_user')];

        // add dynamic urls, like blog posts from your DB
        foreach ($this->getDoctrine()->getRepository(Product::class)->findAll() as $product) {
            $created_at = $product->getCreatedAt();

            $images = [
                'loc' => '/uploads/images/'.$product->getImage(), // URL to image
                'title' => $product->getTitle()    // Optional, text describing the image
            ];

            $urls[] = [
                'loc' => $this->generateUrl('user_product_show', [
                    'id' => $product->getId(),
                ]),
                'lastmod' => $product->getUpdatedAt() ? $product->getUpdatedAt()->format('Y-m-d'):'',
                'image' => $images
            ];
        }


        // Fabrication de la réponse XML
        $response = new Response(
            $this->renderView('sitemap/index.html.twig', [
                'urls' => $urls,
                'hostname' => $hostname]
            )
        );

        // Ajout des entêtes
        $response->headers->set('Content-Type', 'text/xml');

        // On envoie la réponse
        return $response;
    }




}



