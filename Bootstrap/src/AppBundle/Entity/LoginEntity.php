<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 2015-11-18
 * Time: 22:32
 */

namespace AppBundle\Entity;


class LoginEntity
{
    protected $login;

    protected $password;

    protected $zapamietajmnie;


    public function getlogin()
    {
        return $this->login;
    }

    public function getpassword(){
        return $this->password;
    }
    public function getzapamietajmnie(){
        return $this->zapamietajmnie;
    }

}