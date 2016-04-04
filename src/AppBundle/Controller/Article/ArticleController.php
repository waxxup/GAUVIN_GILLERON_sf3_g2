<?php

namespace AppBundle\Controller\Article;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\Type\Article\ArticleType;

class ArticleController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();


        $articleRepository = $em->getRepository('AppBundle:Article\Article');

        $articles = $articleRepository->findAll();
        return $this->render('AppBundle:Article:index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/show/{id}", requirements={"id" = "\d+"}, name="show")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();


        $articleRepository = $em->getRepository('AppBundle:Article\Article');

        $article= $articleRepository->find($id);

        return $this->render('AppBundle:Article:show.html.twig', [
            'article' => $article,
        ]);

        }

    /**
     * @Route("/show/{articleName}")
     *
     * @param $articleName
     *
     * @return Response
     */
    public function showArticleNameAction($articleName)
    {
        return $this->render('AppBundle:Article:index.html.twig',[
            'articleName' => $articleName,
    ]);
    }

    /**
     * @Route("/new")
     */

    public function newAction(Request $request)
    {
        $form = $this->createForm(ArticleType::class);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();



            $em->persist($form->getData());

            $em -> flush();


        }
        return $this->render('AppBundle:Article:new.html.twig', [
            'form' => $form->createView(),
        ]);

    }


}
