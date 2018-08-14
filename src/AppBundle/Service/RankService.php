<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 06.03.2018
 * Time: 13:44
 */

namespace AppBundle\Service;
use AppBundle\Entity\Rank;
use AppBundle\Entity\RankAction;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Class RankService
 * @package AppBundle\Service
 * @desc This service performs rank actions
 */
class RankService
{
    private $em;
    private $settingService;

    private $settings = array(
        'service_rank_active' => array(
            'tag' => 'service_rank_active',
            'value' => 0
        )
    );

    public function __construct(EntityManagerInterface $em, SettingService $settingService, TokenStorageInterface $token)
    {
        $this->em = $em;
        $this->settingService = $settingService;
        $this->token = $token;
    }

    public function award($rankActionName) {
        // check if rank system is active
        if($this->settingService->matchSetting($this->settings['service_rank_active'])) {
            // if rank exists
            /** @var RankAction $rankAction */
            $rankAction = $this->em->getRepository('AppBundle:RankAction')->findOneBy(['rank_action_name' => $rankActionName]);
            if ($rankAction) {

                // check if a user
                $token = $this->token->getToken();
                if ($token) {
                    /** @var User $user */
                    $user = $token->getUser();

                    if ($user instanceof User) {
                        $user->setScore($user->getScore() + $rankAction->getRankActionScore());

                        // Recalculate current rank of user after score update
                        $user = $this->recalculate($user);

                        $this->em->persist($user);
                        $this->em->flush();

                        return $rankAction;
                    }
                }
            }
        }

        return false;
    }

    public function awardUser($rankActionName, User $user) {
        if($this->settingService->matchSetting($this->settings['service_rank_active'])) {
            // if rank exists
            /** @var RankAction $rankAction */
            $rankAction = $this->em->getRepository('AppBundle:RankAction')->findOneBy(['rank_action_name' => $rankActionName]);
            if ($rankAction) {
                die("rank exists");
                if ($user instanceof User) {
                    $user->setScore($user->getScore() + $rankAction->getRankActionScore());

                    // Recalculate current rank of user after score update
                    $user = $this->recalculate($user);

                    $this->em->persist($user);
                    $this->em->flush();

                    return $rankAction;
                }
            } else {
                die("rank doesnt exist");
            }
        }

        return false;
    }

    /**
     * @param User $user
     * @return User $user
     *
     * @desc Updates the rank of the user and returns user object
     */
    public function recalculate(User $user) {
        $ranks = $this->em->getRepository('AppBundle:Rank')->findAllOrderedByScore();

        foreach ($ranks as $rank) {
            if($user->getScore() >= $rank->getRankScore()) {
                $user->setRank($rank);
            }
        }

        return $user;
    }
}