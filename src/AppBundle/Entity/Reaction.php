<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 28.03.2018
 * Time: 23:15
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReactionRespository")
 * @ORM\Table(name="reaction")
 */
class Reaction
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $reaction_id;

    /**
     * @ORM\Column(type="string")
     */
    private $reaction_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $reaction_user_id;

    /**
     * @ORM\Column(type="string")
     */
    private $reaction_username;

    /**
     * @ORM\Column(type="string")
     */
    private $reaction_item_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $reaction_item_id;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /**
     * @return mixed
     */
    public function getReactionType()
    {
        return $this->reaction_type;
    }

    /**
     * @param mixed $reaction_type
     */
    public function setReactionType($reaction_type): void
    {
        $this->reaction_type = $reaction_type;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->reaction_user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->reaction_user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->reaction_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->reaction_username = $username;
    }

    /**
     * @return mixed
     */
    public function getItemType()
    {
        return $this->reaction_item_type;
    }

    /**
     * @param mixed $item_type
     */
    public function setItemType($item_type): void
    {
        $this->reaction_item_type = $item_type;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->reaction_item_id;
    }

    /**
     * @param mixed $item_id
     */
    public function setItemId($item_id): void
    {
        $this->reaction_item_id = $item_id;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }
}