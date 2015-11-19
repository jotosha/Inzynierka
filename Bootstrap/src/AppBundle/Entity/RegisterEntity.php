<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 2015-11-19
 * Time: 11:31
 */

namespace AppBundle\Entity;



class RegisterEntity
{
    protected $email;

    protected $haslo;

    protected $imie;

    protected $nazwisko;


    protected $telefon;

    public function getemail()
    {
        return $this->email;
    }

    public function gethaslo(){
        return $this->haslo;
    }
    public function getimie(){
        return $this->imie;
    }
    public function getnazwisko(){
        return $this->nazwisko;
    }
    public function gettelefon(){
        return $this->telefon;
    }

}