<?php if( get_field('image') ): ?>

<div class="uni-title-hero">
    <div class="hero is-large">
        <div class="hero-body">
            <div class="background-image" aria-label=""
            style="background-image: url('<?php 
            the_field('image');
            ?>')
            !important;"
            >
                <!-- acf hero background image -->
            </div>

            <div class="container">
                <div class="content">
                    <h1><?php the_field('heading'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>