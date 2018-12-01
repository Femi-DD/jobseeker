<section class="block">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected">Create job</h1>
			<p>Post a job vacancy, it's just a click away!</p>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="list-2"><!-- Product-item -->
					<a href="<?php echo base_url('company/company_details') ?>" class="thumb-item">
						<i class="fa fa-file-text-o"></i>
						<h4 class="heading">Company profile<br></h4>
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
					<h4 class="heading line-default line-default-left m-b-40 p-t-0 f-30 f-weight-500">Create job<br></h4>

					<?php echo form_open(base_url("company/post_job")); ?>

					<?php echo form_input(array("name"=>"title", "value"=>set_value('title'), "class"=>"form-item", "placeholder"=>"Job Title")) ?>
					<?php echo form_error("title");?>

					<select name="jobtype" class="form-item">
						<option value="">Job Type</option>
						<option value="Full Time">FullTime</option>
						<option value="Part-Time">Part-Time</option>
						<option value="Internship">Internship</option>
						<option value="Contract">Contract</option>
					</select>
					<?php echo form_error('jobtype'); ?>

					<select name="category" class="form-item">
						<option value="">Select Job Category</option>
						<option value="Software Developer">Developer</option>
						<?php foreach ($job_categories as $key => $category) { ?>
							<option value="<?php echo $category->category; ?>"><?php echo $category->category; ?></option>
						<?php } ?>
					</select>
					<?php echo form_error('category'); ?>

					<?php $sal_options = array(''=>'Salary',
					'10,000 - 30,000'=>'10,000 - 30,000',		'30,000 - 50,000'=>'30,000 - 50,000',
					'50,000 - 70,000'=>'50,000 - 70,000',		'70,000 - 90,000'=>'70,000 - 90,000',
					'90,000 - 110,000'=>'90,000 - 110,000',	'110,000 - 130,000'=>'110,000 - 130,000',
					'130,000 - 150,000'=>'130,000 - 150,000',	'150,000 - 170,000'=>'150,000 - 170,000',
					'170,000 - 190,000'=>'170,000 - 190,000', '190,000 - 210,000'=>'190,000 - 210,000',
					'210,000 - 230,000'=>'210,000 - 230,000', '230,000 - 250,000'=>'230,000 - 250,000' ) ?>
					<?php echo form_dropdown('salary', $sal_options, '', 'class="form-item"') ?>
					<?php echo form_error('salary'); ?>

					<?php echo form_input(array("name"=>"position", "value"=>set_value('position'), "class"=>"form-item", "placeholder"=>"Position")) ?>
					<?php echo form_error("position");?>

					<?php $exp_options = array(''=>'Experience', '1 Year'=>'1 Year', '2 Year'=>'2 Years', '3 Year'=>'3 Years') ?>
					<?php echo form_dropdown('experience', $exp_options, '', 'class="form-item"') ?>
					<?php echo form_error('experience'); ?>

					<?php $gender_options = array(''=>'Gender', 'Not Specified'=>'Not Specified', 'Female'=>'Female', 'Male'=>'Male') ?>
					<?php echo form_dropdown('gender', $gender_options, '', 'class="form-item"') ?>
					<?php echo form_error('gender'); ?>

					<?php $loc_options = array(''=>'Location', 'OGUN'=>'OGUN', 'LAGOS'=>'LAGOS') ?>
					<?php echo form_dropdown('location', $loc_options, '', 'class="form-item"') ?>
					<?php echo form_error('location'); ?>

					<?php echo form_input(array("name"=>"address", "value"=>set_value('address'), "class"=>"form-item", "placeholder"=>"Address")) ?>
					<?php echo form_error("address");?>

					<?php echo form_textarea(array("name"=>'description', 'class'=>'form-item h-200 p-15', 'placeholder'=>"Job Description", 'value'=>set_value('description'))) ?>
					<?php echo form_error('description') ?>

					<?php echo form_textarea(array("name"=>'qualifications', 'class'=>'form-item h-200 p-15', 'placeholder'=>"Seperate each requirement with a '#' e.g: Should be vast in PHP#Should understand JAVA", 'value'=>set_value('qualifications'))) ?>
					<?php echo form_error('qualifications') ?>

					<?php echo form_textarea(array("name"=>'roles', 'class'=>'form-item h-200 p-15', 'placeholder'=>"Seperate each role with a '#' e.g: Would develop site from scracth#Would tutor newbies", 'value'=>set_value('roles'))) ?>
					<?php echo form_error('roles') ?>

					<?php echo form_submit(array("name"=>"Post Job", "type"=>"submit", "class"=>"ht-btn bg-4f84c4 col-lg-offset-0", "value"=>"Post Job"))?>

					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</section>
