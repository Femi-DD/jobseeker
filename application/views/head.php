<?php
if(!empty($this->session->userdata['user_data'])) {
	$name = $this->session->userdata['user_data'][0]['name'];
} else if (!empty($this->session->userdata['company_data'][0]['name'])) {
	$name = $this->session->userdata['company_data'][0]['name'];
} else {
	$name = 'My Account';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JobSeeker | <?php echo $title; ?></title>
	<!-- jQuery UI -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery/jquery-ui.css') ?>">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap/bootstrap.min.css') ?>">
	<!-- Owl-coursel -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/owl-coursel/owl.carousel.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/owl-coursel/owl.theme.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/owl-coursel/owl.transitions.css') ?>">
	<!-- Font-awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome-4.7.0/css/font-awesome.css') ?>">
	<linkrel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/animate.css') ?>">
	<!-- Fw -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/fw.css') ?>">
	<!-- Style-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style/finder.css') ?>">
</head>

<div class="menu-rs">
	<div class="menu-wrap">
		<div class="r-mv">
			<span></span>
			<span></span>
		</div>
		<ul class="menu-mb">
			<li><a href="<?php echo base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">home</a></li>
			<li class="dropdown user">

				<?php if(!empty($name)) { ?>
					<a href="<?php echo base_url('job/job_listing') ?>" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></a>
				<?php } else { ?>
					<a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Accounts</a>
				<?php } ?>

				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<?php if(!empty($this->session->userdata['user_data'])) { ?>
						<li><a href="<?php echo base_url('resume/resume_details/'.$this->session->userdata['user_data'][0]['id']) ?>">Dashboard</a></li>
						<li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
					<?php } else if(!empty($this->session->userdata['company_data'])) { ?>
						<li><a href="<?php echo base_url('company/manage_job') ?>">Dashboard</a></li>
						<li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
					<?php } else { ?>
						<li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
						<li><a href="<?php echo base_url('user/signup')?>">Sign Up</a></li>
					<?php } ?>
				</ul>
			</li>
		</li>
		<li class="dropdown active">
			<a href="<?php echo base_url('job/job_category') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs</a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo base_url('job/job_listing') ?>">job listings</a></li>
				<li><a href="<?php echo base_url('job/job_category') ?>">job category</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resumes</a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo base_url('resume/resume_listing') ?>">resume listings</a></li>
				<?php if(!empty($this->session->userdata['user_data'])) { ?>
					<li><a href="<?php echo base_url('resume/resume_details') ?>">resume details</a></li>
					<li><a href="<?php echo base_url('resume/edit_profiles') ?>">edit profiles</a></li>
				<?php } ?>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">company</a>
			<ul class="dropdown-menu">
				<?php if(!empty($this->session->userdata['company_data'])) { ?>
					<li><a href="<?php echo base_url('company/post_job') ?>">post job</a></li>
					<li><a href="<?php echo base_url('company/manage_job') ?>">manage job</a></li>
					<li><a href="<?php echo base_url('company/company_details/').$this->session->userdata['company_data'][0]['id']; ?>">view company profile</a></li>
					<li><a href="<?php echo base_url('company/company_profile') ?>">Edit company profile</a></li>
				<?php } else { ?>
					<li><a href="<?php echo base_url('company/company_signin') ?>">company sign in</a></li>
					<li><a href="<?php echo base_url('company/company_signup') ?>">company sign up</a></li>
				<?php } ?>
				<li><a href="<?php echo base_url('company/company_listing') ?>">company listings</a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url('blog/blog_page') ?>">blog</a></li>
		<li><a href="<?php echo base_url('app/about') ?>">about</a></li>
		<li><a href="<?php echo base_url('help/help_page') ?>">help</a></li>
	</ul>
</div>
</div>

