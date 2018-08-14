<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 02.03.2018
 * Time: 16:19
 */

namespace AppBundle\EventListener;
use AppBundle\Service\SettingService;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class StatusListener
 * @package AppBundle\EventListener
 * @desc
 */
class StatusListener
{
    private $settingService;

    private $settings = array(
        'system_site_active' => [
            'tag' => 'system_site_active',
            'value' => 1
        ]
    );

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function onCoreController(GetResponseEvent $event) {
        // fetch site status setting
        $status = $this->settingService->matchSetting($this->settings['system_site_active']);

        $request = $event->getRequest();
        // get current url
        $uri = $request->server->get('REQUEST_URI');

        // prevents admin area to be closed off
        if(strpos($uri,'admin') == false) {

            // if site status setting = closed and user is not navigating the closed page => redirect to closed page
            if ($status == 0 ) {
                if ($request->server->get('REQUEST_URI') !== '/closed') {

                    $event->setResponse(
                        new RedirectResponse("/closed")
                    );
                }
            }
        }
    }
}