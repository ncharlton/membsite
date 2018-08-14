<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Rank;
use AppBundle\Form\Admin\RankAdminForm;
use AppBundle\Form\Admin\RankEditAdminForm;
use Gedmo\Mapping\Annotation\Slug;
use Gedmo\Sluggable\Sluggable;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RankAdminController
 * @package AppBundle\Controller\Admin
 * @Route("admin/rank")
 */
class RankAdminController extends Controller
{
    /**
     * @Route("/", name="admin_rank_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository(Rank::class);
        $ranks = $em->findAll();

        return $this->render('admin/rank/index.html.twig', [
            'ranks' => $ranks
        ]);
    }

    /**
     * @Route("/new", name="admin_rank_new")
     */
    public function newAction(Request $request) {
        $form = $this->createForm(RankAdminForm::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $rank = $form->getData();
            /** @var UploadedFile $file */
            $file = $rank->getRankBadge();

            $name = strtolower($rank->getRankName());
            $name = str_replace(' ', '-', $name);

            $filename = $name . '.' . $file->guessExtension();

            $file->move(
                $this->getParameter('rank_images_dir'),
                $filename
            );

            $rank->setRankBadge($filename);

            $em = $this->getDoctrine()->getManager();
            $em->persist($rank);
            $em->flush();

            $this->addFlash(
                'success',
                'Successfully created new rank'
            );

            return $this->redirectToRoute("admin_rank_index");
        }

        return $this->render(':admin/rank:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{rankId}/edit", name="admin_rank_edit")
     * @ParamConverter("rank", options={"mapping" : {"rankId" : "rank_id"}})
     */
    public function editAction(Rank $rank, Request $request) {
        $form = $this->createForm(RankEditAdminForm::class, $rank);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            /** @var Rank $rank */
            $rank = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($rank);
            $em->flush();

            $this->addFlash(
                'success',
                'Successfully created new rank'
            );

            return $this->redirectToRoute("admin_rank_index");
        }

        return $this->render(':admin/rank:edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/{rankId}/delete", name="admin_rank_delete")
     * @ParamConverter("rank", options={"mapping" : {"rankId" : "rank_id"}})
     */
    public function deleteAction(Rank $rank, Filesystem $filesystem) {
        $path = $this->getParameter("rank_images_dir") . '/' . $rank->getRankBadge();

        // delete file if its exists
        if($filesystem->exists($path)) {
            $filesystem->remove($path);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($rank);
        $em->flush();

        $this->addFlash(
            'success',
            'successully removed!'
        );

        return $this->redirectToRoute("admin_rank_index");
    }
}
