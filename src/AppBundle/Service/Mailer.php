<?php

namespace AppBundle\Service;

use Swift_Mailer;
use Twig_Environment;

/**
 * Class Mailer
 * @package AppBundle\Service
 */
class Mailer{

    /**
     * @var Swift_Mailer
     */
    private $mailer;
    /**
     * @var Twig_Environment
     */
    private $templating;




    /**
     * Mailer constructor.
     * @param Swift_Mailer $mailer
     * @param Twig_Environment $templating
     */
    public function __construct(Swift_Mailer $mailer, Twig_Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }


    /**
     * @param $dest1
     * @param null $dest2
     * @param string $mess_dest1
     * @param string|null $mess_dest2
     */
    public function sendMail($dest1 ,string $subject){

            $mail = \Swift_Message::newInstance();
            $view = $this->templating->render('email/contact.html.twig');
            $mail->setSubject($subject);
            $mail->setFrom('reservations@flyaround.com');
            $mail->setTo($dest1);
            $mail->setBody($view,'text/html');
            $this->mailer->send($mail);
    }



}
