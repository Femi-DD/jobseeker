<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected">COMPANY SIGNUP</h1>
			<!-- <p>Join the young and ready youths community.</p> -->
		</div>
		<div class="row">
			<?php echo form_open(base_url("company/company_signup")) ?>

			<div class="col-sm-6">
				<div class="box p-40">
					<?php echo form_input(array("name"=>"c_name", "value"=>set_value('c_name'), "class"=>"form-item", "placeholder"=>"Company Name")) ?>
					<?php echo form_error("c_name") ?>

					<?php echo form_input(array("name"=>"c_industry", "value"=>set_value('c_industry'), "class"=>"form-item", "placeholder"=>"Industry")) ?>
					<?php echo form_error("c_industry") ?>

					<?php echo form_input(array("name"=>"c_size", "value"=>set_value('c_size'), "class"=>"form-item", "placeholder"=>"Company Size")) ?>
					<?php echo form_error("c_size") ?>

					<?php echo form_textarea(array("name"=>"c_about", "value"=>set_value('c_about'), 'class'=>'form-item h-100 p-15', 'placeholder'=>"About Company / Overview")) ?>
					<?php echo form_error('c_about') ?>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="box p-40">
					<?php echo form_input(array("name"=>"c_website", "value"=>set_value('c_website'), "class"=>"form-item", "placeholder"=>"Website")) ?>
					<?php echo form_error("c_website") ?>

					<?php echo form_input(array("name"=>"c_phone", "value"=>set_value('c_phone'), "class"=>"form-item", "placeholder"=>"Phone")) ?>
					<?php echo form_error("c_phone") ?>

					<?php echo form_input(array("name"=>"c_email", "type"=>"email", "value"=>set_value('c_email'), "class"=>"form-item", "placeholder"=>"Email")) ?>
					<?php echo form_error("c_email") ?>

					<?php echo form_input(array("name"=>"c_address", "value"=>set_value('c_address'), "class"=>"form-item", "placeholder"=>"Address")) ?>
					<?php echo form_error("c_address") ?>

					<?php echo form_input(array("name"=>"c_state", "value"=>set_value('c_state'), "class"=>"form-item", "placeholder"=>"State")) ?>
					<?php echo form_error("c_state") ?>

					<?php echo form_input(array("name"=>"c_password", "type"=>"password", "class"=>"form-item", "placeholder"=>"Password"))?>
					<?php echo form_error("c_password");?>

					<?php echo form_input(array("name"=>"c_password_confirm", "type"=>"password", "class"=>"form-item", "placeholder"=>"Type password again"))?>
					<?php echo form_error("c_password_confirm");?>

					<?php echo form_submit(array("name"=>"submit", "type"=>"submit", "class"=>"btn bg-4f84c4 col-lg-offset-0", "value"=>"Register"))?>
				</div>
			</div>

			<?php echo form_close() ?>
			<!-- <div class="clearfix"></div> -->
		</div>
	</div>
</section>
