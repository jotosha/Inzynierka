<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoweOgloszenie extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('wolneod', 'text', array(
                        'label' => '',
                ))
                ->add('miasto', 'text', array(

                ))
                ->add('dzielnica', 'text', array(

                ))
                ->add('ulica', 'text', array(

                ))
                ->add('typstancji', 'choice', array(
                    'choices'  => array('k' => 'Kawalerka', 'p' => 'Pokoj', 'mp' => 'Miejsce w Pokoju'),
                ))
                ->add('typbudynku', 'choice', array(
                    'choices'  => array('k' => 'Kamienica', 'b' => 'Blok', 'jr' => 'Jednorodzinny'),
                ))
                ->add('liczbapokoi', 'number', array(

                ))
                ->add('maksliczbaosob', 'number', array(

                ))
                ->add('metraz', 'number', array(
                ))
                ->add('internet', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('telefon', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('telewizor', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('kablowka', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('pralka', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('lodowka', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('prysznic', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('wanna', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('balkon', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('taras', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('parking', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('garaz', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                /*
                        OPLATY
                 */
                ->add('cenazamiesiac', 'number', array(

                ))
                ->add('dodatkoweoplaty', 'number', array(

                ))
                ->add('kaucja', 'number', array(

                ))

                /*
                 PREFERENCJE
                 */

                ->add('kobiety', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('mezczyzni', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('palacy', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('studenci', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('pary', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('pracujacy', 'checkbox', array(
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('dodatkoweinformacje', 'textarea');


    }

    public function getName()
    {
        return 'app_bundle_nowe_ogloszenie';
    }
}
