<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Clip;
use AppBundle\Form\Admin\ClipAdminForm;
use AppBundle\Form\ClipForm;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\TwitchService;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class ClipAdminController
 * @package AppBundle\Controller\Admin
 * @Route("/admin/clip")
 */
class ClipAdminController extends Controller
{
    /**
     * @Route("/", name="admin_clip_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT clips FROM AppBundle:Clip clips ORDER BY clips.clip_id DESC";
        $query = $em->createQuery($dql);

        /**
         * @var Paginator $paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 3)
        );

        return $this->render('admin/clip/index.html.twig', [
            'clips' => $result
        ]);
    }

    /**
     * @Route("/new", name="admin_clip_new")
     */
    public function newAction(Request $request, TwitchService $twitchService)
    {
        $form = $this->createForm(ClipForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /** @var Clip $clip */
            $clip = $form->getData();

            $clipData = $twitchService->getClip($clip->getClipUrl());

            if($clipData) {
                $clip->setClipTrackingId($clipData['clipTrackingId']);
                $clip->setClipName($clipData['clipName']);
                $clip->setClipCreator($clipData['clipCreator']);
                $clip->setClipEmbedUrl($clipData['clipEmbedUrl']);
                $clip->setClipVodId($clipData['clipVodId']);
                $clip->setClipDuration($clipData['clipDuration']);
                $clip->setClipThumbnailMedium($clipData['clipThumbnailMedium']);
                $clip->setClipThumbnailSmall($clipData['clipThumbnailSmall']);

                $em = $this->getDoctrine()->getManager();
                $em->persist($clip);
                $em->flush();

                $this->addFlash(
                    'success',
                    'clip successully addded'
                );

                return $this->redirectToRoute("admin_clip_index");
            } else {
                $this->addFlash('error', 'wtf is that url?');
            }
        } else {
            $this->addFlash(
                'error',
                'fuckers1'
            );
        }

        return $this->render('admin/clip/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="admin_clip_view")
     * @ParamConverter("clip", options={"mapping" : {"slug" : "clip_slug"}})
     */
    public function viewAction(Clip $clip) {
        return $this->render(":clip:view.html.twig", [
            'clip' => $clip
        ]);
    }

    /**
     * @Route("/{slug}/delete", name="admin_clip_delete")
     * @ParamConverter("clip", options={"mapping" : {"slug" : "clip_slug"}})
     */
    public function deleteAction(Clip $clip) {
        if(!$clip)
            $this->createNotFoundException('which fucking object are u trying to delete?');

        $em = $this->getDoctrine()->getManager();

        $em->remove($clip);
        $em->flush();

        $this->addFlash(
            'success',
            'successully removed!'
        );

        return $this->redirectToRoute("admin_clip_index");
    }
}
