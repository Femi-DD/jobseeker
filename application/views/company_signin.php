<?php if(!empty($notexist)): echo "<script>alert('Company has not been registered!');</script>"; endif; ?>

<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected">Company Signin</h1>
			<p>Welcome back!</p>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="box p-40">
					<div>
						<?php echo form_open(base_url("company/company_signin")); ?>

						<?php echo form_input(array("name"=>"c_email", "type"=>"email", "class"=>"form-item", "value"=>"info@kolequotes.com", "placeholder"=>"E-mail"))?>
						<?php echo form_error("c_email");?>

						<?php echo form_input(array("name"=>"c_password", "type"=>"password", "class"=>"form-item", "value"=>"password", "placeholder"=>"Password"))?>
						<?php echo form_error("c_password");?>

						<?php echo form_submit(array("name"=>"login", "type"=>"submit", "class"=>"ht-btn bg-4f84c4", "value"=>"Login"))?>

						<?php echo form_close()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
