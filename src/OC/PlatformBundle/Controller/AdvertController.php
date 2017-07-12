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
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
public function indexAction()
  {
    // ...


    // Et modifiez le 2nd argument pour injecter notre liste
    return $this->render('::layout.html.twig');
  }
  public function addAction(Request $request)
  {
    // On crée un objet Advert
    $advert = new Advert();

    // J'ai raccourci cette partie, car c'est plus rapide à écrire !
    $form = $this->get('form.factory')->createBuilder(FormType::class, $advert)
       ->add('date',      DateType::class)
      ->add('firstName',     TextType::class)
      ->add('lastName',   TextareaType::class)
      ->add('company',    TextType::class)
      ->add('address1',    TextType::class)
      ->add('address2',    TextType::class)
      ->add('address3',    TextType::class)
      ->add('city',    TextType::class)
      ->add('state',    TextType::class)
      ->add('save',      SubmitType::class)
      ->getForm()
    ;

    // Si la requête est en POST
    if ($request->isMethod('POST')) {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
      $form->handleRequest($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('PlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }


public function viewAction($id)
  {

    return $this->render('PlatformBundle:Advert:view.html.twig');
  }

public function mobileAction()
  {


return $this->render('PlatformBundle:Advert:mobile.html.twig');
  }
}
