<section class="block-2 bg-fa job tamxxxx">
   <div class="container">
      <div class="title-group line-default line-default-c">
         <h1><?php echo (count($jobs) > 0 ? '('.count($jobs).') Job' : 'Jobs'); ?> Found</h1>
         <p>Get your dream job!</p>
      </div>
      <div class="row">
         <div class="col-sm-8">

            <?php foreach ($jobs as $key => $value) { ?>
               <div class="box-item">
                  <div class="row">
                     <div class="col-sm-2 text-center">
                        <a href="#" class="thumb-img"><img src="<?php echo base_url('images/log1.png') ?>" alt="image"></a>
                     </div>
                     <div class="col-sm-10">
                        <h3 class="heading p-t-0">
                           <a href="#" class="selected"><?php echo $value->title; ?></a>
                           <span><?php echo date_format(date_create($value->dateadded), 'd-M-Y @ g:i A'); ?></span>
                        </h3>
                        <p>Company Name<span class="color-a">| Company Address</span></p>
                        <p><?php echo $value->description; ?></p>
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
                           <a href="#" class="btn btn-sm btn-default m-r-10">Save</a>
                           <a href="<?php echo base_url('job/job_details/').$value->job_id; ?>" class="btn btn-sm btn-default m-r-10">View</a>
                           <a href="#" class="btn btn-sm btn-info pull-right">Apply</a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>

            <ul class="pagination ht-pagination">
               <?php echo $this->pagination->create_links(); ?>
            </ul>
         </div>
         <div class="col-sm-4"><!-- Blog-item -->
            <div class="bg-4f84c4 thumb-item p-b-40">
               <h4 class="heading p-t-0 text-left">Filter</h4>
               <form>
                  <select class="form-item form-item-3x no-border">
                     <option>Industry</option>
                     <option>Accounting</option>
                     <option>Health Care</option>
                     <option>Pharmaceutical</option>
                     <option>Business Development</option>
                     <option>Restaurant</option>
                  </select>
                  <select class="form-item form-item-3x no-border">
                     <option>Type job</option>
                     <option>Option 1</option>
                     <option>Option 2</option>
                  </select>
                  <select class="form-item form-item-3x no-border">
                     <option>Salary</option>
                     <option>Option 1</option>
                     <option>Option 2</option>
                     <option>Option 3</option>
                  </select>
                  <select class="form-item form-item-3x no-border">
                     <option>Location</option>
                     <option>Arizona</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Lowa</option>
                     <option>Kentucky</option>
                  </select>
                  <input type="text" class="form-item form-item-3x no-border" placeholder="Keywords">
                  <div class="form-group m-b-0"><a href="#" class="ht-btn ht-btn-3x bg-1 w-full text-center m-t-5">Search</a></div>
               </form>
            </div>
            <div class="box">
               <h3 class="p-t-0 line-default line-default-left f-weight-500">Tips for Job</h3>
               <ul class="list list-category">
                  <li><a href="#">The Ultimate Interview Guide</a></li>
                  <li><a href="#">7 Interview Tips That Will Help You Get the Job</a></li>
                  <li><a href="#">How To Write A Curriculum Vitae</a></li>
                  <li><a href="#">10 tips to improve interview performance</a></li>
                  <li><a href="#">CV Templates and Examples</a></li>
                  <li><a href="#">Job Interview Questions and Interview Tips</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
