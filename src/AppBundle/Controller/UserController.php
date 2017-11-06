<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profile;
use AppBundle\Entity\User;
use AppBundle\Form\RegisterForm;
use AppBundle\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/test")
     */
    public function testAction() {
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();

        $em->remove($user);
        $em->flush();
    }
    /**
     * @Route("/register", name="user_register")
     */
    public function registerAction(Request $request, LoginFormAuthenticator $authenticator)
    {
        $form = $this->createForm(RegisterForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /** @var Profile $profile */
            $profile = new Profile();

            /** @var User $user */
            $user = $form->getData();
            $user->setType('self');
            $user->setActivated(0);
            $user->setProfile($profile);


            $em = $this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Welcome');

            return $this->get('security.authentication.guard_handler')
                ->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $authenticator,
                    'main'
                );
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
