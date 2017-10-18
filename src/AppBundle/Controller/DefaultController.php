<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/Courses/listCourses.html.twig');
    }
    /**
     * @Route("/adrianna", name="nazwa")
     */
    public function adriannaAction(Request $request)
    {
        $a = "Adrianna lubi Pingwiny";

        return $this->render('default/Courses/listCourses.html.twig', ['zmienna' => $a]);
    }



}
