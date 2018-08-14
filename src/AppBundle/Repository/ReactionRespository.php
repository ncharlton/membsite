<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 25.04.2018
 * Time: 11:46
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ReactionRespository extends EntityRepository
{
    public function countReactions($itemType, $itemId, $reactionType) {
        return $this->createQueryBuilder("reaction")
            ->select("count(reaction.reaction_id)")
            ->where("reaction.reaction_item_type = :itemType")
            ->andWhere("reaction.reaction_item_id = :itemId")
            ->andWhere("reaction.reaction_type = :reactionType")
            ->setParameter(":itemType", $itemType)
            ->setParameter(":itemId", $itemId)
            ->setParameter(":reactionType", $reactionType)
            ->getQuery()
            ->execute();
    }
}