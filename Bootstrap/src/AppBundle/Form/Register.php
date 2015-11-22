<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Register extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imie', 'text', array(
        ))
            ->add('nazwisko', 'text', array(
                'label'=> false,
            ))
            ->add('nazwauzytkownika', 'text', array(
            ))
            ->add('email', 'email', array(
            ))
            ->add('haslo', 'password', array(
            ))
            ->add('telefon', 'number', array(
            ))
            ->add('akceptacja', 'checkbox', array(
                'label' => 'Akceptuje regulamin serwisu',
                'label_attr' => array(
                    'class' => 'checkbox-inline'
                )
            ))
            ->add('captcha', 'captcha', array(
                'label' => ' ',
                'width' => 200,
                'height' => 50,
                'length' => 6,
                'invalid_message' => 'The captcha code is invalid.'
            ));
    }


    public function getName()
    {
        return 'app_bundle_register';
    }
}
