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

    /**
     * @param $id
     * @return User
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function fetchUserById($id) {
        return $this->createQueryBuilder("user")
            ->select("user.username, user.user_id, user.score, profile, rank,")
            ->innerJoin("user.profile", "profile")
            ->where("user.user_id = :id")
            ->setParameter(":id", $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}