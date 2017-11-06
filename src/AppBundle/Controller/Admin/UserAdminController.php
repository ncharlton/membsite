<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\User;
use AppBundle\Form\Admin\UserAdminForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("admin/user", name="user_admin")
 */
class UserAdminController extends Controller
{
    /**
     * @Route("/", name="user_admin_index")
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAll();

        return $this->render('admin/user/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/{user}", name="user_admin_view")
     * @ParamConverter("user", options={"mapping" : {"user":"username"}})
     */
    public function viewAction(User $user)
    {
        return $this->render('admin/user/view.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/{user}/edit", name="user_admin_edit")
     * @ParamConverter("user", options={"mapping" : {"user":"username"}})
     */
    public function editAction(Request $request, User $user)
    {
        $form = $this->createForm(UserAdminForm::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'succeess',
                "Successfully edited!"
            );

            return $this->redirectToRoute("user_admin_edit", [
                'user' => $user->getUsername()
            ]);
        } elseif ($form->isSubmitted()) {
            $this->addFlash(
            'error',
            "error occured"
            );
        }

        return $this->render("admin/user/edit.html.twig", [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/{user}/delete", name="user_admin_delete")
     * @ParamConverter("user", options={"mapping" : {"user":"username"}})
     */
    public function deleteAction(User $user) {
        $em = $this->getDoctrine()->getManager();

        // delete user & profile
        $em->remove($user);
        $em->remove($user->getProfile());
        $em->flush();

        $this->addFlash(
            'success',
            'Successully deleted'
        );

        return $this->redirectToRoute("user_admin_index");
    }
}
