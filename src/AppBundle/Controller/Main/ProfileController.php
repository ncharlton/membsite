<?php

namespace AppBundle\Controller\Main;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/profile/edit/details", name="profile_edit_own_details")
     * @Security("has_role('ROLE_USER')")
     */
    public function editOwnAction()
    {
        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();

        return $this->render("frontend/profile/edit_own.html.twig", [
            'user' => $user
        ]);
    }
}
