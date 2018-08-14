<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 */

class Comment {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $comment_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(name="user", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @ORM\Column(type="text")
     */
    private $comment_content;

    /**
     * @ORM\Column(type="string")
     */
    private $item_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $item_id;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * @param mixed $comment_id
     */
    public function setCommentId($comment_id): void
    {
        $this->comment_id = $comment_id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }


    /**
     * @return mixed
     */
    public function getCommentContent()
    {
        return $this->comment_content;
    }

    /**
     * @param mixed $comment_content
     */
    public function setCommentContent($comment_content): void
    {
        $this->comment_content = $comment_content;
    }

    /**
     * @return mixed
     */
    public function getItemType()
    {
        return $this->item_type;
    }

    /**
     * @param mixed $item_type
     */
    public function setItemType($item_type): void
    {
        $this->item_type = $item_type;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param mixed $item_id
     */
    public function setItemId($item_id): void
    {
        $this->item_id = $item_id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }
}