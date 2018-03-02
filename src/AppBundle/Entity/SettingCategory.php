<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 21.01.2018
 * Time: 13:28
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="setting_category")
 */
class SettingCategory
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $setting_category_id;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Setting", mappedBy="setting_category")
     */
    private $setting;

    /**
     * @ORM\Column(type="string")
     */
    private $setting_category_name;

    /**
     * @ORM\Column(type="string")
     */
    private $setting_category_description;

    /**
     * @return mixed
     */
    public function getSettingCategoryId()
    {
        return $this->setting_category_id;
    }

    /**
     * @return mixed
     */
    public function getSettingCategoryName()
    {
        return $this->setting_category_name;
    }

    /**
     * @param mixed $setting_category_name
     */
    public function setSettingCategoryName($setting_category_name): void
    {
        $this->setting_category_name = $setting_category_name;
    }

    /**
     * @return mixed
     */
    public function getSettingCategoryDescription()
    {
        return $this->setting_category_description;
    }

    /**
     * @param mixed $setting_category_description
     */
    public function setSettingCategoryDescription($setting_category_description): void
    {
        $this->setting_category_description = $setting_category_description;
    }

    /**
     * @return ArrayCollection|Setting[]
     */
    public function getSetting()
    {
        return $this->setting;
    }




}