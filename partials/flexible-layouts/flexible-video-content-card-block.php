<?php
/*
  ACF Flexible Content - Video Content Card Block
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="section is-large has-background-grey-lighter">
	<div class="box p-6">
		<div class="columns is-multiline">
			<div class="column">
				<figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
					<div class="wp-block-embed__wrapper">
					<?php 
            the_sub_field('single_image'); 
            the_sub_field('media'); 
          ?>
				</figure>
			</div>
			<div class="column">
				<h2><?php the_sub_field('header'); ?></h2>
				<?php the_sub_field('content'); ?>
			</div>
		</div>
	</div>
</div>