<?php

namespace AppBundle\Controller\Article;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        return new Response('list of article');
    }

    /**
<<<<<<< HEAD
     * @Route("/show/{id}")
     */
    public function showAction($id)
    {
        return new Response('affiche moi l\'article avec l\'id: ' . $id);
    }

=======
     *@Route("/show/{id}")
     */
    public function showAction($id)
    {
        return new Response('affiche mon l\'article avec l\'id :'.$id);
    }
>>>>>>> e74cfced74725f342e4827533c26b7fc6900a546
}