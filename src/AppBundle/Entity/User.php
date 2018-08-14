<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 30.10.2017
 * Time: 00:29
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Profile;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity("username")
 * @UniqueEntity("email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Profile", fetch="EAGER")
     * @ORM\JoinColumn(name="profile", referencedColumnName="profile_id", onDelete="CASCADE")
     */
    protected $profile;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\News", mappedBy="author", fetch="LAZY")
     * @ORM\OrderBy({"created_at" = "DESC"})
     */
    protected $news;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="user", fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"created_at" = "DESC"})
     */
    protected $comments;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Rank")
     * @ORM\JoinColumn(name="rank", referencedColumnName="rank_id")
     */
    private $rank;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\Column(type="integer")
     */
    private $activated;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ban_time;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ban_reason;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tid;

    /**
     * @Assert\Email()
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", unique=true)
     */
    private $username;

    /**
     * the encoded password
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $password;

    /**
     * A non-persisted field that's used to create the encoded password.
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $access_token;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $refresh_token;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $token_expire;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $roles = [];

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $last_active;

    /**
     * @return \DateTime
     */
    public function getLastActive()
    {
        return $this->last_active;
    }

    /**
     * @param \DateTime $last_active
     */
    public function setLastActive($last_active): void
    {
        $this->last_active = $last_active;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score): void
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param mixed $access_token
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * @param mixed $refresh_token
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;
    }

    /**
     * @return mixed
     */
    public function getTokenExpire()
    {
        return $this->token_expire;
    }

    /**
     * @param mixed $token_expire
     */
    public function setTokenExpire($token_expire)
    {
        $this->token_expire = $token_expire;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        $this->password = null;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function getRoles()
    {
        $roles = $this->roles;

        // give everyone ROLE_USER!
        if(!in_array('ROLE_USER', $roles)) {
            $roles[] = 'ROLE_USER';
        }

        return $roles;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    /**
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile(Profile $profile)
    {
       if(!$profile) {
            $this->profile = new Profile();
        } else
            $this->profile = $profile;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     */
    public function setRank(Rank $rank): void
    {
        $this->rank = $rank;
    }


    /**
     * @return mixed
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * @param mixed $activated
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
    }

    /**
     * @return string
     */
    public function getSuperiorRole() {
        $roles = $this->roles;

        if(in_array('ROLE_SUPER_ADMIN', $roles))
            return 'ROLE_SUPER_ADMIN';
        elseif(in_array('ROLE_ADMIN', $roles))
            return 'ROLE_ADMIN';
        elseif(in_array('ROLE_MOD', $roles))
            return 'ROLE_MOD';
        else
            return 'ROLE_USER';
    }

    /**
     * @return mixed
     */
    public function getBanTime()
    {
        return $this->ban_time;
    }

    /**
     * @param mixed $ban_time
     */
    public function setBanTime($ban_time): void
    {
        $this->ban_time = $ban_time;
    }

    /**
     * @return mixed
     */
    public function getBanReason()
    {
        return $this->ban_reason;
    }

    /**
     * @param mixed $ban_reason
     */
    public function setBanReason($ban_reason): void
    {
        $this->ban_reason = $ban_reason;
    }

    /**
     * Checks if current or provided user has 'ROLE_SUPER_ADMIN'
     *
     * @param User|null $user
     * @return bool
     */
    public function isSuperAdmin(User $user = null) {
        if($user) {
            if(in_array('ROLE_SUPER_ADMIN', $user->getRoles()))
                return true;
            else
                return false;
        } else {
            if(in_array('ROLE_SUPER_ADMIN', $this->getRoles()))
                return true;
            else return false;
        }
    }

    /**
     * Checks if current or provided user has 'ROLE_ADMIN'
     *
     * @param User|null $user
     * @return bool
     */
    public function isAdmin(User $user = null) {
        if($user) {
            if(in_array('ROLE_ADMIN', $user->getRoles()))
                return true;
            else
                return false;
        } else {
            if(in_array('ROLE_ADMIN', $this->getRoles()))
                return true;
            else return false;
        }
    }

    /**
     * Checks if current or provided user has 'ROLE_MOD'
     *
     * @param User|null $user
     * @return bool
     */
    public function isMod(User $user = null) {
        if($user) {
            if(in_array('ROLE_MOD', $user->getRoles()))
                return true;
            else
                return false;
        } else {
            if(in_array('ROLE_MOD', $this->getRoles()))
                return true;
            else return false;
        }
    }

    /**
     * @return bool Whether the user is active or not
     */
    public function isActiveNow() {
        $delay = new \DateTime('2 minutes ago');

        return ($this->getLastActive() > $delay);
    }

    public function isBanned() {
        if($this->getActivated() == 2) {
            return true;
        } else
            return false;
    }

    public function unban() {
        $this->setBanReason('');
        $this->setBanTime(null);
        $this->setActivated(1);
    }

    public function checkBan() {
        $now = new \DateTime();

        if($this->getBanTime() < $now) {
            return false;
        } else {
            return true;
        }
    }
}