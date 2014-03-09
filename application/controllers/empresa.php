<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresa extends CI_Controller {

    public function index() {
          $this->load->view("error_404.php");
          /*
        $data["tab"] = "inicio";
        $data["css"] = array("css/empresa");
        $data["js"] = array("js/empresa");
        $this->load->view('include/header', $data);
        $this->load->view('empresa_view');
        $this->load->view('include/footer');
            */
           
    }

}
