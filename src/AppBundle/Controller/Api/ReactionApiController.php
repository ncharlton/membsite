<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Clip;
use AppBundle\Entity\News;
use AppBundle\Entity\Reaction;
use Http\Client\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ReactionApiController
 * @package AppBundle\Controller
 */

class ReactionApiController extends Controller
{
    /**
     * @Route("/api/reaction/types")
     */
    public function deliverReactionTypesAction() {
        $reactionTypes = $this->getDoctrine()->getRepository('AppBundle:ReactionType')->findAll();

        $encoders = array(new JsonEncoder());
        $normalizer = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizer, $encoders);

        $data = $serializer->serialize($reactionTypes, 'json');

        $response = new Response(
            $data,
            Response::HTTP_OK,
            array('content-type' => 'application/json')
        );

        return $response;
    }

    /**
     * @Route("api/reactions")
     */
    public function deliverReactions(Request $request) {
        if($request->query->has('item_type') && $request->query->has('item_id')) {
            $item_type = $request->query->get('item_type');
            $item_id = $request->query->get('item_id');

            $result = [];

            $reactionTypes = $this->getDoctrine()->getRepository("AppBundle:ReactionType")
                ->findAll();

            foreach($reactionTypes as $reactionType) {
                $result[$reactionType->getReactionTypeId()] = [];
            }

            $reactions = $this->getDoctrine()->getRepository('AppBundle:Reaction')
                ->findBy(
                    [
                        'reaction_item_type' => $item_type,
                        'reaction_item_id' => $item_id
                    ]
                );

            foreach($reactions as $reaction) {
                $result[$reaction->getReactionType()][] = $reaction;
            }

            $encoders = array(new JsonEncoder());
            $normalizer = array(new ObjectNormalizer());
            $serializer = new Serializer($normalizer, $encoders);

            $data = $serializer->serialize($result, 'json');

            $response = new Response(
                $data,
                RESPONSE::HTTP_OK,
                array('content-type' => 'application/json')
            );

            return $response;
        } else {
            $response = new Response(
                null,
                RESPONSE::HTTP_BAD_REQUEST,
                array('content-type' => 'application/json')
            );

            return $response;
        }
    }

    /**
     * @Route("api/reaction/new")
     */
    public function createReaction(Request $request) {
        $error_msg = '';

        // check if all parameters are set
        if($request->query->has('item_type') &&
            $request->query->has('item_id') &&
            $request->query->has('user_id') &&
            $request->query->has('reaction_type')) {

            // initialize vars
            $item_type = $request->query->get('item_type');
            $item_id = $request->query->get('item_id');
            $user_id = $request->query->get('user_id');
            $reaction_type = $request->query->get('reaction_type');

            //
            $classes = [
                'clip' => [
                    'class' => Clip::class,
                    'id' => 'clip_id'
                ],
                'news' => [
                    'class' => News::class,
                    'id' => 'news_id'
                ]
            ];

            // check if item exists
            $item = $this->getDoctrine()->getRepository($classes[$item_type]['class'])
                ->findOneBy([
                    $classes[$item_type]['id'] => $item_id
                ]);

            if(!$item) {
                $error_msg = 'item doesnt exist';
            }

            // check if user exists
            $user = $this->getDoctrine()->getRepository('AppBundle:User')
                ->findOneBy([
                    'user_id' => $user_id
                ]);

            if(!$user) {
                $error_msg = 'user doesnt exist';
            }

            // check if reaction type exists
            $reaction = $this->getDoctrine()->getRepository('AppBundle:ReactionType')
                ->findOneBy([
                    'reaction_type_id' => $reaction_type
                    ]);

            if(!$reaction) {
                $error_msg = 'reaction type doesnt exist';
            }

            unset($reaction);

            // check if user had already reacted with reaction to item
            $r = $this->getDoctrine()->getRepository('AppBundle:Reaction')
                ->findOneBy([
                    'reaction_item_type' => $item_type,
                    'reaction_item_id' => $item_id,
                    'reaction_type' => $reaction_type,
                    'reaction_user_id' => $user_id
                ]);

            if($r) {
                $error_msg = 'user has already reacted with this reaction';
            }

            $data = array(
                'status' => 0,
                'message' => ''
            );

            if(strlen($error_msg) > 0) {
                $data['message'] = $error_msg;
                $data['status'] = 0;

                $response = new Response(
                    json_encode($data),
                    Response::HTTP_CONFLICT,
                    array('content-type' => 'application/json')
                );

            } else {

                // create new reaction

                $reaction = new Reaction();
                $reaction->setItemType($item_type);
                $reaction->setItemId($item_id);
                $reaction->setUserId($user_id);
                $reaction->setUsername($user->getUsername());
                $reaction->setReactionType($reaction_type);

                $em = $this->getDoctrine()->getManager();
                $em->persist($reaction);
                $em->flush();

                // return result

                $data['message'] = 'success';
                $data['status'] = 1;

                $encoders = array(new JsonEncoder());
                $normalizer = array(new ObjectNormalizer());
                $serializer = new Serializer($normalizer, $encoders);

                $reaction = $serializer->serialize($reaction, 'json');

                $response = new Response(
                    $reaction,
                    RESPONSE::HTTP_CREATED,
                    array('content-type' => 'application/json')
                );
            }

            return $response;

        }
    }
}
