<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected"><?php echo $theJob[0]['title']; ?></h1>
			<h3><?php echo $theCompany[0]['name'] . ', ' . $theCompany[0]['location']; ?></h3>
			<p class="under-line p-b-20">We really hope you get the job!</p>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<div class="box-item p-30 box-shadow-d">
					<h3 class="f-20">Basic Information</h3>
					<ul class="list-2x list-n-bg">
						<li><strong>Job Title:</strong><?php echo $theJob[0]['title']; ?><br /></li>
						<li><strong>Position:</strong><?php echo $theJob[0]['position']; ?><br /></li>
						<li><strong>Job Type:</strong><?php echo $theJob[0]['jobtype']; ?><br /></li>
						<li><strong>Job Category:</strong><?php echo $theJob[0]['category']; ?><br /></li>
						<li><strong>Job ID:</strong><?php echo $theJob[0]['job_id']; ?><br /></li>
						<li><strong>Salary:</strong><?php echo $theJob[0]['salary']; ?><br /></li>
						<li><strong>Experience:</strong><?php echo $theJob[0]['experience']; ?><br /></li>
						<li><strong>Age:</strong><?php //echo $theJob[0]['age']; ?><br /></li>
						<li><strong>Location:</strong><?php echo $theJob[0]['location']; ?>,&nbsp;<?php echo $theJob[0]['address']; ?></li>
					</ul>
					<h2 class="f-20">Job Description</h2>
					<p><?php echo $theJob[0]['description']; ?></p>
					<h2 class="f-20">Job Role</h2>
					<p>Develops information systems by studying operations; designing, developing, and installing software solutions; supports and develops software team.</p>
					<ul class="m-l-40 ln">
						<li>Develops software solutions by studying information needs; conferring with users; studying systems flow, data usage, and work processes; investigating problem areas; following the software development lifecycle.</li>
						<li>Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions.</li>
						<li>Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</li>
						<li>Prepares and installs solutions by determining and designing system specifications, standards, and programming.</li>
						<li>Improves operations by conducting systems analysis; recommending changes in policies and procedures.<p></p><p>Protects operations by keeping information confidential.</p></li>
						<li>Provides information by collecting, analyzing, and summarizing development and service issues.</li>
						<li>Accomplishes engineering and organization mission by completing related results as needed.</li>
					</ul>
					<h2 class="f-20">Qualifications required</h2>
					<ul class="list-1x m-l-40 ln">
						<?php $quals = explode('#', $theJob[0]['qualifications']);
						foreach ($quals as $key => $item) { ?>
							<li><?php echo $item; ?></li>
						<?php } ?>
					</ul>
				</div>
				<ul class="list-inline m-t-20">
					<li><a href="#"><i class="fa fa-facebook icon icon-40 rad-3 bg-4f84c4"></i></a></li>
					<li><a href="#"><i class="fa fa-google icon icon-40 rad-3 bg-f2552c"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter icon icon-40 rad-3 bg-95dee3"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram icon icon-40 rad-3 bg-fe718b"></i></a></li>
				</ul>
				<ul class="list-inline m-t-20">
					<li><a href="#" class="ht-btn bg-00c400">Apply for this job</a></li>
					<li><a href="#" class="ht-btn bg-4f84c4 m-t-20 m-b-20">Save</a></li>
				</ul>
				<!-- <a href="#" class="ht-btn bg-00c400 m-t-20 m-b-20 m-r-15">Apply for this job</a> -->
			</div>
			<div class="col-md-5"><!-- Product-item -->
				<div class="box-item p-30 box-shadow-d">
					<img src="<?php echo base_url('images/').$theCompany[0]['logo']; ?>" alt="image" class="m-b-10 w-50">
					<h2 class="f-30 f-xs-20 p-0"><?php echo $theCompany[0]['name']; ?></h2>
					<!-- <div><span class="color-a f-14">Last updated: January 23 2015</span></div> -->
					<!-- <ul class="list-inline m-t-5">
					<li><i class="fa fa-star color-feda00"></i><i class="fa fa-star m-l-5 color-feda00"></i><i class="fa fa-star m-l-5 color-feda00"></i><i class="fa fa-star m-l-5 color-feda00"></i><i class="fa fa-star m-l-5 color-a"></i></li>
					<li>354 Reviews</li>
					<li>121<i class="fa fa-heart-o m-l-5"></i></li>
				</ul> -->
				<ul class="list list-1x m-t-20">
					<table>
						<tr>
							<td><strong>Founed</strong></td>
							<td><li><?php echo $theCompany[0]['founded']; ?></li></td>
						</tr>
						<tr>
							<td><strong>Company Size</strong></td>
							<td><li><span><?php echo $theCompany[0]['size']; ?> employees</span></li></td>
						</tr>
						<tr>
							<td><strong>Industry</strong></td>
							<td><li><?php echo $theCompany[0]['industry']; ?></li></td>
						</tr>
						<tr>
							<td><strong>Email</strong></td>
							<td><li><span><?php echo $theCompany[0]['email']; ?></span></li></td>
						</tr>
						<tr>
							<td><strong>Phone</strong></td>
							<td><li><span><?php echo $theCompany[0]['phone']; ?></span></li></td>
						</tr>
						<tr>
							<td><strong>Adress</strong></td>
							<td><li><?php echo $theCompany[0]['address'] . ', ' . $theCompany[0]['location']; ?>.</li></td>
						</tr>
						<tr>
							<td><strong>Website</strong></td>
							<td><li><a href="<?php echo $theCompany[0]['website']; ?>"><?php echo $theCompany[0]['website']; ?></a></li></td>
						</tr>
						<tr>
							<td><strong>About</strong></td>
							<td><li><span><?php echo $theCompany[0]['about']; ?></span></li></td>
						</tr>
					</table>
				</ul>
			</div>
			<?php if(!empty($this->session->userdata['user_data'])) { ?>
				<div class="box-item p-30 box-shadow-d">
					<h3 class="p-t-0 line-default line-default-left">My account</h3>
					<div class="border-1x p-15 m-t-ab-1 m-b-15">
						<h3 class="p-0 p-b-5 f-16"><a href="#">IT Manager/Systems Administrator</a></h3>
						<div class="color-a f-14">January 23 2015</div>
					</div>
					<div class="border-1x p-15 m-t-ab-1 m-b-15">
						<h3 class="p-0 p-b-5 f-16"><a href="#">Department Systems IT manager</a></h3>
						<div class="color-a f-14">January 23 2015</div>
					</div>
					<div class="border-1x p-15 m-t-ab-1 m-b-15">
						<h3 class="p-0 p-b-5 f-16"><a href="#">IT Manager - BA and QA</a></h3>
						<div class="color-a f-14">January 23 2015</div>
					</div>
					<div class="border-1x p-15 m-t-ab-1 m-b-15">
						<h3 class="p-0 p-b-5 f-16"><a href="#">Technical support Representative</a></h3>
						<div class="color-a f-14">January 23 2015</div>
					</div>
					<a href="#" class="ht-btn m-t-20 bg-4f84c4">View all Jobs</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
</section>
