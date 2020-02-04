<?php
/*
 * Template Name: Gallery
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>

<div class="container-fluid page other-work">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('other_work') ):

            // loop through the rows of data
            while ( have_rows('other_work') ) : the_row(); ?>

                <!-- display a sub field value -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="slider-for">
                            <?php 
                            $images = get_sub_field('images');
                            $size = 'full';
                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <div class="image" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
                                    <!-- <img class="image" src="<?php echo esc_url($image['sizes']['full']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 text">
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                </div>

        <?php        
            endwhile;
        else :
            // no rows found
        endif;
        ?>

</div>

<?php get_footer(); ?>




<!-- <div class="image" style="background-image: url('<?php the_sub_field('images'); ?>');"></div> -->

