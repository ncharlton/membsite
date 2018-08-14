<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Comment;
use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    /**
     * @param string $itemType
     * @param int $itemId
     * @return mixed
     */
    public function findByItem($itemType, $itemId, $page = 0, $limit = 5) {
        return $this->createQueryBuilder("comment")
            ->innerJoin("comment.user", "user")
            ->innerJoin("user.profile", "profile")
            ->select("comment.item_id")
            ->addSelect("comment.item_type")
            ->addSelect("comment.comment_content")
            ->addSelect("comment.comment_id")
            ->addSelect("user")
            ->where("comment.item_type = :itemType")
            ->andWhere("comment.item_id = :itemId")
            ->setParameter(":itemType", $itemType)
            ->setParameter(":itemId", $itemId)
            ->orderBy("comment.created_at", "DESC")
            ->setFirstResult($page * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->execute();
    }

    public function countByItem($itemType, $itemId) {
        return $this->createQueryBuilder("comment")
            ->select("COUNT(comment.item_id) as amount")
            ->where("comment.item_type = :itemType")
            ->andWhere("comment.item_id = :itemId")
            ->setParameter(":itemType", $itemType)
            ->setParameter(":itemId", $itemId)
            ->getQuery()
            ->getScalarResult();
    }
}