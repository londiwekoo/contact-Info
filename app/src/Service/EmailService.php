<?php


namespace App\Service;


use App\Entity\ContactInfo;


class EmailService
{

    private $mailer;
    private $templating;
    public function __construct(\Swift_Mailer $mailer, \Twig\Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;

    }

    public function sendContactInfo(ContactInfo $contactInfo){
        $this->send(
            $contactInfo->getEmailAddress(),
            'Thank you for registering.',
            $this->templating->render(
            'email/send_contact_email.htm.twig',
            ['firstname' => $contactInfo->getFirstname()]
        ));
    }

    public function sendToAdmin(ContactInfo $contactInfo){
        $this->send('devLondiwe@gmail.com',
            'Thank you for registering.',
            $this->templating->render(
            'email/send_admin_email.htm.twig',
            [
                'firstname' => $contactInfo->getFirstname(),
                'lastname' => $contactInfo->getLastname(),
                'emailAddress' => $contactInfo->getEmailAddress(),
                'phoneNumber' => $contactInfo->getPhoneNumber()
            ]
        ));
    }

    /**
     * @param $toAddress
     * @param $subject
     * @param $emailBody
     */
    public function send($toAddress, $subject, $emailBody){
        $message = (new \Swift_Message($subject))
            ->setFrom('devlondiwe@gmail.com')
            ->setTo($toAddress())
            ->setContentType("text/html")
            ->setBody($emailBody
                );
        $this->mailer->send($message);

    }

}
