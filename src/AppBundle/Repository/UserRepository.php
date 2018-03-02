<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 28.01.2018
 * Time: 16:05
 */

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @return User[]
     */
    public function getActiveUsers() {
        $delay = new \DateTime();
        $delay->setTimestamp(strtotime('2 minutes ago'));

        return $this->createQueryBuilder('user')
            ->where('user.last_active > :delay')
            ->setParameter('delay', $delay)
            ->getQuery()
            ->getResult();
    }
}