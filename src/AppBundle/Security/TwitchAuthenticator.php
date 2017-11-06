<?php

namespace AppBundle\Security;

use AppBundle\Security\TwitchUserProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\SimplePreAuthenticatorInterface;
use AppBundle\Service\TwitchService;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

/**
 * Class checks twitch logins.
 *
 * Class TwitchAuthenticator
 * @package AppBundle\Security
 */
class TwitchAuthenticator implements SimplePreAuthenticatorInterface
{
    private $twitchService;

    public function __construct(TwitchService $twitchService)
    {
        $this->twitchService = $twitchService;
    }

    /**
     * Checks every request on homepage with code attribute and creates token for anon. user.
     *
     * @param Request $request
     * @param $providerKey
     * @return PreAuthenticatedToken|false
     */
    public function createToken(Request $request, $providerKey)
    {
        $isTwitchLogin = $request->getPathInfo() == '/' && $request->isMethod('GET');

        if(!$isTwitchLogin)
            throw new BadCredentialsException();

        if(!$request->query->has('code'))
            throw new BadCredentialsException();

        $code = $request->query->get('code');

        return new PreAuthenticatedToken(
            'anon.',
            $code,
            $providerKey
        );
    }

    /**
     * Checks if token is valid.
     *
     * @param TokenInterface $token
     * @param $providerKey
     * @return bool
     */
    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof PreAuthenticatedToken && $token->getProviderKey() === $providerKey;
    }

    /**
     * Fetches twitch user from code stored in token. If user already exists create new token (log in).
     * If user doesnt exist, register him in TwitchUserProvider.
     *
     * @param TokenInterface $token
     * @param UserProviderInterface $userProvider
     * @param $providerKey
     * @return PreAuthenticatedToken (user object, token (accessToken), providerKey, roles)
     */
    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        if (!$userProvider instanceof TwitchUserProvider) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The user provider must be an instance of TwitchUserProvider (%s was given).',
                    get_class($userProvider)
                )
            );
        }

        $code = $token->getCredentials();

        // fetch access and refresh tokens.
        $tokens = $this->twitchService->generateAccessToken($code);

        //if(!$tokens['accessToken'])
        //    throw new \InvalidArgumentException('wrong!');

        $twitchUser = $this->twitchService->fetchUserInformation($tokens['accessToken']);
        $username = $userProvider->getUsernameFromTwitchId($twitchUser['twitchUserId']);

        // if user doesnt exist => register him.
        if(!$username) {
            $userProvider->createNewUser(
                $twitchUser,
                $tokens['accessToken'],
                $tokens['refreshToken'],
                3600
            );

            $username = $userProvider->getUsernameFromTwitchId($twitchUser['twitchUserId']);
        }

        $user = $userProvider->loadUserByUsername($username);

        // create authenticated token
        return new PreAuthenticatedToken(
            $user,
            $tokens['accessToken'],
            $providerKey,
            $user->getRoles()
        );
    }
}