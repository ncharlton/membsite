<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 05.03.2018
 * Time: 17:18
 */

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Rank
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RankRepository")
 * @ORM\Table(name="rank")
 */
class Rank
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $rank_id;

    /**
     * @ORM\Column(type="string")
     */
    private $rank_name;

    /**
     * @ORM\Column(type="string")
     */
    private $rank_score;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please provide a rank badge (.png)")
     * @Assert\File(mimeTypes={"image/png"})
     */
    private $rank_badge;



    /**
     * @return mixed
     */
    public function getRankId()
    {
        return $this->rank_id;
    }

    /**
     * @param mixed $rank_id
     */
    public function setRankId($rank_id): void
    {
        $this->rank_id = $rank_id;
    }

    /**
     * @return mixed
     */
    public function getRankName()
    {
        return $this->rank_name;
    }

    /**
     * @param mixed $rank_name
     */
    public function setRankName($rank_name): void
    {
        $this->rank_name = $rank_name;
    }

    /**
     * @return mixed
     */
    public function getRankScore()
    {
        return $this->rank_score;
    }

    /**
     * @param mixed $rank_score
     */
    public function setRankScore($rank_score): void
    {
        $this->rank_score = $rank_score;
    }

    /**
     * @return mixed
     */
    public function getRankBadge()
    {
        return $this->rank_badge;
    }

    /**
     * @param mixed $rank_badge
     */
    public function setRankBadge($rank_badge): void
    {
        $this->rank_badge = $rank_badge;
    }



}