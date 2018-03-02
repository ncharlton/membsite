<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\News;
use AppBundle\Form\Admin\NewsAdminForm;
use AppBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 */
class MainAdminController extends Controller
{
    /**
     * @Route("/", name="admin_main_index")
     */
    public function indexAction()
    {
        $activeUsers = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->getActiveUsers();

        $user = $this->get("security.token_storage")
            ->getToken()
            ->getUser();

        return $this->render('admin/main/index.html.twig', [
            'user' => $user,
            'activeUsers' => $activeUsers
        ]);
    }


}
