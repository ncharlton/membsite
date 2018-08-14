<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 * @ORM\Table(name="news")
 * @UniqueEntity("news_title")
 * @ORM\HasLifecycleCallbacks()
 */
class News
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $news_id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Game", inversedBy="news")
     * @ORM\JoinColumn(name="game", referencedColumnName="game_id", nullable=true)
     */
    private $game;

    /**
     * @var User $author
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="news")
     * @ORM\JoinColumn(name="author", referencedColumnName="user_id")
     */
    private $author;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $news_title;

    /**
     * @ORM\Column(type="string")
     * @Gedmo\Slug(fields={"news_title"})
     */
    private $news_slug;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $news_keywords;



    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $news_content;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated_at;



    /**
     * @return mixed
     */
    public function getNewsId()
    {
        return $this->news_id;
    }

    /**
     * @param mixed $news_id
     */
    public function setNewsId($news_id)
    {
        $this->news_id = $news_id;
    }

    /**
     * @return mixed
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param Game $game
     */
    public function setGame(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getNewsTitle()
    {
        return $this->news_title;
    }

    /**
     * @param mixed $news_title
     */
    public function setNewsTitle($news_title)
    {
        $this->news_title = $news_title;
    }

    /**
     * @return mixed
     */
    public function getNewsSlug()
    {
        return $this->news_slug;
    }

    /**
     * @param mixed $news_slug
     */
    public function setNewsSlug($news_slug)
    {
        $this->news_slug = $news_slug;
    }

    /**
     * @return mixed
     */
    public function getNewsKeywords()
    {
        return $this->news_keywords;
    }

    /**
     * @param mixed $news_keywords
     */
    public function setNewsKeywords($news_keywords)
    {
        $this->news_keywords = $news_keywords;
    }

    /**
     * @return mixed
     */
    public function getNewsContent()
    {
        return $this->news_content;
    }

    /**
     * @param mixed $news_content
     */
    public function setNewsContent($news_content)
    {
        $this->news_content = $news_content;
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
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


}