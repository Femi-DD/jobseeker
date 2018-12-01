<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected">Member Login</h1>
			<p>Welcome back!</p>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="box p-40">
					<div>
						<?php echo form_open(base_url("user/login")); ?>

						<?php echo form_input(array("name"=>"email", "type"=>"email", "class"=>"form-item", "value"=>"femi.highsky@gmail.com", "placeholder"=>"E-mail" /*"value"=>set_value("email")*/))?>
						<?php echo form_error("email");?>

						<?php echo form_input(array("name"=>"password", "type"=>"password", "value"=>"babafemi10665798", "class"=>"form-item", "placeholder"=>"Password"))?>
						<?php echo form_error("password");?>

						<?php echo form_submit(array("name"=>"login", "type"=>"submit", "class"=>"ht-btn bg-4f84c4", "value"=>"Login"))?>

						<span id="fake"></span>

						<?php echo form_close()?>
						<?php if(!empty($fake) && $fake == TRUE) { ?>
							<script>
							document.getElementById("fake").innerHTML = "This user does not exists!";
							</script>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
