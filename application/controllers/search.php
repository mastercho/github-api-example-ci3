<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->github->user()) {
            redirect(base_url());
        }
    }

    public function index() {
        $search = $this->input->post("search");
        if ($search) {
            redirect(base_url() . 'search/' . $search);
        } else {
            redirect(base_url());
        }
    }

    public function search_repo($name = 'tetris') {
        $this->head['title'] = "GitHub API - search - " . rawurldecode($name);

        $repos = $this->github->search_repo($name,'30');
        foreach ($repos as $k => $r) {
            
        }

        foreach ($r as $rid => $data) {
            $this->data['repos'][] = $data;
            $langs[] = $data->language;
        }
        $langs_nonsort = array_count_values(array_filter($langs));
        arsort($langs_nonsort);

        $this->data['langs'] = $langs_nonsort;
        $this->data['name'] = rawurldecode($name);

        $this->load->view('templates/header', $this->head);
        $this->load->view('search', $this->data);
        $this->load->view('templates/footer');
    }

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */