<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('assets');
    }

    public function index()
    {
        $data['css'] = array(
            base_url()."assets/css/style.css",
            base_url()."assets/css/flaticon.css",
            base_url()."assets/css/lightbox.css",
            base_url()."assets/js/jquery-ui.css");
        $data['js'] = array(
            base_url()."assets/js/jquery-ui.js",
            base_url()."assets/js/jquery-2.1.1.min.js",
            base_url()."assets/js/lightbox.min.js",
            base_url()."assets/js/app.js");
        $data['title'] = 'Accueil | FT portfolio';
        $this->load->view('accueil',$data);
    }

    public function index2(){
        $data['css'] = array(
            base_url()."assets/css/style2.css");
        $data['js'] = array(
            base_url()."assets/js/jquery-2.1.1.min.js",
            base_url()."assets/js/script.js");
        $data['title'] = 'Bienvenue !';
        $this->load->view('accueil2',$data);
    }

    public function test(){
        echo 'test';
    }
}
