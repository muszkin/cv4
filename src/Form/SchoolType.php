<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add("name",TextType::class,[])
      ->add("description",TextType::class,[])
      ->add("title",TextType::class,[])
      ->add("start_date",DateType::class,[
        "widget" => "single_text",
      ])
      ->add("end_date",DateType::class,[
        "widget" => "single_text"
      ])
      ;


  }

  public function configureOptions(OptionsResolver $resolver)
  {

    $resolver->setDefaults([
      "data_class" => null
    ]);
  }
}