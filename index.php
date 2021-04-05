<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 * 
 */

	get_header();

	//get_template_part('partials/acf-flexible-loop'); 
?>

<?php if(function_exists('bcn_display')) : ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">   
    <?php bcn_display();	?>
</div>
<?php endif; ?>

<main id="site-content" role="main" class="main-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-page',get_post_type() );

			get_template_part('template-parts/acf-hero-image-page');             

			get_template_part('partials/acf-flexible-loop');
		}
	}

	?>

	
		<button id="to-top" class="to-top-hidden">
			<i class="fas fa-chevron-up" aria-hidden="true"></i>
		</button>
</main><!-- #site-content -->


<?php get_footer(); ?>
