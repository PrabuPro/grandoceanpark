<?php 

class Reservation extends CI_Controller{

    public function makeReservation(){

        // echo 'hi from makeReservations';
        
        $this->form_validation->set_rules('name','Name', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|max_length[12]');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('people', 'People', 'trim|required|max_length[1]');

        if($this->form_validation->run() == FALSE){
            
            // $data = false;
            // $this->session->set_flashdata($data);
            echo validation_errors();
            
        } else {
            // $data = true;
            // $this->session->set_flashdata($data);
            echo "Booking Successful";
        }
    
    }


}

?>