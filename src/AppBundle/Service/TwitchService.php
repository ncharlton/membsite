<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 31.10.2017
 * Time: 19:56
 */

namespace AppBundle\Service;

use Unirest\Request as Unirest;

class TwitchService
{
    /**
     * @var string
     */
    private $publicKey;

    /**
     * @var string
     */
    private $privateKey;

    /**
     * @var string
     */
    private $redirectUrl;

    /**
     * @var string
     */
    private $channelId;

    /**
     * @var string
     */
    private $authorization_url = 'https://api.twitch.tv/kraken/oauth2/authorize?response_type=code';

    /**
     * @var string
     */
    private $access_url = 'https://api.twitch.tv/kraken/oauth2/token';

    /**
     * @var string
     */
    private $user_url = 'https://api.twitch.tv/kraken/user';

    private $users_url = 'https://api.twitch.tv/kraken/users/';

    /**
     * @var string
     */
    private $scope = 'user_read user_subscriptions';

    public function __construct($twitchPublicKey, $twitchPrivateKey, $twitchRedirectUrl, $twitchChannelId)
    {
        $this->publicKey = $twitchPublicKey;
        $this->privateKey = $twitchPrivateKey;
        $this->redirectUrl = $twitchRedirectUrl;
        $this->channelId = $twitchChannelId;
    }

    public function generateAuthorizationUrl() {
        return $this->authorization_url.'&client_id='.$this->publicKey.'&redirect_uri='.$this->redirectUrl.'&scope='.$this->scope;
    }

    /**
     * Sends post request to twitch api with authorizationCode and returns access and refresh tokens.
     *
     * @param $authorizationCode
     * @return array
     */
    public function generateAccessToken($authorizationCode) {
        $token_url = $this->access_url.'?client_id='.$this->publicKey.'&client_secret='.$this->privateKey.'&code='.$authorizationCode.'&grant_type=authorization_code&redirect_uri='.$this->redirectUrl;

        $result = Unirest::post($token_url);

        return array(
            'accessToken' => $result->body->access_token,
            'refreshToken' => $result->body->refresh_token
        );
    }

    /**
     * Retrieves user information through accessToken
     *
     * @param $accessToken
     * @return array
     */
    public function fetchUserInformation($accessToken) {
        $headers = array(
            'Accept' => 'application/vnd.twitchtv.v5+json',
            'Authorization' => 'OAuth '. $accessToken,
        );

        $user = Unirest::get($this->user_url, $headers);

        return array(
            'twitchUsername' => $user->body->display_name,
            'twitchUserId' => $user->body->_id,
            'twitchBio' => $user->body->bio,
            'twitchLogo' => $user->body->logo,
            'twitchEmail' => $user->body->email,
            'twitchEmailVerified' => $user->body->email_verified,
        );
    }

    public function getUserFollows($twitchUserId) {
        $headers = array(
            'Accept' => 'application/vnd.twitchtv.v5+json',
            'Client-ID' => $this->publicKey
        );


        $follows = Unirest::get($this->users_url.$twitchUserId.'/follows/channels?direction=asc', $headers);

        return $follows->body;
    }

    /**
     * Checks if user is sub of channel.
     *
     * @param $twitchUserId
     * @param $accessToken
     * @return array|bool
     */
    public function checkIfSub($twitchUserId, $accessToken) {
        $headers = array(
            'Accept' => 'application/vnd.twitchtv.v5+json',
            'Client-ID' => $this->publicKey,
            'Authorization' => 'OAuth '. $accessToken,
        );

        $isSub = Unirest::get($this->users_url.$twitchUserId.'/subscriptions/'.$this->channelId, $headers);

        if($isSub->code == 200) {
            return array(
                'subSince' => $isSub->body->created_at,
                'subPlan' => $isSub->body->sub_plan,
            );
        } else
            return false;
    }

    /**
     * @param $clipUrl
     * @param $clipName
     * @return array
     */
    public function getClip($clipUrl) {
        $headers = array(
            'Accept' => 'application/vnd.twitchtv.v5+json',
            'Client-ID' => $this->publicKey
        );

        $url = "";
        if(substr( $clipUrl, 0, 8 ) === "https://") {
            $url = "https://api.twitch.tv/kraken/clips/" . str_replace("https://clips.twitch.tv/", "", $clipUrl);
        }else{
            $url = "https://api.twitch.tv/kraken/clips/" . $clipUrl;
        }
        $clip = Unirest::get($url, $headers);

        return array(
            'clipName' => $clip->body->title,
            'clipTrackingId' => $clip->body->tracking_id,
            'clipSlug' => $clip->body->slug,
            'clipCreator' => $clip->body->curator->name,
            'clipEmbedUrl' => $clip->body->embed_url,
            'clipVodId' => $clip->body->vod->id,
            'clipDuration' => $clip->body->duration,
            'clipCreatedAt' => $clip->body->created_at,
            'clipHits' => $clip->body->views,
            'clipThumbnailMedium' => $clip->body->thumbnails->medium,
            'clipThumbnailSmall' => $clip->body->thumbnails->small
        );
    }
}