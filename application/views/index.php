<body>

   <div class="preloader"><i class="fa fa-spinner"></i></div>

   <section>
      <div class="banner bg-image-1 h-700 main-banner bg-fixed">
         <div class="container">
            <div class="caption align_item p-xs-20">
               <h1 class="f-80 f-xs-50 p-t-0 f-weight-300 f-family-poppins text-uppercase p-b-10">Job<strong class="f-bold">Seeker</strong></h1>
               <h5 class="f-30 f-xs-18 f-normal f-family-poppins">Search thousands of Jobs for free</h5>
               <p class="max-w-800">Welcome to the young, ready and achieving community</p>
               <div class="search-1 rad-5 m-t-40">
                  <div class="row">
                     <?php echo form_open(base_url("app/search")); ?>
                     <div class="col-sm-11">
                        <div class="row p-t-10 p-b-10">
                           <div class="col-sm-7">
                              <?php echo form_input(array("name"=>"jobname", "type"=>"text", "class"=>"form-item form-item-2x", "value"=>set_value("jobname"), "placeholder"=>"Search for a job offer in your area."))?>
                              <?php echo form_error("location");?>
                           </div>
                           <div class="col-sm-5"><?php echo form_input(array("name"=>"location", "type"=>"text", "class"=>"form-item form-item-2x", "value"=>set_value("location"), "placeholder"=>"Location"))?>
                              <?php echo form_error("location");?>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-1">
                        <button name="search" class="ht-btn ht-btn-2x rad-5 pull-right no-bg m-t-0" type="submit"><i class="fa fa-search f-25 m-r-5"></i></button>
                     </div>
                     <?php echo form_close()?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="block-2 p-b-30">
      <div class="container">
         <div class="row">
            <div class="col-sm-6"><!-- Blog-item -->
               <div class="bg-4f84c4 thumb-item">
                  <i class="fa fa-file-text-o"></i>
                  <h4 class="heading f-family-poppins">Are you an employer?</h4>
                  <p class="f-16 max-w-900">Contribute to the future.</p>
                  <a href="<?php echo base_url('company/post_job') ?>" class="ht-btn">Post a Job</a>
               </div>
            </div>
            <div class="col-sm-6"><!-- Blog-item -->
               <div class="bg-dc4c46 thumb-item">
                  <i class="fa fa-file-text"></i>
                  <h4 class="heading f-family-poppins">Are you job a seeker?</h4>
                  <p class="f-16 max-w-900">Showcase yourself to the industry</p>
                  <a href="<?php echo base_url('resume/edit_profiles') ?>" class="ht-btn">Upload your CV</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="browse-category">
      <div class="container">
         <div class="title-group line-default">
            <h2>Jobs by categories</h2>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore</p> -->
         </div>

         <div class="row">

            <?php foreach ($display as $key => $value) { ?>

               <div class="col-sm-4 col-md-3 p-0">
                  <a class="thumb-item" href="<?php echo base_url('job/job_filter/'.$value['category']) ?>">
                     <i class="fa <?php echo $value['icon']; ?>"></i>
                     <h4 class="heading"><?php echo $value['category']; ?><br></h4>
                  </a>
               </div>

            <?php } ?>

         </div>
         <div class="text-center"><a href="<?php echo base_url('job/job_category') ?>" class="ht-btn ht-btn-3x bg-e no-border m-t-50">Browse all Categories</a></div>
      </div>
   </section>

   <section class="block-2 p-t-30 p-b-30">
      <div class="container">
         <div class="bg-4f84c4 thumb-item text-left p-t-30 p-b-30 m-b-0">
            <div class="row">
               <div class="col-sm-7">
                  <div>
                     <h4 class="heading p-b-10 f-sm-20"><i class="fa fa-pencil-square-o pull-left m-t-ab-10"></i>Haven't signup up yet?</h4>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="pull-right"><a href="<?php echo base_url('user/signup') ?>" class="ht-btn ht-btn-3x bg-f m-t-5">Signup Now!</a></div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="job bg-f">
      <div class="container">
         <div class="title-group line-default">
            <h2>browse Jobs</h2>
            <p>Get a job right now!</p>
         </div>
         <div class="row">
            <div class="col-sm-8"><!-- Blog-item -->

               <?php foreach ($latest_jobs as $key => $value) {
                  foreach($comapanies as $the_key => $the_value) {
                     if($the_value['id'] == $value['company_id']) {
                        $the_company_name_is = $the_value['name'];
                        $the_company_address_is = $the_value['address'];
                        $the_company_logo_is = $the_value['logo'];
                        $the_company_id_is = $the_value['id'];
                     } else {
                        continue;
                     }
                  }
                  ?>
                  <div class="box-item">
                     <div class="row">
                        <div class="col-sm-2 text-center">
                           <a href="<?php echo base_url('company/company_details/').$the_company_id_is; ?>" class="thumb-img"><img src="<?php echo base_url('images/').$the_company_logo_is; ?>" alt="image" /></a>
                        </div>
                        <div class="col-sm-10">
                           <h3 class="heading p-t-0">
                              <a href="<?php echo base_url('job/job_details/'.$value['job_id'].'/'.str_replace(' ', '-', $value['title'])); ?>" class="selected"><?php echo $value['title']; ?></a>
                              <span><?php echo date_format(date_create($value['dateadded']), 'd-M-Y @ g:i A'); ?></span>
                           </h3>
                           <p><?php echo $the_company_name_is; ?><span class="color-a"> | <?php echo $the_company_address_is; ?></span></p>
                           <p><?php echo $value['description']; ?></p>
                           <div class="p-t-5">
                              <button type="submit" class="btn btn-sm btn-default m-r-10" data-container="body" data-toggle="popover" data-placement="bottom" data-content="" data-original-title="" title="" aria-describedby="popover552097">Share</button>
                              <div class="list-icon d-none">
                                 <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook icon icon-30 rad-5 bg-4f84c4"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google icon icon-30 rad-5 bg-f2552c"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter icon icon-30 rad-5 bg-95dee3"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram icon icon-30 rad-5 bg-fe718b"></i></a></li>
                                 </ul>
                              </div>
                              <?php if(!empty($this->session->userdata['user_data'])) { if(!empty($saved_jobs) && in_array($value['job_id'], $saved_jobs[0])) { print_r($saved_jobs[0]);?>
                                 <a href="<?php echo base_url('job/save/').$value['job_id']; ?>" class="btn btn-sm btn-info m-r-10">Saved</a>
                              <?php } else { ?>
                                 <a href="<?php echo base_url('job/save/').$value['job_id']; ?>" class="btn btn-sm btn-default m-r-10">Save</a>
                              <?php } } ?>
                              <a href="<?php echo base_url('job/job_details/'.$value['job_id'].'/'.str_replace(' ', '-', $value['title'])); ?>" class="btn btn-sm btn-default m-r-10">View</a>
                              <a href="#" class="btn btn-sm btn-info pull-right">Apply</a>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>

               <a href="<?php echo base_url('job/job_listing') ?>" class="ht-btn bg-4f84c4 no-border m-t-30">Browse all Jobs</a>
            </div>

            <div class="col-sm-4"><!-- Product-item -->
               <div class="box p-20 p-l-35 p-r-35 bg-fd">
                  <div class="row">
                     <div class="col-sm-6 p-5">
                        <div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log3.png') ?>" alt="image" class="w-full"></div>
                     </div>
                     <div class="col-sm-6 p-5">
                        <div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log4.png') ?>" alt="image" class="w-full"></div>
                     </div>
                     <div class="col-sm-6 p-5">
                        <div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log5.png') ?>" alt="image" class="w-full"></div>
                     </div>
                     <div class="col-sm-6 p-5">
                        <div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log7.png') ?>" alt="image" class="w-full"></div>
                     </div>
                     <div class="col-sm-6 p-5">
                        <div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log6.png') ?>" alt="image" class="w-full"></div>
                     </div>
                     <div class="col-sm-6 p-5">
                        <div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log1.png') ?>" alt="image" class="w-full"></div>
                     </div>
                  </div>
               </div>

               <!-- <div class="box bg-fd">
               <h3 class="p-t-0 line-default line-default-left f-weight-500">Tips for Job</h3>
               <ul class="list list-category">
               <li><a href="#">The Ultimate Interview Guide</a></li>
               <li><a href="#">7 Interview Tips That Will Help You Get the Job</a></li>
               <li><a href="#">How To Write A Curriculum Vitae</a></li>
               <li><a href="#">10 tips to improve interview performance</a></li>
               <li><a href="#">CV Templates and Examples</a></li>
               <li><a href="#">Job Interview Questions and Interview Tips</a></li>
            </ul>
         </div> -->

      </div>
   </div>
</div>
</section>

<section class="bg-3">
   <div class="banner bg-image-2" data-image-src="<?php echo base_url('images/conifer-2178595_960_720.jpg') ?>">
      <div class="caption">
         <h2 class="f-60 f-xs-30 f-family-poppins p-b-10">Create a Profile 4 Free</h2>
         <h3 class="f-normal f-30">We will help you reach out to employers</h3>
         <p class="f-16 max-w-900">Create your profile, upload your professional qualities, work experience and get your dream job.</p>
         <a href="<?php echo base_url('resume/edit_profiles') ?>" class="ht-btn">Create your profile now!</a>
      </div>
   </div>
</section>

<!-- <section class="p-b-100 p-t-100">
<div class="container">
<div class="title-group line-default">
<h2>Testimonials</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore</p>
</div>
<div class="testimonial-item text-center f-18 max-w-800">
<a href="#" class="icon icon-150 rad-500 overl p-0 bg-9 m-b-15"><img src="<?php //echo base_url('images/user-debra-banks-230x230.jpg') ?>" alt="image" class="w-full"></a>
<div class="testimonial-txt"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet consecsed d do eiusmod temp incidunt olore magna aliqu Lorem ipsum dolor sit amet et dincidunt ut labore et dolore magna aliqu Lorem ipsaliqu</div>
<p class="line"></p>
<p class="m-t-30"><strong>Jan Bold</strong>/ CEO &amp; Founder Archi</p>
</div>
</div>
</section> -->

<!-- <section class="block bg-fa p-t-60 p-b-30">
<div class="container">
<div class="title-group line-default">
<h2>From blog</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore</p>
</div>
<div class="row">
<div class="col-sm-6 col-md-4">
<div class="box-item box-shadow-d">
<a href="#" class="blog-image"><img src="<?php //echo base_url('images/slider-img-1.jpg') ?>" alt="image"></a>
<div class="caption">
<h4 class="heading"><a href="#">What do Hiring Managers look for in a resume?</a></h4>
<ul class="post-date">
<li>By <a href="#">Admin</a></li>
<li>January 23 2015</li>
<li>3 comment</li>
</ul>
<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do</p>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div class="box-item box-shadow-d">
<a href="#" class="blog-image"><img src="<?php //echo base_url('images/slider-img-3.jpg') ?>" alt="image"></a>
<div class="caption">
<h4 class="heading"><a href="#">6 Tips to writing an achievement based resume</a></h4>
<ul class="post-date">
<li>By <a href="#">Admin</a></li>
<li>January 23 2015</li>
<li>3 comment</li>
</ul>
<p class="color-3">Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do</p>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div class="box-item box-shadow-d">
<a href="#" class="blog-image"><img src="<?php //echo base_url('images/slider-img-2.jpg') ?>" alt="image"></a>
<div class="caption">
<h4 class="heading"><a href="#">Writing an effective cover letter can win you the job</a></h4>
<ul class="post-date">
<li>By <a href="#">Admin</a></li>
<li>January 23 2015</li>
<li>3 comment</li>
</ul>
<p class="color-3">Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do</p>
</div>
</div>
</div>
</div>
</div>
</section> -->
