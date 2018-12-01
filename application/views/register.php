<section class="block">
   <div class="container">
      <div class="title-group line-default">
         <h1 class="selected">REGISTER</h1>
         <!-- <p>Join the young and ready youths community.</p> -->
      </div>
      <div class="row">
         <div class="col-sm-6 col-sm-offset-3">
            <div class="box p-35">
               <!-- Nav tabs --><!-- Tab panes -->
               <?php echo form_open(base_url("user/signup"))?>

               <?php echo form_input(array("name"=>"name", "class"=>"form-item", "placeholder"=>"Full Name", "value"=>set_value("name")))?>
               <?php echo form_error("name");?>

               <?php echo form_input(array("name"=>"email", "type"=>"email", "class"=>"form-item", "placeholder"=>"Email", "value"=>set_value("email")))?>
               <?php echo form_error("email");?>
               <span id="taken"></span>

               <?php echo form_input(array("name"=>"dob", "type"=>"date", "min"=>"1992-12-31", "max"=>"1998-12-31", "class"=>"form-item", "placeholder"=>"Date Of Birth", "value"=>set_value("dob")))?>
               <?php echo form_error("dob");?>

               <?php echo form_input(array("name"=>"password", "type"=>"password", "class"=>"form-item", "placeholder"=>"Password"))?>
               <?php echo form_error("password");?>

               <?php echo form_input(array("name"=>"password_confirm", "type"=>"password", "class"=>"form-item", "placeholder"=>"Type password again"))?>
               <?php echo form_error("password_confirm");?>

               <?php echo form_submit(array("name"=>"register", "type"=>"submit", "class"=>"ht-btn bg-4f84c4 m-t-20", "value"=>"Register"))?>

               <?php echo form_close()?>

               <div style="displa:inline"><p class="f-weight-400 m-t-10">Do you have a company or brand that needs to fill a spot?<br /><a href="<?php echo base_url('company/company_signup') ?>" class="color-4f84c4">Register your company here</a>.</p></div>

            </div>
            <?php if(!empty($taken) && !empty($taken) && $taken == TRUE) { ?>
               <script>
               document.getElementById("taken").innerHTML = "Email is already taken!";
               </script>
            <?php } ?>
         </div>
      </div>
   </div>
</section>
