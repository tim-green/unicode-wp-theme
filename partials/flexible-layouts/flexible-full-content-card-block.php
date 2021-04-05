<?php
/*
  ACF Flexible Content - Full Content Card Block
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="section is-large has-background-grey-lighter">
	<div class="box p-6">
		<div class="columns is-multiline">
			<div class="column">
				<?php the_sub_field('content'); ?>
			</div>
		</div>
	</div>
</div>