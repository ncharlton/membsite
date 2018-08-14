<?php

namespace AppBundle\Controller\Main;

use AppBundle\Entity\News;
use AppBundle\Entity\User;
use AppBundle\Repository\NewsRepository;
use AppBundle\Service\RankService;
use AppBundle\Service\SettingService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;


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

        $clips = $this->getDoctrine()->getRepository('AppBundle:Clip')
            ->fetchNewestClips();

        $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->findLimitOrderedByName(
                10
            );

        return $this->render('frontend/main/index.html.twig', [
            'news' => $news,
            'clips' => $clips
        ]);
    }

    /**
     * @Route("/closed", name="main_closed")
     */
    public function closedAction(SettingService $settingService) {
        $status = $settingService->fetchSetting('general_site_status');
        if($status == 1) {
            return $this->redirectToRoute('main_index');
        } else
            return $this->render('frontend/main/closed.html.twig');
    }

    /**
     * @Route("/testsetting")
     */
    public function testAction(SettingService $settingService) {
       $setting = $settingService->fetchSetting('abc');
       return new Response($setting);
    }

    /**
     * @param RankService $rankService
     * @Route("/rank")
     */
    public function testRankAction(RankService $rankService) {
        $award = $rankService->award('abc');
        if($award) {
            die($award->getRankActionMessage());
        }

        return true;
    }
    /**
     * @Route("/banned", name="main_banned")
     */
    public function bannedAction(TokenStorageInterface $tokenStorage) {
        $user = $this->getUser();
        if($user instanceof User && $user->isBanned()) {
            return $this->render("frontend/main/banned.html.twig", [
                'user' => $user
            ]);
        } else {
            return $this->redirectToRoute("main_index");
        }
    }

    /**
     * @Route("/404", name="main_404")
     */
    public function errorAction() {
        return $this->render("frontend/main/404.html.twig");
    }
}
