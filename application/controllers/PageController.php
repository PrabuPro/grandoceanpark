<?php 

class PageController extends CI_Controller {

    public function index(){
        $data['site_view'] = 'home_view';
        $data['site_title'] = 'Home';
		$this->load->view('main/main_view', $data);
    }

    public function aboutUs(){
        $data['site_view'] = 'about_view';
        $data['site_title'] = 'About Us';
        $this->load->view('main/main_view', $data);
    }
    
    public function weddings(){
        $data['site_view'] = 'weddings_view';
        $data['site_title'] = 'Weddings & Parties';
        $this->load->view('main/main_view', $data);
    }

    public function reservations(){
        $data['site_view'] = 'reservation_view';
        $data['site_title'] = 'Reservations';
        $this->load->view('main/main_view', $data);
    }

    public function contacts(){
        $data['site_view'] = 'contact_view';
        $data['site_title'] = 'Contact Us';
        $this->load->view('main/main_view', $data);
    }
}


?>