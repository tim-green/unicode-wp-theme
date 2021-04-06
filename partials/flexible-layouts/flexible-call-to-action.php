<?php
/*
  ACF Flexible Content - Call to Action Block
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="uc-cta-banner uc-cta-banner-image background-image" style="background-image: url('<?php the_sub_field('image'); ?>')!important;" aria-label="call to action">
    <div class="container">
        <a href="<?php the_sub_field('button_link'); ?>" class="uc-cta-banner-image__button" rel="noopener noreferrer">
            <?php the_sub_field('button_text'); ?>
        </a>
    </div>
</div>
