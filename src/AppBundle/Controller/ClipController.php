<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clip;
use AppBundle\Form\ClipForm;
use AppBundle\Service\TwitchService;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ClipController extends Controller
{

    /**
     * @Route("/clips", name="clip_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT clips FROM AppBundle:Clip clips";
        $query = $em->createQuery($dql);

        /**
         * @var Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 2)
        );

        return $this->render(':clip:index.html.twig', [
            'clips' => $result
        ]);
    }

    /**
     * @Route("/clip/new", name="clip_new")
     */
    public function newAction(Request $request, TwitchService $twitchService) {
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

                return $this->redirectToRoute("clip_view", [
                    'slug' => $clip->getClipSlug()
                ]);
            } else {
                $this->addFlash('error', 'wtf is that url?');
            }
        } else {
            $this->addFlash(
                'error',
                'fuckers'
            );
        }

        return $this->render(':clip:new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/clip/{slug}/edit", name="clip_edit")
     * @ParamConverter("clip", options={"mapping" : {"slug" : "clip_slug"}})
     */
    public function editAction(Clip $clip) {
        $this->denyAccessUnlessGranted('edit', $clip);

        return $this->render('clip/edit.html.twig', [
            'clip' => $clip
        ]);
    }

    /**
     * @Route("/clip/{slug}/delete", name="clip_delete")
     * @ParamConverter("clip", options={"mapping" : {"slug" : "clip_slug"}})
     */
    public function deleteAction(Clip $clip) {
        $this->denyAccessUnlessGranted('delete', $clip);

        $em = $this->getDoctrine()->getManager();

        $em->remove($clip);
        $em->flush();

        return $this->redirectToRoute('clip_index');
    }

    /**
     * @Route("/clip/my", name="clip_my")
     * @Security("has_role('ROLE_USER')")
     */
    public function myAction() {
        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();

        $clips = $this->getDoctrine()->getRepository(Clip::class)
            ->findBy(
                array('author' => $user)
            );

        return $this->render("clip/index.html.twig", [
            "clips" => $clips
        ]);
    }

    /**
     * @Route("/clip/{slug}", name="clip_view")
     * @ParamConverter("clip", options={"mapping" : {"slug" : "clip_slug"}})
     */
    public function viewAction(Clip $clip) {
        return $this->render(':clip:view.html.twig', [
            'clip' => $clip
        ]);
    }
}
