<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Search extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('search', 'text', array(
            'label' => ' '
            ))
            ->add('kategoria', 'choice', array(
                'choices'  => array('k' => 'Kawalerka', 'p' => 'Pokoj', 'mp' => 'Miejsce w Pokoju'),
                'required' => false,
                'label' => 'Kategoria: ',
            ))
            ->add('cenaod', 'number', array(
                'label' => false,
                'required' => false,
            ))
            ->add('cenado', 'number', array(
                'label' => false,
                'required' => false
            ))
            ->add('metraz', 'number', array(
                'label' => false,
                'required' => false,
            ));
    }


    public function getName()
    {
        return 'app_bundle_search';
    }
}
