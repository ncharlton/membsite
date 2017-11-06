<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 * @UniqueEntity("game_name")
 */
class Game
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $game_id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $game_name;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Gedmo\Slug(fields={"game_name"})
     */
    private $game_slug;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $game_description;

    /**
     * @Assert\NotBlank()
     * @Assert\Url()
     * @ORM\Column(type="string")
     */
    private $game_image;

    /**
     * @Assert\NotBlank()
     * @Assert\Url()
     * @ORM\Column(type="string")
     */
    private $game_buy_link;

    /**
     * @Assert\NotBlank()
     * @Assert\Url()
     * @ORM\Column(type="string")
     */
    private $game_link;

    /**
     * @ORM\Column(type="string")
     * @Assert\Choice(callback="getGameGenres")
     */
    private $game_genre;

    /**
     * @ORM\Column(type="string")
     * @Assert\Choice(callback="getGameModes")
     */
    private $game_mode;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\News", mappedBy="game")
     * @ORM\OrderBy({"created_at" = "DESC"})
     */
    private $news;

    #

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * @return mixed
     */
    public function getGameName()
    {
        return $this->game_name;
    }

    /**
     * @param mixed $game_name
     */
    public function setGameName($game_name)
    {
        $this->game_name = $game_name;
    }

    /**
     * @return mixed
     */
    public function getGameSlug()
    {
        return $this->game_slug;
    }

    /**
     * @return mixed
     */
    public function getGameDescription()
    {
        return $this->game_description;
    }

    /**
     * @param mixed $game_description
     */
    public function setGameDescription($game_description)
    {
        $this->game_description = $game_description;
    }

    /**
     * @return mixed
     */
    public function getGameImage()
    {
        return $this->game_image;
    }

    /**
     * @param mixed $game_image
     */
    public function setGameImage($game_image)
    {
        $this->game_image = $game_image;
    }

    /**
     * @return mixed
     */
    public function getGameBuyLink()
    {
        return $this->game_buy_link;
    }

    /**
     * @param mixed $game_buy_link
     */
    public function setGameBuyLink($game_buy_link)
    {
        $this->game_buy_link = $game_buy_link;
    }

    /**
     * @return mixed
     */
    public function getGameLink()
    {
        return $this->game_link;
    }

    /**
     * @param mixed $game_link
     */
    public function setGameLink($game_link)
    {
        $this->game_link = $game_link;
    }

    /**
     * @return mixed
     */
    public function getGameGenre()
    {
        return $this->game_genre;
    }

    public function getGameGenres()
    {
        return array(
            'Adventure','Horror','Sport','Action'
        );
    }

    /**
     * @param mixed $game_genre
     */
    public function setGameGenre($game_genre)
    {
        $this->game_genre = $game_genre;
    }

    /**
     * @return mixed
     */
    public function getGameMode()
    {
        return $this->game_mode;
    }

    public function getGameModes()
    {
        return array(
          'Singleplayer', 'Multiplayer', 'Single & Multi'
        );
    }

    /**
     * @param mixed $game_mode
     */
    public function setGameMode($game_mode)
    {
        $this->game_mode = $game_mode;
    }

    /**
     * @return ArrayCollection|News[]
     */
    public function getNews()
    {
        return $this->news;
    }
}