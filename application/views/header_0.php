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


<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

if(!empty($this->session->userdata['user_data'])) {
   $name = $this->session->userdata['user_data'][0]['name'];
   $name = explode(' ', $name);
   $name = trim($name[0]);
}
if(!empty($this->session->userdata['company_data'])){
   $name = $this->session->userdata['company_data'][0]['name'];
   // echo "<script>alert('$name')</script>";
}

?>

<header class="header-absolute">
   <div class="top-header">
      <div class="container">
         <div class="row">
            <div class="col-md-6 hidden-xs hidden-sm">
               <ul class="top-link">
                  <li><a href="mailto:info@jobseeker.com"><i class="fa fa-envelope-o m-r-5"></i>info@jobseeker.com</a></li>
                  <li><a href="tel:+2348189456784"><i class="fa fa-phone m-r-5"></i>+234 818 945 6784</a></li>
               </ul>
            </div>
            <div class="col-sm-12 col-md-6">
               <ul class="top-link pull-right">
                  <li><a href="<?php echo base_url('help/help_page') ?>">Help center</a></li>
                  <li class="dropdown user">
                     <?php if(!empty($name)) { ?>
                        <a href="<?php echo base_url('job/job_listing') ?>" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></a>
                     <?php } else { ?>
                        <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                     <?php } ?>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <?php if(!empty($this->session->userdata['user_data'])) { ?>
                           <li><a href="<?php echo base_url('resume/resume_details') ?>">Dashboard</a></li>
                           <li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
                        <?php } else if(!empty($this->session->userdata['company_data'])) { ?>
                           <li><a href="<?php echo base_url('company/company_details') ?>">Dashboard</a></li>
                           <li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
                        <?php } else { ?>
                           <li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
                           <li><a href="<?php echo base_url('user/signup')?>">Sign Up</a></li>
                        <?php } ?>
                     </ul>
                  </li>
                  <li class="menu-btn"><i class="fa fa-bars f-14 icon icon-20"></i></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="main-header p-b-20 p-t-20">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-md-3">
               <a href="<?php echo base_url() ?>" class="logo m-t-10 m-b-10">
                  <img src="<?php echo base_url('images/mt-0996-logo.png')?>" alt="image" class="pull-left m-r-5 w-40">
                  <h2 class="f-25 f-weight-300 f-family-poppins text-uppercase p-t-10 p-b-10">Job<strong class="f-weight-600 color-4f84c4">Seeker</strong></h2>
               </a>
            </div>

            <div class="col-sm-7 hidden-xs hidden-sm pull-right text-right">
               <nav id="holder_mn" class="menu-nav">
                  <ul>
                     <li><a href="<?php echo base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">home</a></li>
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
                              <li><a href="<?php echo base_url('resume/edit_profiles') ?>">edit profiles</a></li>
                           <?php } ?>
                        </ul>
                     </li>
                     <?php if(!!empty($this->session->userdata['user_data'])) { ?>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">company</a>
                           <ul class="dropdown-menu">
                              <?php if(!empty($this->session->userdata['company_data'])) { ?>
                                 <li><a href="<?php echo base_url('company/post_job') ?>">post job</a></li>
                                 <li><a href="<?php echo base_url('company/manage_job') ?>">manage job</a></li>
                                 <li><a href="<?php echo base_url('company/company_profile') ?>">Edit company profile</a></li>
                                 <li><a href="<?php echo base_url('company/company_details/').$this->session->userdata['company_data'][0]['id']; ?>">view company profile</a></li>
                              <?php } else { ?>
                                 <li><a href="<?php echo base_url('company/company_signin') ?>">company sign in</a></li>
                                 <li><a href="<?php echo base_url('company/company_signup') ?>">company sign up</a></li>
                              <?php } ?>
                              <li><a href="<?php echo base_url('company/company_listing') ?>">company listings</a></li>
                           </ul>
                        </li>
                     <?php } else {}?>
                     <li><a href="<?php echo base_url('blog/blog_page') ?>">blog</a></li>
                     <li><a href="<?php echo base_url('app/about') ?>">about</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
