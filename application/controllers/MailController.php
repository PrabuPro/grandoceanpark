<?php 

class MailController extends CI_Controller{

    public function makeMessage(){
        $this->form_validation->set_rules('name','Your Name', 'trim|required|max_length[30]');
        $this->form_validation->set_rules('email','Your Email', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('message','Your Message', 'trim|required|max_length[200]');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');


        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        } else {
            $today = date('Y-m-d');

            $databaseData = array(
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'date' => $today,
                'message' => htmlspecialchars($this->input->post('message'))
            );

            $id = $this->mail_model->saveMails($databaseData);

            if($id > 0){
                $this->sendMail($databaseData,$id);
                echo "Succeessfully send the Message!";
            } else {
                echo "Some Error was occurd! Please try again";
                
            }



        }

    }

      function validate_captcha() {
        $captcha = $this->input->post('g-recaptcha-response');
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfrKpMUAAAAABlJuvsQNm1tmSFKgSDRbyCv6eK9&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function sendMail($data, $id){
        $this->load->helper('email_helper');

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $subject = 'Grand Oceanpark Messages';
        $content = '<h1>Grand Oceanpark Restaurent Messages </h1>';
        $content = '<h2>Message - GOPMG0'. $id . '</h2>';
        $content .= '<h3>This email contain the Message send by a customer</h3><br>';
        $content .= '<p>Customer Name - '.$data['name'] . '</p>';
        $content .= '<p>Customer Email - '.$data['email'] . '</p>';
        $content .= '<p>Message - '.$data['message'] . '</p>';
        $content .= '<p>Date of sending mail - '.$data['date'] . '</p>';
        
        sendEmail($emailAddress,$name,$subject,$content);
    }



}




?>