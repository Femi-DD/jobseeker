<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('job_model');
    }

    public function index() {
        self::login();
    }

    public function signup() {
        $data['title'] = 'Signup';
        $this->load->view('head', $data);

        if ($this->form_validation->run('user/signup') === true) {
            $user = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'dob' => $this->input->post('dob'),
                'password' => md5($this->input->post('password')),
            ];

            if ($this->user_model->userExists($user['email'], $user['password'])) {
                $message['taken'] = true;
            } else {
                if ($this->user_model->newUser($user) == true) {
                    //do redirect to successful account creation page
                    // redirect(self::signup_success(), 'refresh');
                } else {
                    $state['message'] = 'failed';
                }
            }
        }
        $this->load->view('register', !empty($message) ? $message : null)
            ->view('footer');
    }

    public function login() {
        $data['title'] = 'Welcome back!';
        $this->load->view('head', $data);
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');

        } else if ($this->form_validation->run() == TRUE) {
            $user = [];
            $user['email'] = $this->input->post('email');
            $user['password'] = md5($this->input->post('password'));

            if ($this->user_model->userExists($user['email'], $user['password'])) {
                $userdata['user_data'] = $this->user_model->getUser($user['email'], $user['password']);
                print_r($userdata);
                if (!empty($userdata) && $userdata != NULL) {
                    $this->session->set_userdata('user_data', $userdata['user_data']);
                    self::checkUserSession();
                    redirect('index', 'Location');

                }
            } else {
                $message['fake'] = TRUE;
                $this->load->view('login', $message);
            }
        }
        $this->load->view('footer');
    }

    public function checkUserSession() {
        if (!empty($this->session->userdata['user_data'])) {
            return true;
        } else {
            redirect(base_url('user/login'), 'Location');
        }
    }

    public function signup_success() {
        $this->load->view('head');
        $state['message'] = [
            'status' => 'Congratulations!!!',
            'initial_text' => 'Your registration was successful.',
            'final_text' => 'Welcome Aboard!',
        ];
        $this->load->view('action', $state);
        $this->load->view('footer');
    }

}

?>
