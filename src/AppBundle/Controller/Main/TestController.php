<?php

namespace AppBundle\Controller\Main;

use AppBundle\Entity\User;
use AppBundle\Service\RankService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/test/rank/{user}")
     * @ParamConverter("user", options={"mapping" : {"user" : "username"}})
     */
    public function testRank(User $user, RankService $rankService) {
        $rankService->awardUser('system_signup', $user);

        return new Response("true");
    }
}
