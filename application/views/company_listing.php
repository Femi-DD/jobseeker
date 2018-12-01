<section class="block-2 job bg-fa">
	<div class="container">
		<div class="title-group line-default">
			<h1 class="selected"><?php echo count($company); ?> companies</h1>
			<!-- <h3 class="f-normal">Job<strong>Seeker</strong></h3> -->
			<p>Search availaible jobs at your dream company!</p>
		</div>
		<div class="row">
			<div class="col-md-8"><!-- Blog-item -->
				<?php foreach ($company as $key => $value) { ?>
					<div class="box-item">
						<div class="row">
							<div class="col-sm-2 text-center">
								<a href="#" class="thumb-img"><img src="<?php echo base_url('images/').$value['logo']; ?>" alt="image"></a>
							</div>
							<div class="col-sm-13">
								<h3 class="heading p-b-10 p-t-0">
									<a href="<?php echo base_url('company/company_details/'.$value['id'].'/'.str_replace(' ', '-', $value['name'])); ?>"><?php echo $value['name']; ?></a>
									<a href="#"></a>
								</h3>
								<b class="f-16"><?php echo $value['address'] . ', ' . $value['location']; ?>.</b>
								<p class="m-b-15 m-t-10"><?php echo $value['industry']; ?></p>
								<div class="border-1x p-5 p-l-15 p-r-15 bg-f">
									<div class="row color-9">
										<div class="col-sm-4">
											<div class="p-5"><a href="tel:<?php echo $value['phone']; ?>"><i class="fa fa-phone m-r-5"></i><?php echo $value['phone']; ?></a></div>
										</div>
										<div class="col-sm-4">
											<div class="p-5"><a href="mailto:<?php echo $value['email']; ?>"><i class="fa fa-envelope m-r-5"></i><?php echo $value['email']; ?></a></div>
										</div>
										<div class="col-sm-4">
											<div class="p-5"><a href="http://<?php echo $value['website']; ?>" target="_blank" rel="nofollow"><i class="fa fa-globe m-r-5"></i><?php echo $value['website']; ?></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<nav aria-label="Page navigation">
					<ul class="pagination ht-pagination">
						<li><a href="#" aria-label="Previous"><i class="fa fa-angle-double-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" aria-label="Next"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-4"><!-- Product-item -->
				<div class="box bg-fd">
					<h3 class="p-t-0 line-default line-default-left f-weight-500">Filter</h3>
					<form>
						<select class="form-item form-item-1x no-border">
							<option>Industry</option>
							<option>Accounting</option>
							<option>Health Care</option>
							<option>Pharmaceutical</option>
							<option>Business Development</option>
							<option>Restaurant</option>
						</select>
						<select class="form-item form-item-1x no-border">
							<option>Location</option>
							<option>Arizona</option>
							<option>Alaska</option>
							<option>California</option>
							<option>Lowa</option>
							<option>Kentucky</option>
						</select>
						<!-- <button>Search</button> -->
						<a href="#" class="ht-btn ht-btn-3x bg-1 w-full text-center m-t-5">Search</a>
						<div class="form-group m-b-0"></div>
					</form>
				</div>
				<div class="box p-30 p-l-40 p-r-40">
					<div class="row">
						<div class="col-sm-6 p-5">
							<div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log3.png') ?>" alt="image" class="w-full"></div>
						</div>
						<div class="col-sm-6 p-5">
							<div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log4.png') ?>" alt="image" class="w-full"></div>
						</div>
						<div class="col-sm-6 p-5">
							<div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log5.png') ?>" alt="image" class="w-full"></div>
						</div>
						<div class="col-sm-6 p-5">
							<div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log7.png') ?>" alt="image" class="w-full"></div>
						</div>
						<div class="col-sm-6 p-5">
							<div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log6.png') ?>" alt="image" class="w-full"></div>
						</div>
						<div class="col-sm-6 p-5">
							<div class="p-20 border-1x rad-3 bg-f"><img src="<?php echo base_url('images/log1.png') ?>" alt="image" class="w-full"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
