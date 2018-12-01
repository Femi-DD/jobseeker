<?php if(!defined('BASEPATH')) exit ('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<?php include "head.php"; ?>

<body>

	<div class="preloader"><i class="fa fa-spinner"></i></div>

	<?php include "sidebar.php"; ?>

	<?php include "header.php"; ?>

	<?php //include "search.php"; ?>

	<section class="block p-b-0">
		<div class="container">
			<div class="title-group line-default">
				<h1 class="selected">Contact us</h1>
				<p>We'll get back to you on your topic soonest!</p>
			</div>
			<div class="row">
				<div class="col-md-5 text-center m-t-30">
					<div class="lh">
						<i class="fa fa-phone f-30 m-b-10"></i>
						<p>+234 818 945 6784</p>
					</div>
					<div class="lh">
						<i class="fa fa-envelope-o f-30 m-b-10"></i>
						<p>femi.highsky@gmail.com</p>
					</div>
					<div class="lh">
						<i class="fa fa-map-signs f-30 m-b-10"></i>
						<p>No 60 Allen Avenue, Wuraola House, Ikeja, Lagos, Nigeria</p>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="box p-40 p-xs-15">
						<?php echo form_open(base_url("app/subscribe"))?>

						<?php echo form_input(array("name"=>"name", "class"=>"form-item", "placeholder"=>"Name", "value"=>set_value("name")))?>
						<?php echo form_error("name");?>

						<?php echo form_input(array("name"=>"phone", "type"=>"tel", "class"=>"form-item", "placeholder"=>"Phone", "value"=>set_value("phone")))?>
						<?php echo form_error("phone");?>

						<?php echo form_input(array("name"=>"email", "type"=>"email", "class"=>"form-item", "placeholder"=>"Email", "value"=>set_value("email")))?>
						<?php echo form_error("email");?>

						<textarea name="message" class="form-item h-200 p-15" placeholder="Message"></textarea>

						<?php echo form_submit(array("name"=>"send", "type"=>"submit", "class"=>"ht-btn m-t-10 bg-4f84c4", "value"=>"Send"))?>

						<?php echo form_close()?>
					</div>
				</div>
			</div>
		</div>
		<!-- <div id="map" class="h-500"></div> -->
	</section>

	<!-- <script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAn7y6DsSkVpKNHiMXS8RTtMNN8PZ9klE8&amp;callback=initialize"></script>

	<script>
	function initialize()
	{
		var myLallgn={lat: 40.80029619806279, lng: -73.30284118652344};
		var mapDiv = document.getElementById('map');
		var map = new google.maps.Map(mapDiv, {
			center: myLallgn,
			zoom: 12
		});
		var image = '<?php //echo base_url('images/mt-0996-logo.png'); ?>';
		var beachMarker = new google.maps.Marker({
			position: myLallgn,
			map: map,
			icon: image,
			title: 'Jobseeker'
		});
	}
	</script> -->

	<?php include "footer.php"; ?>

	<?php include "scripts.php"; ?>

</body>

</html>
