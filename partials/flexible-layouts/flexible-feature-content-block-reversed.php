<?php
/*
  ACF Flexible Content - Feature Content Block Reversed
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="uc-feature-story">
    <div class="hero is-medium">
        <div class="hero-image-reversed">
            <span class="background-image" role="img" style="background: url('<?php the_sub_field('image'); ?>');"></span>
        </div>
        <div class="shadow-reversed"></div>

    <div class="hero-body">
        <div class="container">
                <div class="content content-reversed">
                    <h2><?php the_sub_field('header'); ?></h2>

                    <?php the_sub_field('content'); ?>

                    <a href="<?php the_sub_field('button_link'); ?>" class="uc-feature-story__button" rel="noopener noreferrer">
                        <?php the_sub_field('button_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    