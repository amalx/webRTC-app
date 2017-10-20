<?php

namespace OC\UserBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class Admin extends AbstractAdmin
{
  protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text', array(
                'label' => 'Username'
            ))
            ->add('email', 'text', array(
                'label' => 'email'
            ))
            ->add('password', 'text', array(
                'label' => 'password'
            ))


        ;
    }


}
