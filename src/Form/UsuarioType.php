<?php

namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidopaterno')
            ->add('apellidomaterno')
            //->add('fechanacimiento')
            ->add('correo1')
            ->add('correo2')
            ->add('correo3')
            ->add('telefono1')
            ->add('telefono2')
            ->add('telefono3')
            ->add('fechanacimiento',DateType::Class, array(
                'widget' => 'choice',
                'years' => range(date('Y')-65, date('Y')-18),
                'months' => range(1, 12),
                'days' => range(1, 31),
            ))
            ->add('areageneral', ChoiceType::class, [
                'choices'  => [
                    '(Ninguno)' => null,
                    'Administración' => 1,
                    'Operaciones' => 2,
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
