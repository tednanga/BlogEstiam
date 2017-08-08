<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/08/17
 * Time: 13:54
 */

namespace BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use BlogBundle\Entity\BlogPost;
use BlogBundle\Form\Type\BlogPostType;
use Doctrine\ORM\EntityManagerInterface;

class BlogPostController extends Controller
{


    /**
     * @Route("/admin/post/new", name="newpost")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $request, UserInterface $user = null)
    {
        $blogpost = $user ? BlogPost::createFromUser($user) : BlogPost::create();

        $form = $this->createForm(BlogPostType::class, $blogpost);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $blogpost->setCreatedAt(new \DateTime());

            $em = $this->getDoctrine()->getEntityManager();

            $em->persist($blogpost);// prepare to insert into the database
            $em->flush();// execute all SQL queries

            $this->addFlash('success', 'Blog post created!');

            return $this->redirectToRoute('BlogBundle_homepage');
        }

        return $this->render('BlogBundle:BlogPost:create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/posts", name="post_list")
     * @Security("is_granted('ROLE_ADMIN')")
     * @Method("GET")
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $filter = $request->query->get('filter', 'all');

        $blogposts = $em->getRepository(BlogPost::class)->findForList($filter);

        return $this->render('BlogBundle:BlogPost:list.html.twig', [
            'blogposts' => $blogposts,
        ]);
    }

    /**
     * @Route("/admin/posts/{id}", name="post_show")
     * @Security("is_granted('ROLE_ADMIN')")
     * @Method("GET")
     */
    public function showAction(Request $request, BlogPost $blogpost)
    {
        return $this->render('BlogBundle:BlogPost:show.html.twig', [
            '$blogpost' => $blogpost,
        ]);
    }

    /**
     * @Route("/admin/{id}/publish", name="post_publish")
     * @Security("is_granted('ROLE_ADMIN')")
     * @Method("GET")
     */
    public function processAction(Request $request, BlogPost $blogpost, EntityManagerInterface $em)
    {
        $response = $this->redirectToRoute('post_show', [
            'id' => $blogpost->getId()
        ]);

        $token = $request->query->get('token');
        if (!$this->isCsrfTokenValid('contact_process.' . $blogpost->getId(), $token)) {
            $this->addFlash('error', 'CSRF token invalid.');

            return $response;
        }

        if ($blogpost->isPublished()) {
            $this->addFlash('warning', 'Blog post already published.');

            return $response;
        }

        $blogpost->setPublishedAt(new \DateTime());

        $em->flush();

        $this->addFlash('success', 'Blog post sucessfully published.');

        return $response;
    }

}