<section class="block-2 job bg-fa">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected"><?php echo count($resumes); ?> Resumes found</h1>
			<p>Young, Brilliant and Talented Minds. All in one place!</p>
		</div>
		<div class="row">
			<div class="col-sm-4"><!-- Blog-item -->
				<div class="bg-dc4c46 thumb-item p-b-40">
					<h4 class="heading p-t-0 text-left">Filter</h4>
					<form>
						<select class="form-item form-item-3x no-border">
							<option>Experience</option>
							<option>1 year</option>
							<option>2 year</option>
							<option>3 year</option>
							<option>Not require</option>
							<option>Option 5</option>
						</select>
						<select class="form-item form-item-3x no-border">
							<option>Industry</option>
							<option>Accounting</option>
							<option>Health Care</option>
							<option>Pharmaceutical</option>
							<option>Business Development</option>
							<option>Restaurant</option>
						</select>
						<select class="form-item form-item-3x no-border">
							<option>Type job</option>
							<option>Full time</option>
							<option>Part time</option>
						</select>
						<select class="form-item form-item-3x no-border">
							<option>Age</option>
							<option>18 - 25</option>
							<option>26 - 30</option>
						</select>
						<select class="form-item form-item-3x no-border">
							<option>Location</option>
							<option>Arizona</option>
							<option>Alaska</option>
							<option>California</option>
							<option>Lowa</option>
							<option>Kentucky</option>
						</select>
						<input type="text" class="form-item form-item-3x no-border" placeholder="Keywords">
						<div class="form-group m-b-0"><a href="#" class="ht-btn ht-btn-3x bg-1 w-full text-center m-t-5">Search</a></div>
					</form>
				</div>
				<div class="box">
					<h3 class="p-t-0 line-default line-default-left f-weight-500">Tips for Job</h3>
					<ul class="list list-category">
						<li><a href="#">The Ultimate Interview Guide</a></li>
						<li><a href="#">7 Interview Tips That Will Help You Get the Job</a></li>
						<li><a href="#">How To Write A Curriculum Vitae</a></li>
						<li><a href="#">10 tips to improve interview performance</a></li>
						<li><a href="#">CV Templates and Examples</a></li>
						<li><a href="#">Job Interview Questions and Interview Tips</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">

				<?php foreach ($resumes as $key => $value) { ?>
					<div class="box-item">
						<div class="row">
							<div class="col-sm-2 text-center">
								<a href="#" class="thumb-img"><img src="../images/user1.jpg" alt="image"></a>
							</div>
							<div class="col-sm-10">
								<h3 class="heading p-b-0 p-t-0">
									<a href="<?php echo base_url('resume/resume_details/'.$value->id) ?>"><?php echo $value->name; ?></a>
									<span><?php echo date_format(date_create($value->dateadded), 'd-M-Y @ g:i A'); ?></span>
								</h3>
								<h5 class="f-weight-300 p-t-10 p-b-10"><?php echo $value->profession; ?></h5>
								<p><?php echo $value->bio; ?></p>
								<div class="f-weight-400">Skill: <span class="color-9">PHP, My Sql, HTML5, CSS3, Javascript</span></div>
							</div>
						</div>
						<div class="border-1x p-10 m-t-15 bg-f">
							<div class="row color-9">
								<div class="col-sm-4">
									<div class="p-5"><i class="fa fa-dot-circle-o m-r-5"></i><?php echo $value->location; ?>, Nigeria</div>
								</div>
								<div class="col-sm-4">
									<div class="p-5"><i class="fa fa-money m-r-5"></i>$45 / hour.</div>
								</div>
								<div class="col-sm-4">
									<div class="p-5"><i class="fa fa-graduation-cap m-r-5"></i><?php echo $value->latest_degree; ?></div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

				<nav aria-label="Page navigation" class="m-t-20">
					<ul class="pagination ht-pagination">
						<?php echo $this->pagination->create_links(); ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
