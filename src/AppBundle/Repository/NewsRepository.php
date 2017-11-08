<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 08.11.2017
 * Time: 17:55
 */

namespace AppBundle\Repository;

use AppBundle\Entity\News;
use Doctrine\ORM\EntityRepository;

class NewsRepository extends EntityRepository
{
    /**
     * @return News[]
     */
    public function findLimitOrderedByName($limit = 10)
    {
        return $this->createQueryBuilder('news')
            ->orderBy('news.created_at', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->execute();
    }
}