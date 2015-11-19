<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Login extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('login', 'text', array(
            'label' => false
        ))
            ->add('password', 'password', array(
                'label' => false
            ))
            ->add('zapamietajmnie', 'checkbox', array(
                'label' => 'Zapamietaj mnie',
                'label_attr' => array(
                    'class' => 'checkbox-inline'
                )

            ));
    }

    public function getName()
    {
        return 'app_bundle_login';
    }
}
