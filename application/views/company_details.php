<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected"><?php echo $company_profile[0]['name']; ?></h1>
			<h3 class="f-weight-400"><?php echo $company_profile[0]['address'] . ', ' . $company_profile[0]['location']; ?></h3>
			<div class="wrap-img"><img src="<?php echo base_url('images/').$company_profile[0]['logo']; ?>" alt="image" class="w-full"></div>
			<p><?php echo $company_profile[0]['about']; ?></p>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="box-shadow-d p-30 bg-f">
					<div>
						<!-- <p><span class="color-a f-14">Last updated: January 23 2015</span></p>
						<ul class="list-inline">
						<li><i class="fa fa-star color-feda00"></i><i class="fa fa-star m-l-5 color-feda00"></i><i class="fa fa-star m-l-5 color-feda00"></i><i class="fa fa-star m-l-5 color-feda00"></i><i class="fa fa-star m-l-5 color-a"></i></li>
						<li>354 Reviews</li>
						<li>121<i class="fa fa-heart-o m-l-5"></i></li>
					</ul> -->
					<ul class="list list-1x m-t-10">
						<li><strong>Founed </strong><span><?php echo $company_profile[0]['founded']; ?></span></li>
						<li><strong>Company Size </strong><span><?php echo $company_profile[0]['size']; ?> employees</span></li>
						<li><strong>Industry </strong><span><?php echo $company_profile[0]['industry']; ?></span></li>
						<li><strong>Adress </strong><span><?php echo $company_profile[0]['address'] . ', ' . $company_profile[0]['location']; ?></span></li>
						<li><strong>Website </strong><span class="w-150"><?php echo $company_profile[0]['website']; ?></span></li>
					</ul>
					<ul class="list-inline m-t-15 m-b-20">
						<li><a href="#"><i class="fa fa-facebook icon icon-40 rad-3 bg-4f84c4"></i></a></li>
						<li><a href="#"><i class="fa fa-google icon icon-40 rad-3 bg-f2552c"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter icon icon-40 rad-3 bg-95dee3"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram icon icon-40 rad-3 bg-fe718b"></i></a></li>
					</ul>
				</div>
				<div>
					<div></div>
					<h2 class="f-20">About Company</h2>
					<p><?php echo $company_profile[0]['about']; ?></p>
					<h2 class="f-20">What we do</h2>
					<p>You will help Google build next-generation web applications like Gmail, Google Docs, Google Analytics, and the Google eBookstore and eBook readers. As a Front End Engineer at Google, you will specialize in building responsive and elegant web UIs with AJAX and similar technologies.</p>
					<ul class="m-l-40 ln">
						<li>Develops software solutions by studying information needs; conferring with users; studying systems flow, data usage, and work processes; investigating problem areas; following the software development lifecycle.</li>
						<li>Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions.</li>
						<li>Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</li>
						<li>Prepares and installs solutions by determining and designing system specifications, standards, and programming.</li>
						<li>Improves operations by conducting systems analysis; recommending changes in policies and procedures.<p></p><p>Protects operations by keeping information confidential.</p></li>
						<li>Provides information by collecting, analyzing, and summarizing development and service issues.</li>
						<li>Accomplishes engineering and organization mission by completing related results as needed.</li>
					</ul>
					<h2 class="f-20">Our Jobs(<?php echo count($our_jobs); ?>)</h2>
					<div>
						<?php foreach ($our_jobs as $key => $value) { ?>
							<div class="border-1x p-20 m-b-10">
								<div class="row">
									<div class="col-sm-12">
										<div class="caption">
											<h3 class="p-0 f-18">
												<a href="<?php echo base_url('job/job_details/'.$value['job_id'].'/'.str_replace(' ', '-', $value['title'])); ?>"><?php echo $value['title']; ?></a>
												<span class="m-b-5 color-a pull-right f-14 f-weight-400"><?php echo date_format(date_create($value['dateadded']), 'D-M-Y @ g:i A'); ?></span>
											</h3>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
