<?php

namespace ORMBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ORMBundle\Entity\Sites;
use ORMBundle\Form\SitesType;

/**
 * Sites controller.
 *
 */
class SitesController extends Controller
{
    /**
     * Lists all Sites entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sites = $em->getRepository('ORMBundle:Sites')->findAll();

        return $this->render('sites/index.html.twig', array(
            'sites' => $sites,
        ));
    }

    /**
     * Creates a new Sites entity.
     *
     */
    public function newAction(Request $request)
    {
        $site = new Sites();
        $form = $this->createForm('ORMBundle\Form\SitesType', $site);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->flush();

            return $this->redirectToRoute('sites_show', array('id' => $site->getId()));
        }

        return $this->render('sites/new.html.twig', array(
            'site' => $site,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sites entity.
     *
     */
    public function showAction(Sites $site)
    {
        $deleteForm = $this->createDeleteForm($site);

        return $this->render('sites/show.html.twig', array(
            'site' => $site,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sites entity.
     *
     */
    public function editAction(Request $request, Sites $site)
    {
        $deleteForm = $this->createDeleteForm($site);
        $editForm = $this->createForm('ORMBundle\Form\SitesType', $site);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->flush();

            return $this->redirectToRoute('sites_edit', array('id' => $site->getId()));
        }

        return $this->render('sites/edit.html.twig', array(
            'site' => $site,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sites entity.
     *
     */
    public function deleteAction(Request $request, Sites $site)
    {
        $form = $this->createDeleteForm($site);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($site);
            $em->flush();
        }

        return $this->redirectToRoute('sites_index');
    }

    /**
     * Creates a form to delete a Sites entity.
     *
     * @param Sites $site The Sites entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sites $site)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sites_delete', array('id' => $site->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
