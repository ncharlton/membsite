<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClipRepository")
 * @ORM\Table(name="clip")
 * @UniqueEntity("clip_name")
 * @UniqueEntity("clip_url")
 */
class Clip {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $clip_id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Url()
     */
    public $clip_url;

    /**
     * @ORM\Column(type="integer")
     */
    private $clip_tracking_id;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Gedmo\Slug(fields={"clip_name"})
     */
    private $clip_slug;

    /**
     * @ORM\Column(type="string")
     */
    private $clip_name;

    /**
     * @ORM\Column(type="string")
     */
    private $clip_creator;

    /**
     * @Assert\Url()
     * @ORM\Column(type="string")
     */
    private $clip_embed_url;

    /**
     * @ORM\Column(type="integer")
     */
    private $clip_vod_id;

    /**
     * @ORM\Column(type="string")
     */
    private $clip_duration;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $clip_created_at;

    /**
     * @ORM\Column(type="string")
     */
    private $clip_thumbnail_medium;

    /**
     * @ORM\Column(type="string")
     */
    private $clip_thumbnail_small;

    /**
     * @var User $author
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="news")
     * @ORM\JoinColumn(name="author", referencedColumnName="user_id")
     */
    private $author;

    /**
     * @return mixed
     */
    public function getClipId()
    {
        return $this->clip_id;
    }

    /**
     * @return mixed
     */
    public function getClipUrl()
    {
        return $this->clip_url;
    }

    /**
     * @param mixed $clip_url
     */
    public function setClipUrl($clip_url)
    {
        $this->clip_url = $clip_url;
    }

    /**
     * @return mixed
     */
    public function getClipName()
    {
        return $this->clip_name;
    }

    /**
     * @return mixed
     */
    public function getClipTrackingId()
    {
        return $this->clip_tracking_id;
    }

    /**
     * @return mixed
     */
    public function getClipSlug()
    {
        return $this->clip_slug;
    }

    /**
     * @return mixed
     */
    public function getClipCreator()
    {
        return $this->clip_creator;
    }

    /**
     * @return mixed
     */
    public function getClipEmbedUrl()
    {
        return $this->clip_embed_url;
    }

    /**
     * @return mixed
     */
    public function getClipVodId()
    {
        return $this->clip_vod_id;
    }

    /**
     * @return mixed
     */
    public function getClipDuration()
    {
        return $this->clip_duration;
    }

    /**
     * @return mixed
     */
    public function getClipCreatedAt()
    {
        return $this->clip_created_at;
    }

    /**
     * @return mixed
     */
    public function getClipThumbnailMedium()
    {
        return $this->clip_thumbnail_medium;
    }

    /**
     * @return mixed
     */
    public function getClipThumbnailSmall()
    {
        return $this->clip_thumbnail_small;
    }

    /**
     * @param mixed $clip_tracking_id
     */
    public function setClipTrackingId($clip_tracking_id)
    {
        $this->clip_tracking_id = $clip_tracking_id;
    }

    /**
     * @param mixed $clip_name
     */
    public function setClipName($clip_name)
    {
        $this->clip_name = $clip_name;
    }

    /**
     * @param mixed $clip_creator
     */
    public function setClipCreator($clip_creator)
    {
        $this->clip_creator = $clip_creator;
    }

    /**
     * @param mixed $clip_embed_url
     */
    public function setClipEmbedUrl($clip_embed_url)
    {
        $this->clip_embed_url = $clip_embed_url;
    }

    /**
     * @param mixed $clip_vod_id
     */
    public function setClipVodId($clip_vod_id)
    {
        $this->clip_vod_id = $clip_vod_id;
    }

    /**
     * @param mixed $clip_duration
     */
    public function setClipDuration($clip_duration)
    {
        $this->clip_duration = $clip_duration;
    }


    /**
     * @param mixed $clip_thumbnail_medium
     */
    public function setClipThumbnailMedium($clip_thumbnail_medium)
    {
        $this->clip_thumbnail_medium = $clip_thumbnail_medium;
    }

    /**
     * @param mixed $clip_thumbnail_small
     */
    public function setClipThumbnailSmall($clip_thumbnail_small)
    {
        $this->clip_thumbnail_small = $clip_thumbnail_small;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }


}