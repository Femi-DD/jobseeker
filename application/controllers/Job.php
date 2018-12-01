<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model("job_model");
      $this->load->model('company_model');
   }

   public function index() {
      self::job_category();
   }

   public function job_category() {
      $data['title'] = "Job Categories";
      $this->load->view('head', $data);
      if($data['categories'] = $this->job_model->getCategories()) {
         if(!empty($data) && !empty($data)) {
            $this->load->view("job_category", $data);
         } else {
            $this->load->view("index");
         }
      }
      $this->load->view('footer');
   }

   public function job_listing($index = 0) {
      $data['title'] = "Job Listings";
      $data['comapanies'] = $this->company_model->getCompanies();
      // $data['jobs'] = $this->job_model->doValueSelect('*', 'jobs');
      if(!empty($this->session->userdata['user_data'])):
         $data['saved_jobs'] = $this->job_model->getUserSaves($this->session->userdata['user_data'][0]['id']);
      endif;
      /***********************************/
      $data['base_url'] = base_url('job/job_listing/');
      $data['per_page'] = 25;
      $data['jobs'] = $this->job_model->doValueSelect('*', 'jobs', '' , '' , $data['per_page'], $index);
      $count = $this->job_model->doValueSelect('COUNT(*) as count', 'jobs');
      $data['total_rows'] = $count[0]->count;
      $data['first_tag_open'] = "<li>";
      $data['first_link'] = "First";
      $data['first_tag_close'] = "</li>";
      $data['last_tag_open'] = "<li>";
      $data['last_link'] = "Last";
      $data['last_tag_close'] = "</li>";
      $data['cur_tag_open'] = "<li class='active'><a class='page-link'>";
      $data['cur_tag_close'] = "</a></li>";
      $data['num_tag_open'] = "<li>";
      $data['num_tag_close'] = "</li>";
      $data['prev_tag_open'] = "<li>";
      $data['prev_link'] = "Previous";
      $data['prev_tag_close'] = "</li>";
      $data['next_tag_open'] = "<li>";
      $data['next_link'] = "Next";
      $data['next_tag_close'] = "</li>";
      $this->pagination->initialize($data);
      /***********************************/
      $this->load->view('head', $data);
      $this->load->view('job_listing');
      $this->load->view('footer');
   }

   public function job_details($value) {
      $data['title'] = "Job Details";
      $data['theJob'] = $this->job_model->getThisJob($value);
      $data['theCompany'] = $this->job_model->getTheCompany($data['theJob'][0]['company_id']);

      /**************GEN_NAME**************/
      if(!empty($this->session->userdata['user_data'])) {
         $data['name'] = explode(' ', $this->session->userdata['user_data'][0]['name']);
         $data['name'] = trim($data['name']);
      } else if(!empty($this->session->userdata['company_data']) && !empty($this->session->userdata['company_data'])){
         $data['name'] = $this->session->userdata['company_data'][0]['name'];
         // echo "<script>alert('Please login again to verify account!');</script>";
      }
      /**************GEN_NAME**************/

      $this->load->view('head', $data);
      $this->load->view('job_details');
      $this->load->view('footer');
   }

   public function job_filter($value = null , $index = 0) {
      $data['title'] = "Job Filter";
      // $data['jobs'] = $this->job_model->getTheJobs($value);
      /***********************************/
      $data['base_url'] = base_url('job/job_listing/'.$value);
      $data['per_page'] = 25;
      $data['jobs'] = $this->job_model->doValueSelect('*', 'jobs', 'category' , $value , $data['per_page'], $index);
      $count = $this->job_model->doValueSelect('COUNT(*) as count', 'jobs');
      $data['total_rows'] = $count[0]->count;
      $data['first_tag_open'] = "<li>";
      $data['first_link'] = "First";
      $data['first_tag_close'] = "</li>";
      $data['last_tag_open'] = "<li>";
      $data['last_link'] = "Last";
      $data['last_tag_close'] = "</li>";
      $data['cur_tag_open'] = "<li class='active'><a class='page-link'>";
      $data['cur_tag_close'] = "</a></li>";
      $data['num_tag_open'] = "<li>";
      $data['num_tag_close'] = "</li>";
      $data['prev_tag_open'] = "<li>";
      $data['prev_link'] = "Previous";
      $data['prev_tag_close'] = "</li>";
      $data['next_tag_open'] = "<li>";
      $data['next_link'] = "Next";
      $data['next_tag_close'] = "</li>";
      $this->pagination->initialize($data);
      /***********************************/
      $this->load->view('head', $data);
      $this->load->view('job_filter');
      $this->load->view('footer');
   }

   public function save($value) {
      if(!empty($this->session->userdata['user_data']) && !empty($this->session->userdata['user_data'])) {
         if($this->job_model->job_exists($value)) {
            $values['user_id'] = $this->session->userdata['user_data'][0]['id'];
            $values['job_id'] = $value;
            if($this->job_model->save_job($values)) {
               redirect(self::getReferer(), 'Location');
            } else {
               redirect(self::getReferer(), 'Location');
            }
         } else {
            redirect(self::getReferer(), 'Location');
         }
      } else {
         redirect(base_url('user/login'), 'Location');
         // header("Location:".base_url('user/login'));
      }
   }

   public function edit_job($value) {
      if($this->job_model->job_exists($value)) {
         $data['theJob'] = $this->job_model->getThisJob($value);
         $this->load->view('', $data);
      } else {
         redirect(self::getReferer(), 'Location');
      }
   }

   private function getReferer() {
      $referer = $_SERVER['HTTP_REFERER'];
      return $referer;
   }

}

?>
