<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use AppBundle\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class MainController extends Controller
{
    /**
     * @Route("/", name="main_index")
     */
    public function indexAction(Request $request)
    {
        // if user logged in through twitc => clean the url
        if($request->query->has('code'))
            return $this->redirectToRoute("main_index");

        $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->findLimitOrderedByName(
                $this->getParameter('system.news.max.results')
            );

        return $this->render('main/index.html.twig', [
            'news' => $news
        ]);
    }
}
