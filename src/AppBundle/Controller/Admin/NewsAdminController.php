<?php

namespace AppBundle\Controller;

use Request
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class NewsAdminController
 * @package AppBundle\Controller
 * @Route("/admin/news", name="news_admin")
 */
class NewsAdminController extends Controller
{
    /**
     * @Route("/", name="news_admin_index")
     */
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function newAction(Request $request)
    {
        $form = $this->createForm(NewsAdminForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /**
             * @var News $news
             */
            $news = $form->getData();

            $news->setAuthor(
                $this->get('security.token_storage')
                    ->getToken()
                    ->getUser()
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            $this->addFlash(
                "success",
                "Created news"
            );

            return $this->redirectToRoute("admin")
        }
    }
}
