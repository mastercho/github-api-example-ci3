<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->head['title'] = "GitHub Repositories";

        //$this->date['content']=$this->github->repositories();
        $this->load->view('templates/header', $this->head);
        $this->load->view('content');
        $this->load->view('templates/footer');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */