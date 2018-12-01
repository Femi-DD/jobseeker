<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

if(!empty($this->session->userdata['user_data'])) {
   $name = $this->session->userdata['user_data'][0]['name'];
   $name = explode(' ', $name);
   $name = trim($name[0]);
} else if(!empty($this->session->userdata['company_data']) && !empty($this->session->userdata['company_data'])){
   $name = $this->session->userdata['company_data'][0]['name'];
   // echo "<script>alert('Please login again to verify account!');</script>";
}

?>

<div class="menu-rs">
   <div class="menu-wrap">
      <div class="r-mv">
         <span></span>
         <span></span>
      </div>
      <ul class="menu-mb">
         <li><a href="<?php echo base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">home</a></li>
         <li class="dropdown user">
            <?php if(!empty($name)) { ?>
               <a href="<?php echo base_url('job/job_listing') ?>" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></a>
            <?php } else { ?>
               <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
            <?php } ?>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
               <?php if(!empty($this->session->userdata['user_data']) || !empty($this->session->userdata['company_data'])) { ?>
                  <li><a href="<?php echo base_url('resume/resume_details') ?>">Dashboard</a></li>
                  <li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
               <?php } else { ?>
                  <li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
                  <li><a href="<?php echo base_url('user/signup')?>">Sign Up</a></li>
               <?php } ?>
            </ul>
         </li>
         </li>
         <li class="dropdown active">
            <a href="<?php echo base_url('job/job_category') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs</a>
            <ul class="dropdown-menu">
               <li><a href="<?php echo base_url('job/job_listing') ?>">job listings</a></li>
               <li><a href="<?php echo base_url('job/job_category') ?>">job category</a></li>
            </ul>
         </li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resumes</a>
            <ul class="dropdown-menu">
               <li><a href="<?php echo base_url('resume/resume_listing') ?>">resume listings</a></li>
               <?php if(!empty($this->session->userdata['user_data'])) { ?>
                  <li><a href="<?php echo base_url('resume/resume_details') ?>">resume details</a></li>
                  <li><a href="<?php echo base_url('resume/edit_profiles') ?>">edit profiles</a></li>
               <?php } ?>
            </ul>
         </li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">company</a>
            <ul class="dropdown-menu">
               <?php if(!empty($this->session->userdata['company_data'])) { ?>
                  <li><a href="<?php echo base_url('company/post_job') ?>">post job</a></li>
                  <li><a href="<?php echo base_url('company/manage_job') ?>">manage job</a></li>
                  <li><a href="<?php echo base_url('company/company_details/').$this->session->userdata['company_data'][0]['id']; ?>">view company profile</a></li>
                  <li><a href="<?php echo base_url('company/company_profile') ?>">Edit company profile</a></li>
               <?php } else { ?>
                  <li><a href="<?php echo base_url('company/company_signin') ?>">company sign in</a></li>
                  <li><a href="<?php echo base_url('company/company_signup') ?>">company sign up</a></li>
               <?php } ?>
               <li><a href="<?php echo base_url('company/company_listing') ?>">company listings</a></li>
            </ul>
         </li>
         <li><a href="<?php echo base_url('blog/blog_page') ?>">blog</a></li>
         <li><a href="<?php echo base_url('app/about') ?>">about</a></li>
         <li><a href="<?php echo base_url('help/help_page') ?>">help</a></li>
      </ul>
   </div>
</div>
