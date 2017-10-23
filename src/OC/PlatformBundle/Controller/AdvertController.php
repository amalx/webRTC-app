<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Finder\Exception\AccessDeniedException;


class AdvertController extends Controller
{



public function callAction(Request $request)
{
  $caller_number = $request->request->get('caller_number');
  $repository = $this->getDoctrine()->getManager()->getRepository('PlatformBundle:Advert');

  $advert = $repository->findOneBy(array('callerId' => $caller_number));
  if ($advert) {
    $firstName = $advert->getFirstName();
    $lastName = $advert->getLastName();
  } else {
    $firstName= "Not found";
    $lastName= "Not found";
  }

  $response = new JsonResponse();
  return $response->setData(array('firstName' => $firstName , 'lastName' => $lastName));
}

public function scriptAction()
  {

    return $this->render('PlatformBundle:Advert:script.html.twig');
  }

public function indexAction()
  {

    return $this->render('PlatformBundle:Advert:index.html.twig');
  }


public function addAction(Request $request)

  {


  // On crée un objet Advert
  $advert = new Advert();

  // J'ai raccourci cette partie, car c'est plus rapide à écrire !
  $form = $this->get('form.factory')->createBuilder(FormType::class, $advert)
     ->add('date',      DateType::class,   array(
        'required' => false,
        'widget' => 'single_text',
        'format' => 'yyyy-MM-dd'
    ))
    ->add('firstName',     TextType::class)
    ->add('lastName',   TextType::class)
    ->add('company',    TextType::class,   array(
       'required' => false
   ))
    ->add('address1',    TextType::class ,   array(
       'required' => false
   ))
    ->add('address2',    TextType::class ,   array(
       'required' => false
   ))
    ->add('address3',    TextType::class,   array(
       'required' => false
   ))
    ->add('city',    TextType::class,   array(
       'required' => false
   ))
    ->add('state',    TextType::class,   array(
       'required' => false
   ))
    ->add('province',    TextType::class,   array(
       'required' => false
   ))
    ->add('phone',    TextType::class,   array(
       'required' => false
   ))
    ->add('comments',    TextareaType::class,   array(
       'required' => false
   ))
    ->add('birthdate',    DateType::class,   array(
       'required' => false,
       'widget' => 'single_text',
       'format' => 'yyyy-MM-dd'
   ))
    ->add('postdate',   DateType::class,   array(
       'required' => false,
       'widget' => 'single_text',
       'format' => 'yyyy-MM-dd'
   ))
->add('zip',    TextType::class,   array(
   'required' => false
))
->add('email',    TextType::class,   array(
   'required' => false
))
->add('phone2',    TextType::class,   array(
   'required' => false
))
->add('countryCode',    TextType::class,   array(
   'required' => false
))
->add('gender',    TextType::class,   array(
   'required' => false
))
->add('vendorCode',    TextType::class,   array(
   'required' => false
))
->add('custom2',    TextType::class,   array(
   'required' => false ,

))
->add('zip1',    TextType::class,   array(
   'required' => false
))
    ->add('custom1',    TextType::class,   array(
       'required' => false
   ))
->add('NameOnCard',    TextType::class,   array(
   'required' => false
))
->add('BillingAddress',    TextType::class,   array(
   'required' => false
))
->add('state1',    TextType::class,   array(
   'required' => false
))
->add('ccType',    TextType::class,   array(
   'required' => false
))
->add('ccNumber',    TextType::class,   array(
   'required' => false
))
->add('cvvCode',    TextType::class,   array(
   'required' => false
))
->add('city1',    TextType::class,   array(
   'required' => false
))
->add('callerId',    TextType::class  )
    ->add('save',      SubmitType::class)
    ->getForm();

  if ($request->isMethod('POST')) {
    $form->handleRequest($request);

    if ($form->isValid()) {
      // On enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();

      $session = $request->getSession();

          $session->getFlashBag()->add('info', 'Annonce bien enregistrée');



      return $this->render('PlatformBundle:Advert:add.html.twig', array(
        'form' => $form->createView(),
      ));
    }
  }
  return $this->render('PlatformBundle:Advert:add.html.twig', array(
    'form' => $form->createView(),
  ));

}



public function viewAction()
  {
    $listadvert = $this->getDoctrine()
    ->getRepository('PlatformBundle:Advert')
    ->findAll();

    return $this->render('PlatformBundle:Advert:view.html.twig', array(
            'listadvert' =>$listadvert,
    ));

  }
  public function viewadAction($id)
    {
      $advert = $this->getDoctrine()
        ->getRepository('PlatformBundle:Advert')
        ->find($id);

    if (!$advert) {
        throw $this->createNotFoundException(
            'No advert found for id '.$id
        );
    }

      return $this->render('PlatformBundle:Advert:viewad.html.twig', array(
              'advert' =>$advert,
      ));

    }

public function mobileAction(Request $request)
  {
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
          // Sinon on déclenche une exception « Accès interdit »
          throw new AccessDeniedException('Accès limité aux auteurs.');
        }
return $this->render('PlatformBundle:Advert:mobile.html.twig');
  }
}
