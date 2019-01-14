<?php 

class Reservation_model extends CI_Model {

    public function bookTable($name,$phone,$email,$date,$time,$people){
        $data_bookTable = array(
            'name' => $name,
            'phoneNo' => $phone,
            'email' => $email,
            'date' => $date,
            'time' => $time,
            'people' => $people
        );

        // $this->db->where('phone', $name);
        // $this->db->where('date', $date);
        // $this->db->where('time', $time);
        // $result = $this->db->get('reservations');

        // if($result->num_rows()==1){
        //     return 
        // } else{
            
            $this->session->set_userdata($data_bookTable);
            return $this->db->insert('reservations',$data_bookTable);
        // }

        

    
    }

}


?>