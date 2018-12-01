<section class="block-2 bg-fa job tamxxxx">
	<div class="container">
		<div class="title-group line-default line-default-c">
			<h1 class="selected">Browse Jobs by category</h1>
			<p>Search industries faster with our lettered categories.</p>
		</div>
		<div class="row">
			<?php $count=1; if(!empty($categories) && !empty($categories)) { for($l = 'A'; $l <= 'Z'; $l++) { ?>
				<div class="col-sm-4">
					<div class="box">
						<h3 class="p-t-0"><a href=""><?php echo $l; ?></a><br></h3>
						<ul class="list list-category">
							<?php foreach($categories as $key => $value) { if($l == $value['pre']) { $icon = $value['icon']; ?>
							<li><a href="<?php echo base_url('job/job_filter/').$value['category']; ?>"><?php echo $value['category']; echo "<i style='color:red; font-size:20px' class='$icon pull-right'></i>"; ?></a></li>
						<?php } } ?>
					</ul>
				</div>
			</div>
			<?php if($count == 3){ echo "<div class='clearfix'></div>"; $count = 0;} if($l == 'Z'){break;} $count++; } } ?>
		</div>
	</div>
</section>
