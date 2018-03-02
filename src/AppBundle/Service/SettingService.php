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
}