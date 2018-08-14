<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 03.11.2017
 * Time: 17:21
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="profile")
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $profile_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profile_avatar;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profile_bio;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $profile_issub;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profile_subplan;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profile_subsince;

    /**
     * @return mixed
     */
    public function getProfileId()
    {
        return $this->profile_id;
    }

    /**
     * @param mixed $id
     */
    public function setProfileId($profile_id)
    {
        $this->profile_id = $profile_id;
    }

    /**
     * @return mixed
     */
    public function getProfileAvatar()
    {
        return $this->profile_avatar;
    }

    /**
     * @param mixed $profile_avatar
     */
    public function setProfileAvatar($profile_avatar)
    {
        $this->profile_avatar = $profile_avatar;
    }

    /**
     * @return mixed
     */
    public function getProfileBio()
    {
        return $this->profile_bio;
    }

    /**
     * @param mixed $profile_bio
     */
    public function setProfileBio($profile_bio)
    {
        $this->profile_bio = $profile_bio;
    }

    /**
     * @return mixed
     */
    public function getProfileIssub()
    {
        return $this->profile_issub;
    }

    /**
     * @param boolean $profile_issub
     */
    public function setProfileIssub($profile_issub = false)
    {
        $this->profile_issub = $profile_issub;
    }

    /**
     * @return mixed
     */
    public function getProfileSubplan()
    {
        return $this->profile_subplan;
    }

    /**
     * @param mixed $profile_subplan
     */
    public function setProfileSubplan($profile_subplan = 0)
    {
        $this->profile_subplan = $profile_subplan;
    }

    /**
     * @return mixed
     */
    public function getProfileSubsince()
    {
        return $this->profile_subsince;
    }

    /**
     * @param mixed $profile_subsince
     */
    public function setProfileSubsince($profile_subsince)
    {
        $this->profile_subsince = $profile_subsince;
    }
}
