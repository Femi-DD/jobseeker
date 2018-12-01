<footer class="bg-2">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 m-b-xs-30">
					<img src="<?php echo base_url('images/mt-0996-logo.png')?>" alt="image" class="w-50">
					<h2 class="color-f f-30 f-xs-20 f-family-poppins f-weight-500">JOB SEEKER, Inc</h2>
					<p>Find your dream job in time.</p>
					<ul class="list-inline m-t-20">
						<li><a href="#"><i class="fa fa-facebook icon icon-40 rad-3 bg-4f84c4"></i></a></li>
						<li><a href="#"><i class="fa fa-google icon icon-40 rad-3 bg-f2552c"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter icon icon-40 rad-3 bg-95dee3"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram icon icon-40 rad-3 bg-fe718b"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-2 m-t-60 m-t-xs-30">
					<h4>Information</h4>
					<ul class="list">
						<li><a href="<?php echo base_url('app/terms_and_conditions') ?>">Terms and Conditions</a></li>
						<li><a href="<?php echo base_url('app/privacy_policy') ?>">Privacy Policy</a></li>
						<li><a href="<?php echo base_url('company/post_job') ?>">Post A Job</a></li>
						<li><a href="<?php echo base_url('resume/edit_profiles') ?>">Create A Resume</a></li>
					</ul>
				</div>
				<div class="col-sm-2 m-t-60 m-t-xs-30">
					<h4>Community</h4>
					<ul class="list">
						<li><a href="<?php echo base_url('help/help_page') ?>">Help Center</a></li>
						<li><a href="<?php echo base_url('app/contact_us') ?>">Contact Us</a></li>
						<li><a href="<?php echo base_url('blog/blog_page') ?>">Blog</a></li>
						<!-- <li><a href="#">Carrer advide</a></li>
						<li><a href="#">Specials</a></li> -->
					</ul>
				</div>
				<div class="col-sm-3 m-t-60 m-t-xs-30">
					<h4>Our Newsletter</h4>
					<?php echo form_open(base_url("app/subscribe"))?>

					<?php echo form_input(array("name"=>"email", "type"=>"email", "class"=>"form-item no-border m-t-5", "placeholder"=>"be the first to know!", "required"=>"", "value"=>set_value("email")))?>
					<?php echo form_error("email")?>

					<?php echo form_submit(array("name"=>"subscribe", "type"=>"submit", "class"=>"ht-btn bg-4f84c4 m-t-30", "value"=>"Subscribe"))?>

					<?php echo form_close()?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom bg-1">
		<div class="container">
			<p>Copyright © 2017 Developed by <a href="#" class="color-9">Kole Technologies.</a> All Rights Reserved.</p>
		</div>
	</div>
</footer>
<!-- jQuery -->
<script src="<?php echo base_url('js/jquery/jquery-2.2.4.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('js/bootstrap/bootstrap.min.js') ?>"></script>
<!-- Owl-coursel -->
<script src="<?php echo base_url('js/owl-coursel/owl.carousel.js') ?>"></script>
<!-- Classie -->
<script src="<?php echo base_url('js/classie.js') ?>"></script>
<!-- Script -->
<script src="<?php echo base_url('js/script.js') ?>"></script>
</body>

</html>
