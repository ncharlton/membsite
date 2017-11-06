<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class MainController extends Controller
{
    /**
     * @Route("/", name="main_index")
     */
    public function indexAction()
    {
        $user = $this->get('security.token_storage')
                ->getToken()
                ->getUser();

        return $this->render('main/index.html.twig', [
            'user' => $user
        ]);
    }
}
