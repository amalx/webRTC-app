<?php

namespace OC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date')
        ->add('firstName', array('attr' => array('class' => 'firstName', 'value' => '')))
        ->add('lastName', array('attr' => array('class' => 'lastName')))
        ->add('company', array('attr' => array('class' => 'company')))
        ->add('address2', array('attr' => array('class' => 'addr2')))
        ->add('address3', array('attr' => array('class' => 'addr3')))
        ->add('city', array('attr' => array('class' => 'city')))
        ->add('state', array('attr' => array('class' => 'state')))
        ->add('province', array('attr' => array('class' => 'prov')))
        ->add('phone', array('attr' => array('class' => 'phone')))
        ->add('comments', array('attr' => array('class' => 'comments')))
        ->add('birthdate', array('attr' => array('class' => 'birthdate')))
        ->add('postdate', array('attr' => array('class' => 'postdate')))
        ->add('custom1', array('attr' => array('class' => 'custom1')))
        ->add('custom2', array('attr' => array('class' => 'custom2')))
        ->add('zip1', array('attr' => array('class' => 'zip1')))
        ->add('email', array('attr' => array('class' => 'email')))
        ->add('phone2', array('attr' => array('class' => 'phone2')))
        ->add('gender', array('attr' => array('class' => 'gender')))
        >add('vendorCode', array('attr' => array('class' => 'vendorCode')))
        ->add('countryCode', array('attr' => array('class' => 'countryCode')))
        ->add('custom2', array('attr' => array('class' => 'custom2')))
        ->add('NameOnCard', array('attr' => array('class' => 'NameOnCard')))
        ->add('BillingAddress', array('attr' => array('class' => 'BillingAddress')))
        ->add('state1', array('attr' => array('class' => 'state1')))
        ->add('ccType', array('attr' => array('class' => 'ccType')))
        ->add('ccNumber', array('attr' => array('class' => 'ccNumber')))
        ->add('cvvCode', array('attr' => array('class' => 'cvvCode')))
        ->add('city1', array('attr' => array('class' => 'city1')))
        ->add('callerId', array('attr' => array('class' => 'callerId')));


    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults(array(
          'always_empty' => true,
          
      ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
         return ChoiceType::class;
    }


}
