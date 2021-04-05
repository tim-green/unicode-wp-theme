<?php
/*
  ACF Flexible Content - Media Content Block
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="section is-large">
		<div class="columns is-multiline">
			<div class="column">
			<?php if( the_field('media') ): ?>
				<figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
					<div class="wp-block-embed__wrapper">
					<?php 
            the_sub_field('media'); 
          ?>
				</figure>
				<?php endif; ?>

				<img src="<?php the_sub_field('image'); ?>" />


			</div>
			<div class="column">
				<h2><?php the_sub_field('header'); ?></h2>
				<?php the_sub_field('content'); ?>
			</div>
		</div>
</div>