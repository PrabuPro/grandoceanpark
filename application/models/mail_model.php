<?php

class Mail_model extends CI_Model{

    public function saveMails($data){
        $this->db->insert('emails',$data);
        return $this->db->insert_id();
    }

}


?>