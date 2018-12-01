<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model('resume_model');
      $this->load->model('user_model');
      $this->load->model('job_model');
   }

   public function index() {
      self::resume_listing();
   }

   public function resume_listing($index = 0) {
      $data['title'] = "Resume Listings";
      // $data['resumes'] = $this->resume_model->getResumes();
      /***********************************/
      $data['base_url'] = base_url('job/job_listing/');
      $data['per_page'] = 0;
      $data['resumes'] = $this->user_model->doValueSelect('*', 'users', '' , '' , $data['per_page'], $index);
      $count = $this->user_model->doValueSelect('COUNT(*) as count', 'users');
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
      $this->load->view('resume_listing');
      $this->load->view('footer');
   }

   public function resume_details($id) {
      $data['title'] = "Resume Details";
      self::checkCompanySession();
      $data['user'] = $this->user_model->doValueSelect('*', 'users', 'id', $id);
      $data['user'] = $data['user'][0];
      $data['saved_jobs'] = $this->job_model->doValueSelect('*', 'saved_jobs', 'id', $id);
      $this->load->view('head', $data);
      if(!empty($data) && $data != null) {
         $this->load->view('resume_details');
      } else {
         redirect(base_url(), 'Location');
      }
      $this->load->view('footer');
   }

   public function edit_profiles() {
      self::checkUserSession();
      $data['title'] = "Edit Profile";
      $check['id'] = $this->session->userdata['user_data'][0]['id'];
      $data['data'] = $this->resume_model->getUser($value, $value);
      $this->load->view('head', $data);
      $this->load->view('edit_profiles');
      $this->load->view('footer');
   }

   public function checkUserSession() {
      if(!empty($this->session->userdata['user_data'])) {
         return true;
      } else {
         redirect(base_url('user/login'), 'Location');
      }
   }

   public function checkCompanySession() {
      if(!!empty($this->session->userdata['company_data'])) {
         redirect(base_url('company/company_signin'), 'Location');
      }
   }

}

 ?>
