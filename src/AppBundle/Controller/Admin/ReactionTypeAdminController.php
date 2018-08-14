<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\ReactionType;
use AppBundle\Form\ReactionTypeAdminForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class ReactionTypeAdminController
 * @package AppBundle\Controller\Admin
 *
 * @Route("admin/reaction/type")
 */
class ReactionTypeAdminController extends Controller
{
    /**
     * @Route("/", name="admin_reaction_type_index")
     */
    public function indexAction()
    {
        $reactionTypes = $this->getDoctrine()->getRepository('AppBundle:ReactionType')->findAll();

        return $this->render("admin/reaction/type/index.html.twig", [
            'reactionTypes' => $reactionTypes
        ]);
    }

    /**
     * @Route("/new", name="admin_reaction_type_new")
     */
    public function newAction(Request $request) {
        $form = $this->createForm(ReactionTypeAdminForm::class);
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()) {
            /** @var ReactionType $reactionType */
            $reactionType = $form->getData();

            /** @var UploadedFile $file */
            $file = $reactionType->getReactionTypeIcon();

            $name = strtolower($reactionType->getReactionTypeName());
            $name = str_replace(' ', '-', $name);

            $filename = $name . '.' . $file->guessExtension();

            $file->move(
                $this->getParameter('reaction_images_dir'),
                $filename
            );

            $reactionType->setReactionTypeIcon($filename);

            $em = $this->getDoctrine()->getManager();
            $em->persist($reactionType);
            $em->flush();

            $this->addFlash(
                'success',
                'Successfully created new rank'
            );

            return $this->redirectToRoute("admin_reaction_type_index");
        }

        return $this->render(':admin/reaction/type:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{type}/delete", name="admin_reaction_type_delete")
     * @ParamConverter("type", options={"mapping" : {"type" : "reaction_type_name"}})
     */
    public function deleteAction(ReactionType $type, Filesystem $filesystem) {
        $path = $this->getParameter("reaction_images_dir") . '/' . $type->getReactionTypeIcon();

        // delete file if its exists
        if($filesystem->exists($path)) {
            $filesystem->remove($path);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($type);
        $em->flush();

        $this->addFlash(
            'success',
            'successully removed!'
        );

        return $this->redirectToRoute("admin_reaction_type_index");
    }
}
