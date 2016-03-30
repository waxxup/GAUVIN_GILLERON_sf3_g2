<?php

/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 30/03/2016
 * Time: 14:47
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return new Response('homepage');
    }

}