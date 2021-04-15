<?php

namespace App\Controller;


use Symfony\Component\Form\Forms;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Service\EmailService;
use App\Entity\ContactInfo;
use App\Form\Type\ContactInfoType;

class ContactInfoController extends AbstractController
{
    /**
     * @Route("/contact-form", name="contact_form", methods={"POST","GET"})
     * @param Request $request
     * @param EmailService $emailService
     * @return Response
     */
    public function createContact(Request $request, EmailService $emailService): Response
    {
        $contactInfo = new ContactInfo();

        $form = $this->createForm(ContactInfoType::class, $contactInfo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $contactInfo = $form->getData();

            $save = $this->getDoctrine()->getManager();
            $save->persist($contactInfo);
            $save->flush();

            $emailService->sendContactInfo($contactInfo);
            return $this->redirectToRoute('success_contact',['id' => $contactInfo->getId()]);

        }

        return $this->render('page/new_contact.html.twig', [
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("/success-contact/{id}", name="success_contact", methods={"GET"})
     * @return Response
     */
    public function successContact($id){
        $em = $this->getDoctrine()->getManager();
        $contactInfo = $em->getRepository(ContactInfo::class)->find($id);
        if(is_object($contactInfo)){
            return $this->render('page/success_contact.html.twig',[
                'firstname' =>$contactInfo->getFirstname(),
            ]);
        }else{
            return new Response("Invalid Id");
        }


    }
}
