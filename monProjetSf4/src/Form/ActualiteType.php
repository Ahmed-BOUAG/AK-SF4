<?php

namespace App\Form;

use App\Entity\Actualite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class ActualiteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('message', CKEditorType::class, array(
                    'config' => array(
                        'uiColor' => '#ffffff',
                    ),
                    'filebrowsers' => array(
                        'VideoUpload',
                        'VideoBrowse'),
        ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Actualite::class,
        ]);
    }

}
