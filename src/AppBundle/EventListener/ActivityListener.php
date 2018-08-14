<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 27.01.2018
 * Time: 23:20
 */

namespace AppBundle\EventListener;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

/**
 * Class ActivityListener
 * @package AppBundle\Listener
 * @desc Listener that updates the last activity of the authenticated user
 */
class ActivityListener
{
    protected $token;
    protected $entityManager;


    public function __construct(TokenStorage $token, EntityManagerInterface $entityManager)
    {
        $this->token = $token;
        $this->entityManager = $entityManager;
    }

    /**
     * Update the user "lastActive" on each request
     * @param FilterControllerEvent $event
     */
    public function onCoreController(FilterControllerEvent $event) {
        // Check that the current request is a "MASTER_REQUEST"
        if($event->getRequestType() !== HttpKernel::MASTER_REQUEST)
            return;

        // Check token authentication availability
        if($this->token->getToken()) {
            $user = $this->token->getToken()->getUser();
            if($user instanceof User && !($user->isActiveNow())) {
                $user->setLastActive(new \DateTime());
                $this->entityManager->persist($user);
                $this->entityManager->flush();
            }
        }
    }
}