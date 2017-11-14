<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Clip;
use AppBundle\Form\Admin\ClipAdminForm;
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
    public function indexAction()
    {
        $clips = $this->getDoctrine()
            ->getRepository(Clip::class)
            ->findAll();

        return $this->render('admin/clip/index.html.twig', [
            'allclips' => $clips,
        ]);
    }

    /**
     * @Route("/new", name="admin_clip_new")
     */
    public function newAction(Request $request, TwitchService $twitchService)
    {
        $form = $this->createForm(ClipAdminForm::class);

        // only handles data on post
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $clipdata = $form->getData();

            $clip = $twitchService->getClip($clipdata['clipUrl']);
            $newclip = new Clip();
            $newclip->setClipTrackingId($clip['clipTrackingId']);
            $newclip->setClipName($clip['clipName']);
            $newclip->setClipSlug($clip['clipSlug']);
            $newclip->setClipCreator($clip['clipCreator']);
            $newclip->setClipEmbedUrl($clip['clipEmbedUrl']);
            $newclip->setClipVodId($clip['clipVodId']);
            $newclip->setClipDuration($clip['clipDuration']);
            $newclip->setClipCreatedAt(new \DateTime($clip['clipCreatedAt']));
            $newclip->setClipHits($clip['clipHits']);
            $newclip->setClipThumbnailMedium($clip['clipThumbnailMedium']);
            $newclip->setClipThumbnailSmall($clip['clipThumbnailSmall']);

            $newclip->setClipAuthor(
                $this->get('security.token_storage')
                    ->getToken()
                    ->getUser()
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($newclip);
            $em->flush();

            $this->addFlash(
                'success',
                "Clip created by you"
            );

            return $this->redirectToRoute("admin_clip_index");
        }

        return $this->render("admin/clip/new.html.twig", [
            'form' => $form->createView(),
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
