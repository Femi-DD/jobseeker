<?php if(!defined('BASEPATH')) exit ('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<?php include "head.php"; ?>

<body>

	<div class="preloader"><i class="fa fa-spinner"></i></div>

	<?php include "sidebar.php"; ?>

	<?php include "header.php"; ?>

	<section class="block">
		<div class="container">
			<div class="title-group line-default">
				<h1 class="selected">personal infomation</h1>
				<p>Update your info to give your viewers a great impression about you</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="box p-40">
						<div></div>
						<h4 class="title line-default line-default-left">Personal infomation<br></h4>
						<form>
							<input type="text" class="form-item" placeholder="Location">
							<input type="text" class="form-item" placeholder="Email">
							<input type="text" class="form-item" placeholder="Phone">
							<input type="text" class="form-item" placeholder="Age">
							<select class="form-item">
								<option>Salary</option>
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
							<input type="text" class="form-item" placeholder="Address">
							<input type="text" class="form-item" placeholder="Zip code">
							<input type="text" class="form-item" placeholder="State/Province">
							<input type="text" class="form-item" placeholder="Country">
							<textarea class="form-item h-200 p-15" placeholder="About me"></textarea>
						</form>
					</div>
					<div class="box p-40">
						<div></div>
						<h4 class="title line-default line-default-left">Your photo</h4>
						<div class="p-15 border-1x m-b-15"><input type="file" placeholder=""></div>
						<form><div class="form-group"></div></form>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="box p-40">
						<div></div>
						<h4 class="title line-default line-default-left">Skills<br></h4>
						<form>
							<input type="text" class="form-item" placeholder="Brief biography">
							<input type="text" class="form-item" placeholder="Scholarships">
							<input type="text" class="form-item" placeholder="Study abroad">
							<input type="text" class="form-item" placeholder="Presentations and lectures">
						</form>
					</div>
					<div class="box p-40">
						<div></div>
						<h4 class="title line-default line-default-left">Education</h4>
						<form>
							<select class="form-item">
								<option>Education</option>
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
								<option>Option 5</option>
							</select>
						</form>
					</div>
					<div class="box p-40">
						<div></div>
						<h4 class="title line-default line-default-left">Where have you worked?</h4>
						<form>
							<input type="text" class="form-item" placeholder="Employer">
							<input type="text" class="form-item" placeholder="Address employer">
							<input type="text" class="form-item" placeholder="Job title">
							<input type="text" class="form-item" placeholder="Start date">
							<input type="text" class="form-item" placeholder="End date">
							<textarea class="form-item p-15" placeholder="About me"></textarea>
						</form>
					</div>
					<div class="box p-40">
						<div></div>
						<h4 class="title line-default line-default-left">Social link</h4>
						<form>
							<input type="text" class="form-item" placeholder="Facebook">
							<input type="text" class="form-item" placeholder="Google +">
							<input type="text" class="form-item" placeholder="Twitter">
							<input type="text" class="form-item" placeholder="Instagram">
						</form>
					</div>
				</div>
			</div>
			<a href="#" class="ht-btn bg-4f84c4 pull-right">Save &amp; Update</a>
		</div>
	</section>

	<?php include "footer.php"; ?>

	<?php include "scripts.php"; ?>

</body>

</html>
