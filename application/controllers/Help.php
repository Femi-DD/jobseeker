<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      self::help_page();
   }

   public function help_page() {
      $data['title'] = "Help";
      $this->load->view('head', $data);
      $this->load->view('help_page');
      $this->load->view('footer');
   }

   public function help_details() {
      $data['title'] = "More Information";
      $this->load->view('head', $data);
      $this->load->view('help_details');
      $this->load->view('footer');
   }

}

?>
