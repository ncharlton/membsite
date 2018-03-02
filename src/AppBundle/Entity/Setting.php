<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 19.01.2018
 * Time: 15:17
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="setting")
 */
class Setting
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $setting_id;

    /**
     * @ORM\Column(type="string")
     */
    private $setting_key;

    /**
     * @ORM\Column(type="string")
     */
    private $setting_value;

    /**
     * @ORM\Column(type="string")
     */
    private $setting_description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SettingCategory", inversedBy="setting")
     * @ORM\JoinColumn(name="setting_category", referencedColumnName="setting_category_id", nullable=true)
     */
    private $setting_category;

    /**
     * @return mixed
     */
    public function getSettingDescription()
    {
        return $this->setting_description;
    }

    /**
     * @param mixed $setting_description
     */
    public function setSettingDescription($setting_description): void
    {
        $this->setting_description = $setting_description;
    }

    /**
     * @return mixed
     */
    public function getSettingId()
    {
        return $this->setting_id;
    }

    /**
     * @return mixed
     */
    public function getSettingKey()
    {
        return $this->setting_key;
    }

    /**
     * @param mixed $setting_key
     */
    public function setSettingKey($setting_key): void
    {
        $this->setting_key = $setting_key;
    }

    /**
     * @return mixed
     */
    public function getSettingValue()
    {
        return $this->setting_value;
    }

    /**
     * @param mixed $setting_value
     */
    public function setSettingValue($setting_value): void
    {
        $this->setting_value = $setting_value;
    }

    /**
     * @return SettingCategory
     */
    public function getSettingCategory()
    {
        return $this->setting_category;
    }

    /**
     * @param SettingCategory $setting_category
     */
    public function setSettingCategory(SettingCategory $settingCategory )
    {
        $this->setting_category = $settingCategory;
    }


}