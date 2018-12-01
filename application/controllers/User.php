<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model("user_model");
      $this->load->model("job_model");
   }

   public function index() {
      self::signup();
   }

   public function signup() {
      $data['title'] = "Signup";
      $this->load->view("head", $data);
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[10]');
      $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');

      if($this->form_validation->run() == FALSE) {
         $this->load->view("register");

      } else if($this->form_validation->run() == TRUE) {
         $user = [];
         $user["name"] = $this->input->post("name");
         $user["email"] = $this->input->post("email");
         $user["dob"] = $this->input->post("dob");
         $user["password"] = md5($this->input->post("password"));

         if($this->user_model->userExists($user['email'], $user['password'])) {
            $message['taken'] = TRUE;
            $this->load->view("register", $message);

         } else {
            if($this->user_model->newUser($user) == TRUE) {
               $state['message'] = array(
                  "status" => "Congratulations!!!",
                  "initial_text" => "Your registration was successful.",
                  "final_text" => "Welcome Aboard!"
               );
               $this->load->view("action", $state);

            } else {
               $state['message'] = "failed";
            }
         }
      }
      $this->load->view("footer");
   }

   public function login() {
      $data['title'] = "Welcome back!";
      $this->load->view("head", $data);
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if($this->form_validation->run() == FALSE) {
         $this->load->view("login");

      } else if($this->form_validation->run() == TRUE) {
         $user = [];
         $user['email'] = $this->input->post('email');
         $user['password'] = md5($this->input->post('password'));

         if($this->user_model->userExists($user['email'], $user['password'])) {
            $userdata['user_data'] = $this->user_model->getUser($user['email'], $user['password']);
            print_r($userdata);
            if(!empty($userdata) && $userdata != NULL) {
               $this->session->set_userdata("user_data", $userdata['user_data']);
               self::checkUserSession();
               redirect("index", 'Location');

            }
         } else {
            $message['fake'] = TRUE;
            $this->load->view('login', $message);
         }
      }
      $this->load->view("footer");
   }

   public function checkUserSession() {
      if(!empty($this->session->userdata['user_data'])) {
         return true;
      } else {
         redirect(base_url('user/login'), 'Location');
      }
   }

}

?>
