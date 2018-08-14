<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 03.03.2018
 * Time: 19:06
 */

namespace AppBundle\EventListener;
use AppBundle\Entity\User;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * Class BanListener
 * @package AppBundle\EventListener
 */
class BanListener
{
    protected $token;
    protected $entityManager;


    public function __construct(TokenStorageInterface $token, EntityManagerInterface $entityManager)
    {
        $this->token = $token;
        $this->entityManager = $entityManager;
    }

    public function onCoreController(GetResponseEvent $event) {
        // Check that the current request is a "MASTER_REQUEST"
        if($event->getRequestType() !== HttpKernel::MASTER_REQUEST)
            return;

        if($this->token->getToken()) {
            $user = $this->token->getToken()->getUser();
            if($user instanceof  User && $user->isActiveNow()) {
                if($user->isBanned() && $user->checkBan()) {
                    $this->redirect($event);
                } else {
                    $user->unban();
                    $this->entityManager->persist($user);
                    $this->entityManager->flush();
                }
            }
        }
    }

    public function redirect(GetResponseEvent $event) {
        $request = $event->getRequest();
        // get current url
        $uri = $request->server->get('REQUEST_URI');

        if ($request->server->get('REQUEST_URI') !== '/banned') {
            $event->setResponse(
                new RedirectResponse("/banned")
            );
        }
    }
}