<header class="header-absolute">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hidden-xs hidden-sm">
					<ul class="top-link">
						<li><a href="mailto:info@jobseeker.com"><i class="fa fa-envelope-o m-r-5"></i>info@jobseeker.com</a></li>
						<li><a href="tel:+2348189456784"><i class="fa fa-phone m-r-5"></i>+234 818 945 6784</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<ul class="top-link pull-right">
						<li><a href="<?php echo base_url('help/help_page') ?>">Help center</a></li>
						<li class="dropdown user">
							<?php if($name) { ?>
								<a href="<?php echo base_url('job/job_listing') ?>" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></a>
							<?php } else { ?>
								<a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
							<?php } ?>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<?php if(!empty($this->session->userdata['user_data'])) { ?>
									<li><a href="<?php echo base_url('resume/resume_details') ?>">Dashboard</a></li>
									<li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
								<?php } else if(!empty($this->session->userdata['company_data'])) { ?>
									<li><a href="<?php echo base_url('company/manage_job') ?>">Dashboard</a></li>
									<li><a href="<?php echo base_url('app/logout')?>">Logout</a></li>
								<?php } else { ?>
									<li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
									<li><a href="<?php echo base_url('user/signup')?>">Sign Up</a></li>
								<?php } ?>
							</ul>
						</li>
						<li class="menu-btn"><i class="fa fa-bars f-14 icon icon-20"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main-header p-b-20 p-t-20">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<a href="<?php echo base_url() ?>" class="logo m-t-10 m-b-10">
						<img src="<?php echo base_url('images/mt-0996-logo.png')?>" alt="image" class="pull-left m-r-5 w-40">
						<h2 class="f-25 f-weight-300 f-family-poppins text-uppercase p-t-10 p-b-10">Job<strong class="f-weight-600 color-4f84c4">Seeker</strong></h2>
					</a>
				</div>

				<div class="col-sm-7 hidden-xs hidden-sm pull-right text-right">
					<nav id="holder_mn" class="menu-nav">
						<ul>
							<li><a href="<?php echo base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">home</a></li>
							<li class="dropdown active">
								<a href="<?php echo base_url('job/job_category') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('job/job_listing') ?>">job listings</a></li>
									<li><a href="<?php echo base_url('job/job_category') ?>">job category</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resumes</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('resume/resume_listing') ?>">resume listings</a></li>
									<?php if(!empty($this->session->userdata['user_data'])) { ?>
										<li><a href="<?php echo base_url('resume/edit_profiles') ?>">edit profiles</a></li>
									<?php } ?>
								</ul>
							</li>
							<?php if(!!empty($this->session->userdata['user_data'])) { ?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">company</a>
									<ul class="dropdown-menu">
										<?php if(!empty($this->session->userdata['company_data'])) { ?>
											<li><a href="<?php echo base_url('company/post_job') ?>">post job</a></li>
											<li><a href="<?php echo base_url('company/manage_job') ?>">manage job</a></li>
											<li><a href="<?php echo base_url('company/company_profile') ?>">Edit company profile</a></li>
											<li><a href="<?php echo base_url('company/company_details/').$this->session->userdata['company_data'][0]['id']; ?>">view company profile</a></li>
										<?php } else { ?>
											<li><a href="<?php echo base_url('company/company_signin') ?>">company sign in</a></li>
											<li><a href="<?php echo base_url('company/company_signup') ?>">company sign up</a></li>
										<?php } ?>
										<li><a href="<?php echo base_url('company/company_listing') ?>">company listings</a></li>
									</ul>
								</li>
							<?php } else {}?>
							<li><a href="<?php echo base_url('blog/blog_page') ?>">blog</a></li>
							<li><a href="<?php echo base_url('app/about') ?>">about</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<?php if($title != 'Hello Youngster!' && $title != 'Signup') { ?>
	<!-- <section class="p-t-50 p-b-0 bg-f" data-image-src="<?php echo base_url('images/transport-2203647_960_720.jpg'); ?>"> -->
	<div class="container">
		<div class="p-40 p-xs-20 bg-4f84c4">
			<div class="rad-0 w-full no-bg">
				<div class="row m-0">
					<div class="col-sm-11 p-5 p-t-0">
						<div class="row m-0">
							<div class="col-sm-8 p-5"><input type="text" class="form-item form-item-3x no-border m-b-0 rad-3 p-l-20" placeholder="What job you are looking for?"></div>
							<div class="col-sm-4 p-5"><input type="text" class="form-item form-item-3x no-border m-b-0 rad-3 p-l-20" placeholder="City, provide, street"></div>
						</div>
					</div>
					<div class="col-sm-1 p-5 p-l-0 p-xs-10">
						<button class="ht-btn ht-btn-3x bg-dc4c46 pull-right text-center p-l-25 p-r-25 m-t-0 rad-3 w-full" type="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
			<div class="max-w-900"></div>
		</div>
	</div>
</section>
<?php } ?>

<body>

	<div class="preloader"><i class="fa fa-spinner"></i></div>
