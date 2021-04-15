<?php



namespace App\Form\Type;

use App\Entity\ContactInfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;



class ContactInfoType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, array('label'=> 'firstname', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('lastname', TextType::class, array('label'=> 'lastname', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('emailAddress', TextType::class, array('label'=> 'emailAddress', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('phoneNumber', TextType::class, array('label'=> 'phoneNumber', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('message', TextType::class, array('label'=> 'message', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'save', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:15px')))
            ->getForm();
    }
}
