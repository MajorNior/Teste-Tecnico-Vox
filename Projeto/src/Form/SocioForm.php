<?php

namespace App\Form;

use App\Entity\Empresa;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SocioForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeSocio', TextType::class, ['label' => 'Nome do sócio a ser cadastrado'])
            ->add('nomeEmpresa', EntityType::class, [
                'class' => Empresa::class,
                'choice_label' => 'nomeEmpresa',
                'label' => 'Empresa',
                'multiple' => true,
                'by_reference' => false,
            ])
            ->add('Salvar', SubmitType::class);
    }
}
