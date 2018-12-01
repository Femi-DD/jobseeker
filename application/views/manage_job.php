<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected">Manage Jobs</h1>
			<p>Update Jobs Openings or Take down filled positions.</p>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="list-2"><!-- Product-item -->
					<a href="<?php echo base_url('company/company_profile') ?>" class="thumb-item">
						<i class="fa fa-file-text-o"></i>
						<h4 class="heading">Update profile<br></h4>
					</a>
					<a href="<?php echo base_url('company/manage_job') ?>" class="thumb-item">
						<i class="fa fa-sticky-note-o"></i>
						<h4 class="heading">Manage jobs<br></h4>
					</a>
					<a href="<?php echo base_url('company/post_job') ?>" class="thumb-item">
						<i class="fa fa-cloud-upload"></i>
						<h4 class="heading">Post job<br></h4>
					</a>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="box p-40">
					<div></div>
					<h4 class="title line-default line-default-left">Jobs<?php echo (count($my_jobs) > 1 ? '('.count($my_jobs).')' : ''); ?><br></h4>
					<?php foreach ($my_jobs as $key => $value) { ?>
						<div class="border-1x p-20 m-b-10">
							<div class="row">
								<div class="col-sm-10">
									<h3 class="p-0 f-16"><a href="<?php echo base_url('job/job_details/'.$value['job_id']) ?>"><?php echo $value['title']; ?></a></h3>
								</div>
								<div class="col-sm-1"><a href="<?php echo base_url('job/edit_job/'.$value['job_id']) ?>"><i class="fa fa-edit"></i></a></div>
								<div class="col-sm-1"><a href="<?php echo base_url('company/job_delete/').$value['job_id']; ?>"><i class="fa fa-remove"></a></i></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
