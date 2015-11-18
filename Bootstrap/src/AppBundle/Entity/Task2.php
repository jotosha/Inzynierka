<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 2015-11-16
 * Time: 17:33
 */

namespace AppBundle\Entity;


class Task2
{
    /*
            podstawowe informacje
     */
    protected $wolneod;

    protected $miasto;

    protected $dzielnica;

    protected $ulica;

    protected $typstancji;

    protected $typbudynku;

    protected $liczbapokoi;

    protected $maksliczbaosob;

    protected $metraz;

    /*
            wyposazenie
    */

    protected $internet;

    protected $telefon;

    protected $telewizor;

    protected $kablowka;

    protected $pralka;

    protected $lodowka;

    protected $prysznic;

    protected $wanna;

    protected $balkon;

    protected $taras;

    protected $parking;

    protected $garaz;

    public function getwolneod(){
        return $this->wolneod;
    }
    public function getmiasto(){
        return $this->miasto;
    }
    public function getdzielnica(){
        return $this->dzielnica;
    }
    public function getulica(){
        return $this->ulica;
    }
    public function gettypstancji(){
        return $this->typstancji;
    }
    public function gettypbudynku(){
        return $this->typbudynku;
    }
    public function getliczbapokoi(){
        return $this->liczbapokoi;
    }
    public function getmaksliczbaosob(){
        return $this->maksliczbaosob;
    }
    public function getmetraz(){
        return $this->metraz;
    }

    /*
            wyposazenie
     */
    public function getinternet(){
        return $this->internet;
    }
    public function gettelefon(){
        return $this->telefon;
    }
    public function gettelewizor(){
        return $this->telewizor;
    }
    public function getkablowka(){
        return $this->kablowka;
    }
    public function getpralka(){
        return $this->pralka;
    }
    public function getlodowka(){
        return $this->lodowka;
    }
    public function getprysznic(){
        return $this->prysznic;
    }
    public function getwanna(){
        return $this->wanna;
    }
    public function getbalkon(){
        return $this->balkon;
    }
    public function gettaras(){
        return $this->taras;
    }
    public function getparking(){
        return $this->parking;
    }
    public function getgaraz(){
        return $this->garaz;
    }


}