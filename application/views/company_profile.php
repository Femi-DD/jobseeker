<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1>Company profile</h1>
			<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna</p> -->
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="list-2"><!-- Product-item -->
					<a href="<?php echo base_url('company/company_details') ?>" class="thumb-item">
						<i class="fa fa-file-text-o"></i>
						<h4 class="heading">Company profile<br></h4>
					</a>
					<a href="<?php echo base_url('company/manage_job') ?>" class="thumb-item">
						<i class="fa fa-sticky-note-o"></i>
						<h4 class="heading">Mange jobs<br></h4>
					</a>
					<a href="<?php echo base_url('company/post_job') ?>" class="thumb-item">
						<i class="fa fa-cloud-upload"></i>
						<h4 class="heading">Post job<br></h4>
					</a>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="box p-40">
					<div></div>
					<h4 class="title line-default line-default-left selected">Company profile<br></h4>
					<?php echo form_open(base_url("company/company_profile")) ?>

					<?php echo form_input(array("name"=>"company_name", "value"=>set_value('company_name'), "class"=>"form-item", "placeholder"=>"Company Name")) ?>
					<?php echo form_error("company_name") ?>

					<?php echo form_input(array("name"=>"founded", "value"=>set_value('founded'), "class"=>"form-item", "placeholder"=>"Founded")) ?>
					<?php echo form_error("founded") ?>

					<?php echo form_input(array("name"=>"phone", "value"=>set_value('phone'), "class"=>"form-item", "placeholder"=>"Phone")) ?>
					<?php echo form_error("phone") ?>

					<?php echo form_input(array("name"=>"c_email", "type"=>"email", "value"=>set_value('c_email'), "class"=>"form-item", "placeholder"=>"Email")) ?>
					<?php echo form_error("c_email") ?>

					<?php echo form_input(array("name"=>"website", "value"=>set_value('website'), "class"=>"form-item", "placeholder"=>"Website")) ?>
					<?php echo form_error("website") ?>

					<?php echo form_input(array("name"=>"industry", "value"=>set_value('industry'), "class"=>"form-item", "placeholder"=>"Industry")) ?>
					<?php echo form_error("industry") ?>

					<?php echo form_input(array("name"=>"company_size", "value"=>set_value('company_size'), "class"=>"form-item", "placeholder"=>"Company Size")) ?>
					<?php echo form_error("company_size") ?>

					<?php echo form_input(array("name"=>"address", "value"=>set_value('address'), "class"=>"form-item", "placeholder"=>"Address")) ?>
					<?php echo form_error("address") ?>

					<?php echo form_input(array("name"=>"state", "value"=>set_value('State'), "class"=>"form-item", "placeholder"=>"State")) ?>
					<?php echo form_error("state") ?>

					<?php echo form_textarea(array("name"=>'about', "value"=>set_value('about'), 'class'=>'form-item h-200 p-15', 'placeholder'=>"About Company")) ?>
					<?php echo form_error('about') ?>

					<?php echo form_submit(array("name"=>"submit", "type"=>"submit", "class"=>"ht-btn bg-4f84c4 col-lg-offset-0", "value"=>"Save & Update"))?>
				</div>
			</div>
		</div>
	</div>
</section>
