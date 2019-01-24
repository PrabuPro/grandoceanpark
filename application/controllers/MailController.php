<?php
defined ('BASEPATH') OR exit('No Direct access allowed');

class MailController extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function send(){
        //Load php mailer library
        $this->load->library('phpmailer_lib');

        //Mailer object
        $mail = $this->phpmailer_lib->load();

        //SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'prabuddha.proart@gmail.com';
        $mail->Password = 'wwe619@proart';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        $mail->setFrom('it@sunwayholidays.com', 'SunwayHolidays');
        $mail->addReplyTo('it@sunwayholidays.com', 'SunwayHolidays');

        //Add a recipient
        $mail->addAddress('it@sunwayholidays.com');

        //Email subject
        $mail->isHTML(true);
        
        //Mail content
        $mailContent = 'This is the test';
        $mail->Body = $mailContent;

        if(!$mail->send()){
            echo 'Message no been sent';
            echo 'Error' . $mail->ErrorInfo;
        } else {
            echo 'Message sent';
        }
    }

}


?>