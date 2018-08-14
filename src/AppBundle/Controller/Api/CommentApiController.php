<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Comment;
use AppBundle\Entity\News;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentApiController extends Controller
{
    /**
     * @param Request $request
     * @Route("/api/comment")
     * @Method("POST")
     * @return Response
     */
    public function createComment(Request $request) {
        $data = json_decode($request->getContent());

        $itemType = $data->item_type;
        $itemId = $data->item_id;
        $userId = $data->user_id;
        $commentText = $data->comment;

        /** @var User $user */
        $user = $this->getDoctrine()->getRepository("AppBundle:User")
            ->findOneBy([
                "user_id" => $userId
            ]);

        $comment = new Comment();
        $comment->setItemType($itemType);
        $comment->setItemId($itemId);
        $comment->setUser($user);
        $comment->setCommentContent($commentText);

        $em = $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();


        $serializer = $this->get("jms_serializer");
        $comment = $serializer->serialize($comment, 'json');
        return new Response($comment, 200);
    }

    /**
     * @Route("/api/comments")
     * @Method("GET")
     */
    public function deliverComments(Request $request) {
        $serializer = $this->get("jms_serializer");
        $get = $request->query;
        $data = [];
        $limit = 5;


        if($get->has("item_id") && $get->has("item_type")) {
            $itemId = $get->get("item_id");
            $itemType = $get->get("item_type");
            $page = ($get->has("page")) ? $get->get("page") : 1;


            $comments = $this->getDoctrine()->getRepository("AppBundle:Comment")
                ->findByItem($itemType, $itemId, $page);


            $count = $this->getDoctrine()->getRepository("AppBundle:Comment")
                ->countByItem($itemType, $itemId);

            $data['total'] = (integer) $count[0]['amount'];
            $data['limit'] = $limit;
            $data['data'] = $comments;

            $data = $serializer->serialize($data, 'json');

            return new Response($data, 200);
        } else {
            return new Response(false, 400);
        }
    }
}
