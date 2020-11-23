<?php

namespace Eshop\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eshop\ShopBundle\Entity\StaticPage;
use Eshop\ShopBundle\Entity\Contact;
/**
 * StaticPage controller.
 *
 * @Route("/Contact")
 */
class ContactController extends Controller
{
     

    /**
     * Displays a form to create a new Contact entity.
     *
     * @Route("/", name="Contact_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request)
    {
        $Contact = new Contact();
        $form = $this->createForm('Eshop\ShopBundle\Form\Type\ContactType', $Contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Contact);
            $em->flush();

            return $this->redirectToRoute('Contact_new');
        }

        return ['entity' => $Contact,
                'form' => $form->createView()
        ];
    }

     
}
