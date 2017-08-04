<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/08/17
 * Time: 15:15
 */

namespace BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


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

}