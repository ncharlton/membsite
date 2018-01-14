<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 24.12.2017
 * Time: 17:26
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Clip;
use Doctrine\ORM\EntityRepository;

class ClipRepository extends EntityRepository
{
    /**
     * @return Clip[]
     */
    public function findClipsByUser($user) {
        return $this->createQueryBuilder('clip')
            ->getQuery()
            ->execute();
    }

}