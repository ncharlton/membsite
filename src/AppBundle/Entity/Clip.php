<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="clip")
 * @UniqueEntity("clip_name")
 */
class Clip{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $clip_id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $clip_tracking_id;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Gedmo\Slug(fields={"clip_name"})
     */
    private $clip_slug;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $clip_name;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $clip_creator;

    /**
     * @Assert\NotBlank()
     * @Assert\Url()
     * @ORM\Column(type="string")
     */
    private $clip_embed_url;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $clip_vod_id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $clip_duration;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="datetime")
     */
    private $clip_created_at;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $clip_hits;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $clip_thumbnail_medium;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $clip_thumbnail_small;

    /**
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
    public function getClipName()
    {
        return $this->clip_name;
    }

    /**
     * @return mixed
     */
    public function getclip_tracking_id()
    {
        return $this->clip_tracking_id;
    }

    /**
     * @return mixed
     */
    public function getclip_slug()
    {
        return $this->clip_slug;
    }

    /**
     * @return mixed
     */
    public function getclip_name()
    {
        return $this->clip_name;
    }

    /**
     * @return mixed
     */
    public function getclip_creator()
    {
        return $this->clip_creator;
    }

    /**
     * @return mixed
     */
    public function getclip_vod_id()
    {
        return $this->clip_vod_id;
    }

    /**
     * @return mixed
     */
    public function getclip_duration()
    {
        return $this->clip_duration;
    }

    /**
     * @return mixed
     */
    public function getclip_created_at()
    {
        return $this->clip_created_at;
    }

    /**
     * @return mixed
     */
    public function getclip_hits()
    {
        return $this->clip_hits;
    }

    /**
     * @return mixed
     */
    public function getauthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getclip_thumbnail_medium()
    {
        return $this->clip_thumbnail_medium;
    }

    /**
     * @return mixed
     */
    public function getclip_thumbnail_small()
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
     * @param mixed $clip_slug
     */
    public function setClipSlug($clip_slug)
    {
        $this->clip_slug = $clip_slug;
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
     * @param mixed $clip_created_at
     */
    public function setClipCreatedAt($clip_created_at)
    {
        $this->clip_created_at = $clip_created_at;
    }

    /**
     * @param mixed $clip_hits
     */
    public function setClipHits($clip_hits)
    {
        $this->clip_hits = $clip_hits;
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
     * @param mixed $author
     */
    public function setClipAuthor(User $author)
    {
        $this->author = $author;
    }


}