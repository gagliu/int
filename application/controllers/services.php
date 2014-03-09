<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index() {
        $this->load->view("error_404.php");
       /*
        $data["tab"] = "inicio";
        $data["css"] = array("css/services");
        $data["js"] = array("js/services");
        $this->load->view('include/header', $data);
        $this->load->view('services_view');
        $this->load->view('include/footer');
        *
         */
        
    }

}
