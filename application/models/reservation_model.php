<?php 

class Reservation_model extends CI_Model {

    public function bookTable($data){
       
        $this->db->where('date', $data['date']);
        $this->db->where('time', $data['time']);
        $result = $this->db->get('reservations');

        if($result->num_rows() >= 2) {
            return false;
        } else{
            $this->session->set_userdata($data);
            $this->db->insert('reservations',$data);
            return $this->db->insert_id();
        }
    
    }

}


?>