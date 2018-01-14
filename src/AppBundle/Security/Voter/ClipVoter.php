<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 03.01.2018
 * Time: 09:46
 */

namespace AppBundle\Security\Voter;

use AppBundle\Entity\Clip;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ClipVoter extends Voter
{

    const EDIT = 'edit';
    const DELETE = 'delete';

    private $decisionManager;

    public function __construct(AccessDecisionManagerInterface $decisionManager)
    {
        $this->decisionManager = $decisionManager;
    }

    protected function supports($attribute, $subject)
    {
        // check if attribute is supported
        if(!in_array($attribute, array(self::EDIT, self::DELETE)))
            return false;

        // only vote on Clip objects inside this voter
        if(!$subject instanceof Clip)
            return false;

        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        // the user must be logged in
        if(!$user instanceof User)
            return false;

        if($this->decisionManager->decide($token, array('ROLE_MOD')))
            return true;

        /** @var Clip $clip */
        $clip = $subject;

        switch ($attribute) {
            case self::EDIT:
                return $this->canEdit($clip, $user);
            case self::DELETE:
                return $this->canDelete($clip, $user);
        }
    }

    private function canDelete(Clip $clip, User $user) {
        return $this->canEdit($clip, $user);
    }

    private function canEdit(Clip $clip, User $user) {
        if($user === $clip->getAuthor()) {
            return true;
        } else {
            return false;
        }
    }
}