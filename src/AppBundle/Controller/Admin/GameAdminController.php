<?php
namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Game;
use AppBundle\Form\Admin\GameAdminForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GameAdminController
 * @package AppBundle\Controller\Admin
 * @Route("/admin/game")
 */
class GameAdminController extends Controller
{
    /**
     * @Route("/", name="admin_game_index")
     */
    public function indexAction()
    {
        $games = $this->getDoctrine()
            ->getRepository(Game::class)
            ->findAll();


        return $this->render('admin/game/index.html.twig', [
            'games' => $games,
        ]);
    }

    /**
     * @Route("/new", name="admin_game_new")
     */
    public function newAction(Request $request)
    {
       $form = $this->createForm(GameAdminForm::class);

       // only handles data on post
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) {
           $game = $form->getData();

           $em = $this->getDoctrine()->getManager();
           $em->persist($game);
           $em->flush();

           $this->addFlash(
               'success',
               "Game created by you"
           );

           return $this->redirectToRoute("admin_game_index");
       }

       return $this->render("admin/game/new.html.twig", [
           'form' => $form->createView(),
       ]);
    }

    /**
     * @Route("/{slug}", name="admin_game_view")
     * @ParamConverter("game", options={"mapping" : {"slug":"game_slug"}})
     */
    public function viewAction(Game $game)
    {
        return $this->render("admin/game/view.html.twig", [
            'game' => $game
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="admin_game_edit")
     * @ParamConverter("game", options={"mapping" : {"slug":"game_slug"}})
     */
    public function editAction(Request $request, Game $game)
    {
        $form = $this->createForm(GameAdminForm::class, $game);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $game = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();

            $this->addFlash(
                'succeess',
                "Successfully edited!"
            );

            return $this->redirectToRoute("admin_game_edit", [
                'slug' => $game->getGameSlug()
            ]);
        } elseif ($form->isSubmitted()) {
            $this->addFlash(
                'error',
                "error occured"
            );
        }

        return $this->render("admin/game/edit.html.twig", [
            "form" => $form->createView(),
            "game" => $game
        ]);
    }

    /**
     * @Route("/{slug}/delete", name="admin_game_delete")
     * @ParamConverter("game", options={"mapping" : {"slug":"game_slug"}})
     */
    public function deleteAction(Game $game)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($game);
        $em->flush();

        return $this->redirectToRoute('admin_game_index');
    }

}
