<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Company extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model('company_model');
      $this->load->model('job_model');
   }

   public function index() {
      // redirect(base_url('company/company_listing'));
      self::company_listing();
   }

   public function company_signup() {
      $data['title'] = "Company Signup";
      $this->form_validation->set_rules('c_name', 'Company Name', 'required');
      $this->form_validation->set_rules('c_website', 'Website Url');
      $this->form_validation->set_rules('c_industry', 'Industry', 'required');
      $this->form_validation->set_rules('c_size', 'Company Size', 'required');
      $this->form_validation->set_rules('c_phone', 'Phone', 'required');
      $this->form_validation->set_rules('c_email', 'Email', 'required');
      $this->form_validation->set_rules('c_address', 'Address');
      $this->form_validation->set_rules('c_state', 'Location', 'required');
      $this->form_validation->set_rules('c_about', 'About', 'required');
      $this->form_validation->set_rules('c_password', 'Password', 'required|max_length[20]|min_length[10]');
      $this->form_validation->set_rules('c_password_confirm', 'Confirm Password', 'required|max_length[20]|min_length[10]|matches[c_password]');
      $this->load->view('head', $data);

      if($this->form_validation->run() == FALSE) {
         $this->load->view('company_signup');

      } else if($this->form_validation->run() == TRUE) {
         $company = [];
         $company["name"] = $this->input->post("c_name");
         $company["website"] = $this->input->post("c_website");
         $company["industry"] = $this->input->post("c_industry");
         $company["size"] = $this->input->post("c_size");
         $company["phone"] = $this->input->post("c_phone");
         $company["email"] = $this->input->post("c_email");
         $company["address"] = $this->input->post("c_address");
         $company["location"] = $this->input->post("c_state");
         $company["password"] = $this->input->post("c_password_confirm");
         $company["about"] = $this->input->post("c_about");

         if($this->company_model->companyExists($company['email'], $company['phone'])) {
            $err['exists'] = 'exists';
            $this->load->view('company_signup', $err);
         } else {
            if($this->company_model->addCompany($company)) {
               $state['message'] = array(
                  "status" => "Congratulations!!!",
                  "initial_text" => "Your registration was successful. We appreciate and hope to do more with you!",
                  "final_text" => "Welcome Aboard!"
               );
               $this->load->view('action', $state);
            }
         }
      }
      $this->load->view('footer');
   }

   public function company_listing() {
      $data['title'] = "Company Listings";
      $data['company'] = $this->company_model->getCompanies();
      $this->load->view('head', $data);
      $this->load->view('company_listing');
      $this->load->view('footer');
   }

   public function company_details($value = null) {
      $data['title'] = "Company Details";
      $this->load->view('head', $data);
      if(empty($value) || $value == '0') {
         $value = $this->session->userdata['company_data'][0]['id'];
         $data['company_profile'] = $this->company_model->getCompanyProfile($value);
         $data['our_jobs'] = $this->company_model->getOurJobs($value);
         $this->load->view('company_details', $data);
      } else {
         $data['company_profile'] = $this->company_model->getCompanyProfile($value);
         $data ['our_jobs'] = $this->company_model->getOurJobs($value);
         if(!empty($data)) {
            $this->load->view('company_details', $data);
         } else {
            return NULL;
         }
      }
      $this->load->view('footer');
   }

   public function company_profile() {
      $data['title'] = "Company Profile";
      $this->load->view('head', $data);
      // self::checkCompanySession();
      $this->form_validation->set_rules('company_name', 'Company Name', 'required');
      $this->form_validation->set_rules('phone', 'Phone', 'required');
      $this->form_validation->set_rules('c_email', 'Email', 'required');
      $this->form_validation->set_rules('founded', 'Founded', 'required|max_length[4]|min_length[4]');
      $this->form_validation->set_rules('website', 'Website URL', 'required');
      $this->form_validation->set_rules('industry', 'Industry', 'required');
      $this->form_validation->set_rules('company_size', 'Company Size', 'required');
      $this->form_validation->set_rules('address', 'Address', 'required');
      $this->form_validation->set_rules('state', 'Location', 'required');
      $this->form_validation->set_rules('about', 'About Company', 'required');

      if($this->form_validation->run() == FALSE) {
         $companydetails['profile'] = $this->company_model->getCompanyProfile(1);
         $this->load->view('company_profile');

      } else if($this->form_validation->run() == TRUE) {
         $company = [];
         $company['name'] = $this->input->post('company_name');
         $company['phone'] = $this->input->post('phone');
         $company['email'] = $this->input->post('c_email');
         $company['website'] = $this->input->post('website');
         $company['industry'] = $this->input->post('industry');
         $company['size'] = $this->input->post('company_size');
         $company['address'] = $this->input->post('address');
         $company['location'] = $this->input->post('state');
         $company['about'] = $this->input->post('about');
         $company['founded'] = $this->input->post('founded');

         if($this->company_model->updateCompanyProfile($company, $this->session->userdata('id'))) {
            $data['message'] = array("status" => "Success!!!", "initial_text" => "Profile Update was successful.", "final_text" => "");
            $this->load->view('action', $data);

         } else {
            $data['message'] = array("status" => "Error!", "initial_text" => "We're sorry, An error was encountered while updating profile.", "final_text" => "Please retry or try again later.");
            $this->load->view('action', $data);
         }
      }
      $this->load->view('footer');
   }

   public function company_signin() {
      $data['title'] = "Company Login";
      $this->form_validation->set_rules('c_email', 'Email', 'required');
      $this->form_validation->set_rules('c_password', 'Password', 'required');
      $this->load->view('head', $data);

      if($this->form_validation->run() == FALSE) {
         $this->load->view('company_signin');

      } else if($this->form_validation->run() == TRUE) {
         $company = [];
         $company['email'] = $this->input->post('c_email');
         $company['password'] = $this->input->post('c_password');

         if($this->company_model->companyExists($company['email'], $company['password'])) {
            $data['company_data'] = $this->company_model->getCompany($company['email'], $company['password']);
            //sets d session
            if(!empty($data) && $data != NULL) {
               if(!empty($this->session->userdata['user_data'])) {
                  $this->session->unset_userdata('user_data');
               }
               $this->session->set_userdata("company_data", $data['company_data']);
               self::checkCompanySession();
               redirect(base_url('company/manage_job'), 'Location');

            }
         } else {
            $err['notexist'] = TRUE;
            $this->load->view('company_signin', $err);
         }
      }
      $this->load->view('footer');
   }

   public function post_job() {
      $data['title'] = "Post Job Here";
      self::checkCompanySession();
      $data['job_categories'] = $this->company_model->doValueSelect('category', 'categories', 'status', '1');
      asort($data['job_categories']);
      $this->load->view('head', $data);
      if(!empty($this->session->userdata['company_data'])) {
         $this->form_validation->set_rules('title', 'Job Title', 'trim|required');
         $this->form_validation->set_rules('category', 'Job Type', 'required|trim');
         $this->form_validation->set_rules('location', 'Location', 'trim|required');
         $this->form_validation->set_rules('position', 'Position', 'trim|required');
         $this->form_validation->set_rules('description', 'Job Description', 'trim|required');
         $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
         $this->form_validation->set_rules('address', 'Address', 'trim|required');
         $this->form_validation->set_rules('experience', 'Years Of Experience', 'required|trim');
         // $this->form_validation->set_rules('salary', 'Salary', 'required|trim');
         $this->form_validation->set_rules('jobtype', 'Job Type', 'required|trim');
         $this->form_validation->set_rules('roles', 'Job Roles', 'required|trim');
         $this->form_validation->set_rules('qualifications', 'Job Requirements', 'required|trim');
         $this->form_validation->set_rules('roles', 'Job Roles', 'required|trim');

         if($this->form_validation->run() == FALSE) {
            $this->load->view("post_job");

         } else if($this->form_validation->run() == TRUE) {
            $job = [];
            $job['company_id'] = 1;
            $job['title'] = $this->input->post('title');
            $job['category'] = $this->input->post('category');
            $job['location'] = $this->input->post('location');
            // $job['salary'] = $this->input->post('salary');
            $job['position'] = $this->input->post('position');
            $job['experience'] = $this->input->post('experience');
            $job['gender'] = $this->input->post('gender');
            $job['address'] = $this->input->post('address');
            $job['description'] = $this->input->post('description');
            $job['qualifications'] = $this->input->post('qualifications');
            $job['roles'] = $this->input->post('roles');

            if($this->company_model->newJob($job)) {
               $data['message'] = array("status" => "Success!!!", "initial_text" => "Job vacancy was posted successfully.", "final_text" => "We hope you get the best hands.");
               $this->load->view('action', $data);

            } else {
               $data['message'] = array(
                  "status" => "Error!!!",
                  "initial_text" => "We're sorry, an error occurred while posting job.",
                  "final_text" => "We're looking into it."
               );
               $this->load->view('action', $data);
            }
         }
      } else {
         redirect('index');
      }
      $this->load->view('footer');
   }

   public function manage_job() {
      self::checkCompanySession();
      $data['title'] = "Manage Jobs";
      $data['my_jobs'] = $this->company_model->getOurJobs($this->session->userdata['company_data'][0]['id']);
      $this->load->view('head', $data);
      $this->load->view('manage_job');
      $this->load->view('footer');
   }

   public function checkCompanySession() {
      if(!empty($this->session->userdata['company_data'])) {
         return true;
      } else {
         redirect(base_url('company/company_signin'), 'Location');
      }
   }

   public function job_delete($value) {
      if($this->job_model->delete_job($value)) {
         redirect(base_url('company/manage_job'), 'Location');
      } else {
         return false;
      }
   }

}

?>
