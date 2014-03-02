<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class email extends CI_Controller {

    public function eviarEmail() {
        $subject = utf8_decode("Mensaje Trópico Internacioal");
        $message = "De: {$_POST["nombre"]} Mensaje:{$_POST["mensaje"]}";
        mail("luismec90@gmail.com", $subject, utf8_decode($message));
        redirect(base_url());
    }

}
