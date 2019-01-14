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
    
            echo validation_errors();
            
        } else {
            
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $date = $this->input->post('date');
            $time = $this->input->post('time');
            $people = $this->input->post('people');
            
            if($this->session->has_userdata('name')) {
                if($this->session->userdata('phoneNo') == $phone && $this->session->userdata('date') == $date && $this->session->userdata('time') == $time && $this->session->userdata('name') == $name && $this->session->userdata('email') == $email && $this->session->userdata('people') == $people ){
                    echo "You have entered the same value again";
                } else {
                    $result =  $this->reservation_model->bookTable($name,$phone,$email,$date,$time,$people);
                    echo "Booking Successful 1";
                }
            } else {
                $result =  $this->reservation_model->bookTable($name,$phone,$email,$date,$time,$people);
                 if($result == 1){
                    echo "Booking Successful 2";
                } 
            
            }
            
           
        }
    
    }


}

?>