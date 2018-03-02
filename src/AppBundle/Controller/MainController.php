<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use AppBundle\Repository\NewsRepository;
use AppBundle\Service\SettingService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MainController extends Controller
{
    /**
     * @Route("/", name="main_index")
     */
    public function indexAction(Request $request)
    {
        // if user logged in through twitch => clean the url
        if($request->query->has('code'))
            return $this->redirectToRoute("main_index");

        $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->findLimitOrderedByName(
                10
            );

        return $this->render('main/index.html.twig', [
            'news' => $news
        ]);
    }

    /**
     * @Route("/closed", name="main_closed")
     */
    public function closedAction() {
        die("site closed");
    }

    /**
     * @Route("/testsetting")
     */
    public function testAction(SettingService $settingService) {
       $setting = $settingService->fetchSetting('abc');
       return new Response($setting);
    }
}
