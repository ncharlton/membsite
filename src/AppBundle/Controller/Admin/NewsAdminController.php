<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\News;
use AppBundle\Form\Admin\NewsAdminForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class NewsAdminController
 * @package AppBundle\Controller
 * @Route("/admin/news", name="admin_news")
 */
class NewsAdminController extends Controller
{
    /**
     * @Route("/", name="admin_news_index")
     */
    public function indexAction()
    {
        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findAll();

        return $this->render("admin/news/index.html.twig", [
            'allnews' => $news
        ]);
    }

    /**
     * @Route("/new", name="admin_news_new")
     */
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

            return $this->redirectToRoute("admin_news_index");
        }

        return $this->render("admin/news/new.html.twig", [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="admin_news_edit")
     * @ParamConverter("news", options={"mapping" : {"slug" : "news_slug"}})
     */
    public function editAction(Request $request, News $news) {

        $form = $this->createForm(NewsAdminForm::class, $news);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /** @var News $news */
            $news = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            $this->addFlash(
                'success',
                'Well edited!'
            );

            return $this->redirectToRoute("admin_news_edit", [
                'slug' => $news->getNewsSlug()
            ]);
        } elseif ($form->isSubmitted()) {
            $this->addFlash(
                'error',
                'errorrrrrrr'
            );
        }

        return $this->render("admin/news/edit.html.twig", [
            'form' => $form->createView(),
            'news' => $news
        ]);
    }

    /**
     * @Route("/{slug}", name="admin_news_view")
     * @ParamConverter("news", options={"mapping" : {"slug":"news_slug"}})
     */
    public function viewAction(News $news)
    {
        if(!$news) {
            $this->createNotFoundException('This news doesnt exist');
        }

        return $this->render("admin/news/view.html.twig", [
            'news' => $news
        ]);
    }

    /**
     * @Route("/{slug}/delete", name="admin_news_delete")
     * @ParamConverter("news", options={"mapping" : {"slug" : "news_slug"}})
     */
    public function deleteAction(News $news) {
        if(!$news)
            $this->createNotFoundException('which fucking object are u trying to delete?');

        $em = $this->getDoctrine()->getManager();

        $em->remove($news);
        $em->flush();

        $this->addFlash(
            'success',
            'successully removed!'
        );

        return $this->redirectToRoute("admin_news_index");
    }
}
