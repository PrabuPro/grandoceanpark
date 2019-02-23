<?php 

class Reservation extends CI_Controller{

    public function makeReservation(){

        // echo 'hi from makeReservations';
        
        $this->form_validation->set_rules('name','Name', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[13]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|max_length[12]');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('people', 'People', 'trim|required|max_length[1]');

        if($this->form_validation->run() == FALSE){
    
            echo validation_errors();
            
        } else {

            $today = date("Y-m-d"); 
            

            $databaseData = array(
                'name' => htmlspecialchars($this->input->post('name')),
                'phoneNo' => htmlspecialchars($this->input->post('phone')),
                'email' => htmlspecialchars($this->input->post('email')),
                'date' => htmlspecialchars($this->input->post('date')),
                'time' => htmlspecialchars($this->input->post('time')),
                'people' => htmlspecialchars($this->input->post('people')),
                'dateOfBooking' => $today
            );


            //check date vs today
            if($databaseData['date'] < $today){
                $message = "Selected date is not accurate. Please check the date";
                echo $message;
            } else {
                //check wheather have session initialized
                if($this->session->has_userdata('name')) {
                    //Check the session wheather it is same
                    if($this->session->userdata('phoneNo') == $databaseData['phoneNo'] && $this->session->userdata('date') == $databaseData['date'] && $this->session->userdata('time') == $databaseData['time'] && $this->session->userdata('name') == $databaseData['name'] && $this->session->userdata('email') == $databaseData['email'] && $this->session->userdata('people') == $databaseData['people'] ){
                        $message = "You have entered the same values again";
                    } else {
                        //send to database
                        $result =  $this->reservation_model->bookTable($databaseData);
                        if($result == false){
                            $message =  "Sorry! All the Tables booked at the time";
                        } else {
                            $subject = "Grand Oceanpark - Table Bookings";
                            $title = "Table Bookings";
                            $this->sendMail($databaseData,$result);
                            $message =  "Booking Successful";
                    }
                }
            } else {
                //if no session go to database
                $result =  $this->reservation_model->bookTable($databaseData);
                if($result == false){
                        $message =  "Sorry! All the Tables booked at the time";
                } else {
                    $subject = "Grand Oceanpark - Table Bookings";
                    $title = "Table Bookings";
                    $this->sendMail($databaseData,$result);
                    $message =  "Booking Successful";
                } 
            
            }

            echo $message;
            }
           
        }
    
    }


    public function bookHall(){

        // echo 'hi from makeReservations';
        
        $this->form_validation->set_rules('name','Name', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[13]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('date', 'Date', 'trim|required|max_length[12]');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('hall_type', 'Hall Type', 'trim|required|max_length[15]');

        if($this->form_validation->run() == FALSE){
    
            echo validation_errors();
            
        } else {

            $today = date("Y-m-d");
            

            $databaseData = array(
                'name' => htmlspecialchars($this->input->post('name')),
                'phoneNo' => htmlspecialchars($this->input->post('phone')),
                'email' => htmlspecialchars($this->input->post('email')),
                'date' => htmlspecialchars($this->input->post('date')),
                'time' => htmlspecialchars($this->input->post('time')),
                'hall_type' => htmlspecialchars($this->input->post('hall_type')),
                'dateOfBooking' => $today
            );


            //check date vs today
            if($databaseData['date'] < $today){
                $message = "Selected date is not accurate. Please check the date";
                echo $message;
            } else {
                //check wheather have session initialized
                if($this->session->has_userdata('name')) {
                    //Check the session wheather it is same
                    if($this->session->userdata('phone') == $databaseData['phoneNo'] && $this->session->userdata('date') == $databaseData['date'] && $this->session->userdata('time') == $databaseData['time'] && $this->session->userdata('name') == $databaseData['name'] && $this->session->userdata('email') == $databaseData['email'] && $this->session->userdata('hall_type') == $databaseData['hall_type'] ){
                        $message = "You have entered the same values again";
                    } else {
                        //send to database
                        $result =  $this->reservation_model->bookHall($databaseData);
                        if($result == false){
                            $message =  "Sorry! All the Tables booked at the time";
                        } else {
                            $subject = "Grand Oceanpark - Hall Bookings";
                            $title = "Hall Bookings";
                            $this->sendMail($databaseData,$result,$subject,$title);
                            $message =  "Booking Successful";
                    }
                }
            } else {
                //if no session go to database
                $result =  $this->reservation_model->bookHall($databaseData);
                if($result == false){
                        $message =  "Sorry! All the Tables booked at the time";
                } else {
                    $subject = "Grand Oceanpark - Hall Bookings";
                    $title = "Hall Bookings";
                    $this->sendMail($databaseData,$result);
                    $message =  "Booking Successful";
                } 
            }
            echo $message;
            }
           
        }
    
    }

    public function sendMail($data,$id,$subject,$title){
        $this->load->helper('email_helper');

        if(array_key_exists('people', $data)){
            $dataHolder = $data['people'];
            $bookingNumberLetter = 'T';
            
        } else {
            $dataHolder = $data['hall_type'];
            $bookingNumberLetter = 'H';
            
        }

        $emailAddress = 'it@sunwayholidays.lk';
        $name = 'Prabuddha';
        $content = '<h1>Grand Oceanpark Restaurent - '. $title .'</h1>';
        $content .= '<h2>Booking Number - GOP'.$bookingNumberLetter.'B0'. $id . '</h2>';
        $content .= '<h3>This mail is generated with the information of the booking iteslf</h3><br>';
        $content .= '<p>Name - '.$data['name'] . '</p>';
        $content .= '<p>Email - '.$data['email'] . '</p>';
        $content .= '<p>Contact Number - '.$data['phoneNo'] . '</p>';
        $content .= '<p>Date - '.$data['date'] . '</p>';
        $content .= '<p>Time - '.$data['time'] . '</p>';
        $content .= '<p>Number of People - '. $dataHolder . '</p>';
        $content .= '<p>Date of Booked - '.$data['dateOfBooking'] . '</p>';
        


        sendEmail($emailAddress,$name,$subject,$content);

    }
    


}

?>