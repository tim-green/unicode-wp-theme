<?php
/**
 * Template part which is for ACF slider, which is display on the home page
 *
 *
 * @package unicode
 */

?>
<div class="unicode-cta-hero">
<?php if( have_rows('slider_images','option') ): ?>
    <?php while( have_rows('slider_images','option') ): the_row(); 

    // vars
    $image = get_sub_field('image','option');
    $external_image = get_sub_field('external_image','option');
    $heading = get_sub_field('heading','option');
    $content = get_sub_field('content','option');
    $button_text = get_sub_field('button_text','option');
    $button_link = get_sub_field('button_link','option');

    ?>

	<div class="hero is-large">


		<div class="hero-body">
			<div class="background-image"
            style="background-image: url('<?php 
            echo $image; 
            echo $external_image; 
            ?>')
            !important;"
            aria-label="unicode slider">
				            
			</div>
			<div class="container">
				<div class="content">
					<h1> <?php echo $heading; ?></h1>
                    <p><?php echo $content; ?></p>
                    <a href="<?php echo $button_link; ?>" class="unicode-cta-hero__button">
                    <?php echo $button_text; ?>
                    </a>
				</div>
			</div>
		</div>
        <?php endwhile; ?>
	</div>
    <?php endif; ?>
</div>
</div>

