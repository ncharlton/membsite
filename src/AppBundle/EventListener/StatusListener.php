<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 02.03.2018
 * Time: 16:19
 */

namespace AppBundle\EventListener;
use AppBundle\Service\SettingService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\GoneHttpException;
/**
 * Class StatusListener
 * @package AppBundle\EventListener
 * @desc
 */
class StatusListener
{
    private $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function onCoreController(GetResponseEvent $event) {
        $status = $this->settingService->fetchSetting('general_site_status');
        $request = $event->getRequest();
        $uri = $request->server->get('REQUEST_URI');

        if(strpos($uri,'admin') == false) {
            if ($status == 0 && $request->server->get('REQUEST_URI') !== '/closed') {
                $event->setResponse(
                    new RedirectResponse("/closed")
                );
            }
        }
    }
}