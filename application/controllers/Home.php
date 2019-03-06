<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('job_model');
        $this->load->model('company_model');
        $this->load->model('home_model');
    }

    public function index() {
        $data['title'] = "Hello Youngster!";
        $data['comapanies'] = $this->company_model->getCompanies();
        $data['latest_jobs'] = $this->job_model->getLatest();
        $data['display'] = $this->home_model->display();
        if (!empty($this->session->userdata['user_data'])):
            $data['saved_jobs'] = $this->job_model->getUserSaves($this->session->userdata['user_data'][0]['id']);
        endif;
        $this->load->view('head', $data)
            ->view('index')
            ->view('footer');
    }

    public function error_404() {
        $data['title'] = 'Error 404 | Page Not Found';
        $this->load->view('head', $data);
        $this->load->view('error_404');
        $this->load->view('footer');
    }

}

?>
