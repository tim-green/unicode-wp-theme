<?php
/*
  ACF Flexible Content - Feature Content Gold Block
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<div class="section sm has-background-gold feature-gold-block">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-two-thirds-widescreen">
            <?php if( the_sub_field('header') ): ?>
                <h2><?php the_sub_field('header'); ?></h2>
            <?php endif; ?>
            <?php the_sub_field('content'); ?>

            </div>
            <div class="column">
                <img src="<?php the_sub_field('image'); ?>" />
            </div>
        </div>
    </div>
</div>   