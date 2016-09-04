<?php

namespace Studio\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('StudioSiteBundle:Site:index.html.twig');
    }
    
    public function profilAction()
    {
        $nom = "marine";
        return $this->render('StudioSiteBundle:Site:profil.html.twig', array("tsoutsouin" => $nom));
    }
    
    public function portraitsAction()
    {
        return $this->render('StudioSiteBundle:Site:portraits.html.twig');
    }
    
    public function kidsAction()
    {
        return $this->render('StudioSiteBundle:Site:kids.html.twig');
    }
    
    public function adultAction()
    {
        return $this->render('StudioSiteBundle:Site:adult.html.twig');
    }
    
    public function familyAction()
    {
        return $this->render('StudioSiteBundle:Site:family.html.twig');
    }
    
    public function weddingAction()
    {
        return $this->render('StudioSiteBundle:Site:wedding.html.twig');
    }
    
    public function dayAction()
    {
        return $this->render('StudioSiteBundle:Site:day.html.twig');
    }
    
    public function coupleAction()
    {
        return $this->render('StudioSiteBundle:Site:couple.html.twig');
    }
    public function groupAction()
    {
        return $this->render('StudioSiteBundle:Site:group.html.twig');    
    }
    
    public function priceAction()
    {
        return $this->render('StudioSiteBundle:Site:price.html.twig');
    }
    
    public function postAddAction(\Symfony\Component\HttpFoundation\Request $request) {
        
        $post = new \Studio\SiteBundle\Entity\Post();
        $form = $this->createForm(\Studio\SiteBundle\Form\PostType::class, $post);
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistrée.');

            return $this->redirectToRoute('studio_site_blog');
        }

        return $this->render('StudioSiteBundle:Site:addPost.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
    
    public function postViewAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $postRepository = $em->getRepository('StudioSiteBundle:Post');
        $post = $postRepository->find($id);
        
        return $this->render('StudioSiteBundle:Site:postView.html.twig', array("post"=> $post));
    }
    
    public function commentFormAction($id = 0, \Symfony\Component\HttpFoundation\Request $request){
        
        $comment = new \Studio\SiteBundle\Entity\Comment();
        
        $em = $this->getDoctrine()->getManager();
        
        $postRepository = $em->getRepository('StudioSiteBundle:Post');
        $post = $postRepository->find($id);
        $comment->setPost($post);

        $form = $this->createForm(\Studio\SiteBundle\Form\CommentType::class, $comment, array('action' => $this->generateUrl('studio_site_comment_form')));
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('studio_site_post_view', array("id" => $comment->getPost()->getId()));
        }
        return $this->render('StudioSiteBundle:Site:comment.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
    
    public function blogAction()
    {
        //gerer les donnees sql
        $em = $this->getDoctrine()->getManager();
        
        //recuperation des info en base
        $postRepository = $em->getRepository('StudioSiteBundle:Post');
        $posts = $postRepository->findAll();
        
        return $this->render('StudioSiteBundle:Site:blog.html.twig', array("posts"=> $posts));
    }
    
    public function contactAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $contact = new \Studio\SiteBundle\Entity\Contact();
        $form = $this->createForm(\Studio\SiteBundle\Form\ContactType::class, $contact);
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Message bien enregistrée.');

            return $this->redirectToRoute('studio_site_contact');
        }

        return $this->render('StudioSiteBundle:Site:contact.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
    
    public function articleAction()
    {
        return $this->render('StudioSiteBundle:Site:les_paysages.html.twig');
    }
    
    public function legalAction()
    {
        return $this->render('StudioSiteBundle:Site:legal_notice.html.twig');
    }
    
    public function cookiesAction()
    {
        return $this->render('StudioSiteBundle:Site:cookies.html.twig');
    }
}
