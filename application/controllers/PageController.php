<?php 

class PageController extends CI_Controller {

    public function index(){
        $data['site_view'] = 'home_view';
		$this->load->view('main/main_view', $data);
    }

    public function aboutUs(){
        $data['site_view'] = 'about_view';
        $this->load->view('main/main_view', $data);
    }
    
    public function weddings(){
        $data['site_view'] = 'weddings_view';
        $this->load->view('main/main_view', $data);
    }

    public function reservations(){
        $data['site_view'] = 'reservation_view';
        $this->load->view('main/main_view', $data);
    }

    public function contacts(){
        $data['site_view'] = 'contact_view';
        $this->load->view('main/main_view', $data);
    }
}


?>