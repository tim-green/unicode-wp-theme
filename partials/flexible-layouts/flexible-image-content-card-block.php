<?php
/*
  ACF Flexible Content - Image + Content Card Block
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="section is-large has-background-grey-lighter">
	<div class="box p-6">
		<div class="columns is-multiline">
			<div class="column">
					<img src="<?php the_sub_field('single_image'); ?>" />
			</div>
			<div class="column">
				<h2><?php the_sub_field('header'); ?></h2>
				<?php the_sub_field('content'); ?>
			</div>
		</div>
	</div>
</div>