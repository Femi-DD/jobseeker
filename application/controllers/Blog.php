<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      self::blog_page();
   }

   public function blog_page() {
      $data['title'] = "Blog";
      $this->load->view('head', $data);
      $this->load->view('blog');
      $this->load->view('footer');
   }

   public function blog_details() {
      $data['title'] = "Recent Posts";
      $this->load->view('head', $data);
      $this->load->view('blog_details');
      $this->load->view('footer');
   }

}

?>
