<?php

namespace OC\UserBundle\Controller;

use OC\UserBundle\Entity\Messages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Message controller.
 *
 * @Route("messages")
 */
class MessagesController extends Controller
{
    /**
     * Lists all message entities.
     *
     * @Route("/", name="messages_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $messages = $em->getRepository('OCUserBundle:Messages')->findAll();

        return $this->render('messages/index.html.twig', array(
            'messages' => $messages,
        ));
    }

    /**
     * Creates a new message entity.
     *
     * @Route("/new", name="messages_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $message = new Messages();
        $form = $this->createForm('OC\UserBundle\Form\MessagesType', $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('messages_show', array('id' => $message->getId()));
        }

        return $this->render('messages/new.html.twig', array(
            'message' => $message,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a message entity.
     *
     * @Route("/{id}", name="messages_show")
     * @Method("GET")
     */
    public function showAction(Messages $message)
    {
        $deleteForm = $this->createDeleteForm($message);

        return $this->render('messages/show.html.twig', array(
            'message' => $message,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing message entity.
     *
     * @Route("/{id}/edit", name="messages_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Messages $message, FileUploader $fileUploader)
    {
        $deleteForm = $this->createDeleteForm($message);
        $editForm = $this->createForm('OC\UserBundle\Form\MessagesType', $message);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
        $file = $product->getFile();
        $fileName = $fileUploader->upload($file);

        $message->setFile($fileName);
        $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('messages_edit', array('id' => $message->getId()));
        }

        return $this->render('messages/edit.html.twig', array(
            'message' => $message,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a message entity.
     *
     * @Route("/{id}", name="messages_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Messages $message)
    {
        $form = $this->createDeleteForm($message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
        }

        return $this->redirectToRoute('messages_index');
    }

    /**
     * Creates a form to delete a message entity.
     *
     * @param Messages $message The message entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Messages $message)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('messages_delete', array('id' => $message->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
