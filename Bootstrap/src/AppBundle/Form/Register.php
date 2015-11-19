<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Register extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array(
        ));
        $builder->add('haslo', 'password', array(
        ));
        $builder->add('imie', 'text', array(
        ));
        $builder->add('nazwisko', 'text', array(
        ));
        $builder->add('dataurodzenia', 'birthday', array(
        ));
        $builder->add('telefon', 'number', array(
        ));
    }


    public function getName()
    {
        return 'app_bundle_register';
    }
}
