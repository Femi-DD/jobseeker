<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1><?php echo $user->name; ?></h1>
			<h3 class="color-6 f-normal"><?php echo $user->profession; ?></h3>
			<div class="wrap-img"><img src="<?php echo base_url('images/user-debra-banks-230x230.jpg') ?>" alt="image" class="w-full"></div>
			<p><?php echo $user->bio; ?></p>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="p-30 bg-f box-shadow-d">
					<h2 class="f-20 p-b-10 p-t-0">About</h2>
					<p><?php echo $user->bio; ?></p>
					<table>
						<tr>
							<td><strong>Phone</strong></td>
							<td></td>
						</tr>
					</table>
					<ul class="list-2x list-n-bg">
						<li><strong>Brithday</strong><?php echo $user->dob; ?></li>
						<li><strong>Email</strong><?php echo $user->email; ?></li>
						<li><strong>Phone</strong><?php //echo $user->number; ?></li>
						<!-- <li><strong>Website</strong>www.theme3x.com</li> -->
					</ul>
					<h2 class="f-20 p-b-10">Education</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do eiusmod temp incidunt ut labomet icing elit sed do eiusmod temp incidunt ut labomet co</p>
					<h2 class="f-20 p-b-10">Qualifications</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do eiusmod temp incidunt ut labomet icing elit sed do eiusmod temp incidunt ut labomet co</p>
					<h2 class="f-20 p-b-10">Employment History</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do eiusmod temp incidunt ut labomet icing elit sed do eiusmod temp incidunt ut labomet co</p>
					<h2 class="f-20 p-b-10">Awards</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do eiusmod temp incidunt ut labomet icing elit sed do eiusmod temp incidunt ut labomet co</p>
					<h2 class="f-20 p-b-10">Extracurricular Activities</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do eiusmod temp incidunt ut labomet icing elit sed do eiusmod temp incidunt ut labomet co</p>
					<h2 class="f-20 p-b-10">Work Experience</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing  labore et dolore magna aliqua uat veniama icing elit sed do eiusmod temp incidunt ut labomet icing elit sed do eiusmod temp incidunt ut labomet co</p>
					<h2 class="f-20 p-b-10 selected">Competenciens &amp; Interests<br></h2>
					<ul class="list-1x ln m-l-35">
						<li>Interest in user interface design.</li>
						<li>Web application development experience.</li>
						<li>Experience working on cross-browser platforms.</li>
						<li>Development experience designing object-oriented JavaScript.</li>
						<li>Experience with user interface frameworks such as XUL, Flex and XAML.</li>
						<li>Knowledge of user interface design.</li>
					</ul>
					<?php if(!empty($this->session->userdata['user_data'])) { ?>
						<h2 class="f-20 p-b-10 p-t-0">Saved Jobs</h2>
						<div>
							<?php foreach ($saved_jobs as $key => $value) { ?>
								<div class="border-1x p-20 m-b-10">
									<div class="row">
										<div class="col-sm-12">
											<div class="caption">
												<h3 class="p-0 f-18">
													<a href="<?php echo base_url('job/job_details/').$value->job_id; ?>"></a>
													<span class="m-b-5 color-a pull-right f-14 f-weight-400"><?php echo date_format(date_create($value->dateadded), 'D-M-Y @ g:i A'); ?></span>
												</h3>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
