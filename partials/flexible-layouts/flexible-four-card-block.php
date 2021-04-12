<?php
/*
  ACF Flexible Content - Four Card Block (Using Repeater)
  
  Field Example
  <?php the_sub_field('text'); ?>
*/
?>

<?php if( have_rows('card') ): ?>
    <?php while( have_rows('card') ): the_row(); 

        // Get sub field for card 1
        $image_1 = get_sub_field('image_1');
        $heading_1 = get_sub_field('heading_1');
        $content_1 = get_sub_field('content_1');
        $link_1 = get_sub_field('link_1');

        // Get sub field for card 2
        $image_2 = get_sub_field('image_2');
        $heading_2 = get_sub_field('heading_2');
        $content_2 = get_sub_field('content_2');
        $link_2 = get_sub_field('link_2');

        // Get sub field for card 3
        $image_3 = get_sub_field('image_3');
        $heading_3 = get_sub_field('heading_3');
        $content_3 = get_sub_field('content_3');
        $link_3 = get_sub_field('link_3');

        // Get sub field for card 4
        $image_4 = get_sub_field('image_4');
        $heading_4 = get_sub_field('heading_4');
        $content_4 = get_sub_field('content_4');
        $link_4 = get_sub_field('link_4');
        ?>

<div class="section is-large has-background-grey-lighter">
<!-- acf repeater for card starts here  -->

    <div class="columns is-multiline">
        <div class="column">
            <a href="<?php echo $link_1; ?>" class="card media link-card">
            <div class="image is-2by1 background-image" role="img" style="background-image: url('<?php echo $image_1; ?>')!important;">
            </div>

            <div class="media-content">
                <p class="title is-4"><?php echo $heading_1; ?></p>
                
                <p class="has-text-align-center">
                <?php echo $content_1; ?>
                </p> 
            </div>
            </a>
        </div>

        <div class="column">
            <a href="<?php echo $link_2; ?>" class="card media link-card">
            <div class="image is-2by1 background-image" role="img" style="background-image: url('<?php echo $image_2; ?>')!important;">
            </div>

            <div class="media-content">
                <p class="title is-4"><?php echo $heading_2; ?></p>
                
                <p class="has-text-align-center">
                <?php echo $content_2; ?>
                </p> 
            </div>
            </a>
        </div>


        <div class="column">
            <a href="<?php echo $link_3; ?>" class="card media link-card">
            <div class="image is-2by1 background-image" role="img" style="background-image: url('<?php echo $image_3; ?>')!important;">
            </div>

            <div class="media-content">
                <p class="title is-4"><?php echo $heading_3; ?></p>
                
                <p class="has-text-align-center">
                <?php echo $content_3; ?>
                </p> 
            </div>
            </a>
        </div>
        
        <div class="column">
            <a href="<?php echo $link_4; ?>" class="card media link-card">
            <div class="image is-2by1 background-image" role="img" style="background-image: url('<?php echo $image_4; ?>')!important;">
            </div>

            <div class="media-content">
                <p class="title is-4"><?php echo $heading_4; ?></p>
                
                <p class="has-text-align-center">
                <?php echo $content_4; ?>
                </p> 
            </div>
            </a>
        </div>

       </div> 
<!-- acf repeater for card ends here  -->
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

