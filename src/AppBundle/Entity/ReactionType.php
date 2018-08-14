<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 06.03.2018
 * Time: 16:47
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="reaction_type")
 */
class ReactionType
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $reaction_type_id;

    /**
     * @ORM\Column(type="string")
     */
    private $reaction_type_name;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please provide a reaction icon (.png)")
     * @Assert\File(mimeTypes={"image/png"})
     */
    private $reaction_type_icon;


    /**
     * @return mixed
     */
    public function getReactionTypeId()
    {
        return $this->reaction_type_id;
    }

    /**
     * @param mixed $reaction_type_id
     */
    public function setReactionTypeId($reaction_type_id): void
    {
        $this->reaction_type_id = $reaction_type_id;
    }

    /**
     * @return mixed
     */
    public function getReactionTypeName()
    {
        return $this->reaction_type_name;
    }

    /**
     * @param mixed $reaction_type_name
     */
    public function setReactionTypeName($reaction_type_name): void
    {
        $this->reaction_type_name = $reaction_type_name;
    }

    /**
     * @return mixed
     */
    public function getReactionTypeIcon()
    {
        return $this->reaction_type_icon;
    }

    /**
     * @param mixed $reaction_type_icon
     */
    public function setReactionTypeIcon($reaction_type_icon): void
    {
        $this->reaction_type_icon = $reaction_type_icon;
    }

}