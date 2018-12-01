<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model('app_model');
   }

   public function index() {
      self::about();
   }

   public function about() {
      $data['title'] = "About JobSeeker";
      $this->load->view('head', $data);
      $this->load->view('about');
      $this->load->view('footer');
   }

   public function contact_us() {
      $data['title'] = "Contact Us";
      $this->load->view('head', $data);
      $this->load->view('contact');
      $this->load->view('footer');
   }

   public function subscribe() {
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

      if($this->form_validation->run() == TRUE) {
         $user = []; $user["email"] = $this->input->post("email");
         try {
            if($this->app_model->mailExists($user['email'])) {
               $state['message'] = array(
                  "status" => "Error!",
                  "initial_text" => "The email you submitted is already taken.",
                  "final_text" => "Please check the email again."
               );
               $this->load->view("action", $state);
            } else {
               $this->app_model->addSubscriber($user);
               $state['message'] = array(
                  "status" => "Success!!!",
                  "initial_text" => "Your subscription was successful.",
                  "final_text" => "Thank you for subscribing."
               );
               $this->load->view('action', $state);
            }
         } catch (Exception $ex) {
            $state['message'] = array(
               "status" => "Error!!!",
               "initial_text" => "An error occurred.",
               "final_text" => ""
            );
            $this->load->view("action", $state);
         }
      } else if($this->form_validation->run() == FALSE){
         redirect(self::getReferer(), 'Location');
      }
   }

   public function logout() {
      $this->session->sess_destroy();
      redirect(base_url(), 'Location');
   }

   public function search($value) {
      $data['title'] = "Seek to find.";
      $data['results'] = $this->app_model->search($value);
      $this->load->view('head', $data);
      $this->load->view('search');
      $this->load->view('footer');
   }

   public function terms_and_conditions() {
      $data['title'] = "Terms and Conditions";
      $this->load->view('head', $data);
      $this->load->view('terms.php');
      $this->load->view('footer');
   }

   public function privacy_policy() {
      $data['title'] = "Privacy Policy";
      $this->load->view('head', $data);
      $this->load->view('privacy_policy');
      $this->load->view('footer');
   }

   private function getReferer() {
      $referer = $_SERVER['HTTP_REFERER'];
      return $referer;
   }

}

   ?>
