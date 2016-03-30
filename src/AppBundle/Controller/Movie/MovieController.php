<?php

namespace AppBundle\Controller\movie;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends Controller
{

    /**
     * @Route("/list")
     */

    public function listAction()
    {
        return new Response('list of article');
    }

    /**
     * @Route("/show/{id}", requirements={"id" = "\d+"})
     */

    public function showAction($id, Request $request)
    {
        $tag = $request->query->get('tag');

        return new Response('affiche moi l\'article avec l\'id: ' .$id. 'avec le tag ' .$tag);

    }
}