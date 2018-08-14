<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 06.03.2018
 * Time: 12:36
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rank_action")
 */
class RankAction
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $rank_action_id;

    /**
     * @ORM\Column(type="string")
     */
    private $rank_action_score;

    /**
     * @ORM\Column(type="string")
     */
    private $rank_action_name;

    /**
     * @ORM\Column(type="string")
     */
    private $rank_action_description;

    /**
     * @ORM\Column(type="string")
     */
    private $rank_action_message;

    /**
     * @return mixed
     */
    public function getRankActionScore()
    {
        return $this->rank_action_score;
    }

    /**
     * @param mixed $rank_action_score
     */
    public function setRankActionScore($rank_action_score): void
    {
        $this->rank_action_score = $rank_action_score;
    }

    /**
     * @return mixed
     */
    public function getRankActionName()
    {
        return $this->rank_action_name;
    }

    /**
     * @param mixed $rank_action_name
     */
    public function setRankActionName($rank_action_name): void
    {
        $this->rank_action_name = $rank_action_name;
    }

    /**
     * @return mixed
     */
    public function getRankActionDescription()
    {
        return $this->rank_action_description;
    }

    /**
     * @param mixed $rank_action_description
     */
    public function setRankActionDescription($rank_action_description): void
    {
        $this->rank_action_description = $rank_action_description;
    }


    /**
     * @return mixed
     */
    public function getRankActionMessage()
    {
        return $this->rank_action_message;
    }

    /**
     * @param mixed $rank_action_message
     */
    public function setRankActionMessage($rank_action_message): void
    {
        $this->rank_action_message = $rank_action_message;
    }
}