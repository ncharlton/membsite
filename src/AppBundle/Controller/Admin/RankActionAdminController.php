<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\RankAction;
use AppBundle\Form\Admin\RankActionAdminForm;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RankActionAdminController
 * @package AppBundle\Controller\Admin
 * @Route("admin/rank/action")
 */
class RankActionAdminController extends Controller
{

    /**
     * @Route("/", name="admin_rank_action_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository(RankAction::class);
        $rankActions = $em->findAll();

        /** @var Paginator $paginator */
        $paginator = $this->get('knp_paginator');

        $result = $paginator->paginate($rankActions);

        return $this->render("admin/rank/action/index.html.twig", [
            'rankActions' => $result
        ]);
    }

    /**
     * @Route("/new", name="admin_rank_action_new")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(RankActionAdminForm::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            /** @var RankAction $rankAction */
            $rankAction = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($rankAction);
            $em->flush();

            $this->addFlash(
                'success',
                "Successfully created new rank action"
            );

            return $this->redirectToRoute("admin_rank_action_index");
        }

        return $this->render("admin/rank/action/new.html.twig", [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{action}/edit", name="admin_rank_action_edit")
     * @ParamConverter("rankAction", options={"mapping" : {"action" : "rank_action_name" }})
     */
    public function editAction(RankAction $rankAction, Request $request)
    {
        $form = $this->createForm(RankActionAdminForm::class, $rankAction);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            /** @var RankAction $rankAction */
            $rankAction = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($rankAction);
            $em->flush();

            $this->addFlash(
                'success',
                "Successfully edited rank action"
            );

            return $this->redirectToRoute("admin_rank_action_edit", [
                'action' => $rankAction->getRankActionName()
            ]);
        }

        return $this->render("admin/rank/action/edit.html.twig", [
            'form' => $form->createView(),
            'rankAction' => $rankAction
        ]);
    }

    /**
     * @Route("/{action}/delete", name="admin_rank_action_delete")
     * @ParamConverter("rankAction", options={"mapping" : {"action" : "rank_action_name" }})
     */
    public function deleteAction(RankAction $rankAction) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($rankAction);
        $em->flush();

        $this->addFlash(
            'success',
            'Successfully delete rank action'
        );

        return $this->redirectToRoute("admin_rank_action_index");
    }
}
