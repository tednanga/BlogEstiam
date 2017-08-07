<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/08/17
 * Time: 15:15
 */

namespace BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PageController extends Controller
{
    /**
     * @Route("/", name="BlogBundle_homepage")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Page:index.html.twig');
    }

    /**
     * @Route("/users", name="users")
     */
    public function usersAction(Request $request)
    {
        $users = [
            [
                'username' => 'jeremy',
                'fullname' => 'Jérémy Romey',
                'email' => 'jeremy.romey@sensiolabs.com',
            ],
            [
                'username' => 'aurelia',
                'fullname' => 'Aurélia',
                'email' => 'aurelia@sensiolabs.com',
            ],
            [
                'username' => 'heloise',
                'fullname' => 'Héloise',
                'email' => 'heloise@sensiolabs.com',
            ],
            [
                'username' => 'julie',
                'fullname' => 'Julie',
                'email' => 'julie@sensiolabs.com',
            ],
        ];

        return $this->render('BlogBundle:Page:users.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/hello/{name}", name="hello",
     *  defaults={"name"="emm"},
     *  requirements={"name"="[a-z]+"}
     * )
     * @Method("GET")
     */
    public function helloAction(Request $request, $name)
    {
        return $this->render('BlogBundle:Page:hello.html.twig', [
            'name' => $name,
        ]);
    }

}