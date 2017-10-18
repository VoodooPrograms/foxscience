<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=255)
     */
    protected $sex;

    /**
     * @var \Date
     *
     * @ORM\Column(name="birthday_date", type="date")
     */
    protected $birthdayDate;

    /**
     * @var text
     *
     * @ORM\Column(name="about_me", type="text")
     */
    protected $aboutMe;

    /**
     * @return \Date
     */
    public function getBirthdayDate()
    {
        return $this->birthdayDate;
    }

    /**
     * @param \Date $birthdayDate
     */
    public function setBirthdayDate($birthdayDate)
    {
        $this->birthdayDate = $birthdayDate;
    }

    /**
     * @return text
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * @param text $aboutMe
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}