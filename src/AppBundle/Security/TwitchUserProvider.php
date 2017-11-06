<?php

namespace AppBundle\Security;

use AppBundle\Entity\Profile;
use AppBundle\Entity\User;
use AppBundle\Service\TwitchService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class TwitchUserProvider implements UserProviderInterface
{
    private $em;
    private $twitchService;

    public function __construct(EntityManagerInterface $em, TwitchService $twitchService)
    {
        $this->em = $em;
        $this->twitchService = $twitchService;
    }

    /**
     * Fetches Username from user twitch id
     *
     * @param $tid
     * @return bool
     */
    public function getUsernameFromTwitchId($tid)
    {
        $user = $this->em->getRepository('AppBundle:User')
            ->findOneBy(['tid' => $tid]);

        if($user)
            return $user->getUsername();
        else
            return false;
    }

    public function createNewUser($twitchUser, $accessToken, $refreshToken, $expires)
    {
        $profile = new Profile();
        $profile->setProfileBio($twitchUser['twitchBio']);
        $profile->setProfileAvatar($twitchUser['twitchLogo']);

        $sub = $this->twitchService->checkIfSub($twitchUser['twitchUserId'], $accessToken);
        if($sub) {
            $profile->setProfileIssub(1);
            $profile->setProfileSubplan($sub['subPlan']);
            $profile->setProfileSubsince($sub['subSince']);
        } else {
            $profile->setProfileIssub(0);
        }

        $user = new User();
        $user->setUsername($twitchUser['twitchUsername']);
        $user->setActivated(1);
        $user->setEmail($twitchUser['twitchEmail']);
        $user->setTid($twitchUser['twitchUserId']);
        $user->setAccessToken($accessToken);
        $user->setRefreshToken($refreshToken);
        $user->setTokenExpire(time() + $expires);
        $user->setType('twitch');
        $user->setProfile($profile);

        $this->em->persist($profile);
        $this->em->persist($user);
        $this->em->flush($user);
    }

    public function loadUserByUsername($username)
    {
        return $this->em->getRepository('AppBundle:User')
            ->findOneBy(['username' => $username]);
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername(
            $this->getUsernameForTwitchId($user->getTid())
        );
    }

    public function supportsClass($class)
    {
        return User::class === $class;
    }

}