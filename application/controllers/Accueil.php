<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('assets');
    }

    public function index()
    {
        $data['css'] = array("./css/style.css","./css/flaticon.css","./css/lightbox.css","./js/jquery-ui.css");;
        $data['js'] = array("./js/jquery-ui.js","./js/jquery-2.1.1.min.js","./js/lightbox.min.js","./js/app.js");
        $data['title'] = 'Accueil | FT portfolio';
        $this->load->view('accueil',$data);
    }
}
