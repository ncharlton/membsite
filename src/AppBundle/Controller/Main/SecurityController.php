<?php

namespace AppBundle\Controller\Main;

use AppBundle\Entity\User;
use AppBundle\Form\LoginForm;
use AppBundle\Security\TwitchUserProvider;
use AppBundle\Service\TwitchService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Unirest\Request as Unirest;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction(TwitchService $twitchService)
    {
        $url = $twitchService->generateAuthorizationUrl();
        
        $authenticationUtils = $this->get('security.authentication_utils');

        // get login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername,
        ]);

        return $this->render(
            'frontend/user/login.html.twig',
            [
                'form' => $form->createView(),
                'error' => $error,
                'url' => $url
            ]
        );
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('not reachable');
    }
}
