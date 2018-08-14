<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 06.03.2018
 * Time: 14:01
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Rank;
use Doctrine\ORM\EntityRepository;

class RankRepository extends EntityRepository
{
    /**
     * @param string $order
     * @return Rank[]
     */
    public function findAllOrderedByScore($order = 'DESC') {
        if($order !== 'ASC' || $order !== 'DESC')
            $order = 'ASC';

        return $this->createQueryBuilder('rank')
            ->orderBy('rank.rank_score', 'ASC')
            ->getQuery()
            ->execute();
    }

    /**
     * @return Rank
     */
    public function findLowestOrderedByScore() {
        return $this->createQueryBuilder('rank')
            ->orderBy('rank.rank_score', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->execute();
    }
}