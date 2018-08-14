<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 20.01.2018
 * Time: 18:10
 */

namespace AppBundle\Service;

use AppBundle\Entity\Setting;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\GoneHttpException;

class SettingService
{
    private $em;
    private $logger;

    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->em = $entityManager;
        $this->logger = $logger;
    }

    /**
     * @param $settingKey
     * @return mixed
     * @desc fetchSetting tries to fetch a setting. If it fails it throws an exception
     */
    public function fetchSetting($settingKey) {
        $repository = $this->em->getRepository(Setting::class);
        $setting = $repository->findOneBy([
            'setting_key' => $settingKey
        ]);

        // if setting wasn't found, log critical error and throw gone (410) exception
        if(!$setting) {
            $this->logger->critical("setting " . $settingKey . " not found", [
                new \DateTime()
            ]);
            throw new GoneHttpException('setting unavailable');
        }

        return $setting->getSettingValue();
    }

    /**
     * @param array(tag,value) $settingPair
     * @return $settingPair['value'] | setting
     * @desc matchSetting tries to fetch a setting. If it fails it returns the default value. It's use is safer and intended for critial settings
     */
    public function matchSetting($settingPair) {
        $repository = $this->em->getRepository(Setting::class);
        $setting = $repository->findOneBy([
            'setting_key' => $settingPair['tag']
        ]);

        if(!$setting)
            return $settingPair['value'];
        else
            return $setting->getSettingValue();
    }
}