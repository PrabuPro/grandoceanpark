<?php 

class Reservation_model extends CI_Model {

    public function bookTable($data){
       
        $this->db->where('date', $data['date']);
        $this->db->where('time', $data['time']);
        $result = $this->db->get('reservations');

        if($result->num_rows() >= 2) {
            return false;
        } else{
            $this->session->sess_expiration = '300';
            $this->session->set_userdata($data);
            $this->db->insert('reservations',$data);
            return $this->db->insert_id();
        }
    
    }
    public function bookHall($data){
       
        $this->db->where('date', $data['date']);
        $this->db->where('time', $data['time']);
        $result = $this->db->get('reservations');

        if($result->num_rows() >= 2) {
            return false;
        } else{
            $this->session->sess_expiration = '300';
            $this->session->set_userdata($data);
            $this->db->insert('book_halls',$data);
            return $this->db->insert_id();
        }
    
    }

}


?>