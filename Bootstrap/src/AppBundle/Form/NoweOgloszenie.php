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
                    'choices'  => array('mp' => 'Miejsce w pokoju', 'p' => 'Pokój', 'k' => 'Kawalerka'),
                    'required' => false,
                ))
                ->add('typbudynku', 'choice', array(
                    'choices'  => array( 'b' => 'Blok', 'k' => 'Kamienica', 'jr' => 'Jednorodzinny'),
                    'required' => false,
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
                    'label' => 'TV-kablowa',
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
                    'label' => 'Lodówka',
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
                    'label' => 'Garaż',
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
                    'label' => 'Mężczyźni',
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('palacy', 'checkbox', array(
                    'label' => 'Palący',
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
                    'label' => 'Pracujący',
                    'label_attr' => array(
                        'class' => 'checkbox-inline'
                    )
                ))
                ->add('dodatkoweinformacje', 'textarea', array(

                ));


    }

    public function getName()
    {
        return 'app_bundle_nowe_ogloszenie';
    }
}
