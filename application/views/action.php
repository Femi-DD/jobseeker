<section class="block">

	<?php if(!empty($message)) { ?>

		<div class="container">
			<div class="box text-center p-t-100 p-b-100 p-xs-20 m-b-0">
				<h2 class="f-60 f-xs-30 f-bold text-uppercase f-family-poppins p-b-10 p-t-0 color-4f84c4 line-default selected"><?php echo $message['status']; ?></h2>
				<h2 class="f-30 p-t-0 f-weight-400"><?php echo $message['initial_text']; ?></h2>
				<p><?php echo $message['final_text']; ?></p>
			</div>
			<div></div>
		</div>

	<?php } else { ?>

		<div class="container">
			<div class="box text-center p-t-100 p-b-100 p-xs-20 m-b-0">
				<h2 class="f-60 f-xs-30 f-bold text-uppercase f-family-poppins p-b-10 p-t-0 color-4f84c4 line-default selected">Hell There!</h2>
				<h2 class="f-30 p-t-0 f-weight-400">Need something? Use the menu above.</h2>
				<p>Bye Bye!</p>
			</div>
			<div></div>
		</div>

	<?php } ?>

</section>
