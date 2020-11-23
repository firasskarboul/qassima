<?php

namespace Eshop\AdminBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eshop\ShopBundle\Entity\Slide;
use Eshop\ShopBundle\Entity\Ads;

/**
 * Ads controller.
 *
 * @Route("/admin/Ads")
 */
class AdsController extends Controller
{
    /**
     * Lists all Ads entities.
     *
     * @Route("/", name="admin_Ads")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ShopBundle:Ads')->findBy([], ['slideOrder' => 'ASC']);

        return ['entities' => $entities];
    }

    /**
     * Displays a form to create a new Ads entity.
     *
     * @Route("/new", name="admin_Ads_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request)
    {
        $ads= new Ads();
        $em = $this->getDoctrine()->getManager();
        $productRepository = $em->getRepository('ShopBundle:Product')->findAll();
        $form = $this->createForm('Eshop\ShopBundle\Form\Type\AdsType', $ads);
        $form->add('file', FileType::class, ['required' => true]); //reinit field to make file required
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             if ($form->get('file')->getData() === null){
                 $form->get('file')->addError(new FormError('file is required'));

                 return ['entity' => $ads,'product' =>$productRepository,
                        'form' => $form->createView()
                 ];
             };

            $em = $this->getDoctrine()->getManager();
            $em->persist($ads);
            $em->flush();

            return $this->redirectToRoute('admin_Ads_show', ['id' => $ads->getId()]);
        }

        return ['entity' => $ads,'product' =>$productRepository,
                'form' => $form->createView()
        ];
    }

    /**
     * Finds and displays a Ads entity.
     *
     * @Route("/{id}", name="admin_Ads_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Ads $ads)
    {
        $deleteForm = $this->createDeleteForm($ads);

        return ['entity' => $ads,
                'delete_form' => $deleteForm->createView()
        ];
    }

    /**
     * Displays a form to edit an existing Ads entity.
     *
     * @Route("/{id}/edit", name="admin_Ads_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Ads $ads)
    {
        $deleteForm = $this->createDeleteForm($ads);
        $editForm = $this->createForm('Eshop\ShopBundle\Form\Type\AdsType', $ads);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $productRepository = $em->getRepository('ShopBundle:Product')->findAll();
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($editForm->get('file')->getData() !== null) { // if any file was updated
                $file = $editForm->get('file')->getData();
                // $ads->removeUpload(); // remove old file, see this at the bottom
                $ads->setPath(($file->getClientOriginalName())); // set Image Path 
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($ads);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Your changes were saved!'
            );

            return $this->redirectToRoute('admin_Ads_edit', ['id' => $ads->getId()]);
        }

        return ['entity' => $ads,
                'edit_form' => $editForm->createView(),'product'=>$productRepository,
                'delete_form' => $deleteForm->createView()
        ];
    }

    /**
     * Deletes a Ads entity.
     *
     * @Route("/{id}", name="admin_Ads_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ads $ads)
    {
        $form = $this->createDeleteForm($ads);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ads);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_Ads'));
    }

    /**
     * Creates a form to delete a Ads entity by id.
     *
     * @param Ads $Ads The Ads entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ads $ads)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_Ads_delete', ['id' => $ads->getId()]))
            ->setMethod('DELETE')
            ->getForm();
    }
}
