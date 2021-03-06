<?php
/*
 * Template Name: Project Page
 * Template Post Type: post, page, product
 */

 get_header();  ?>

<div class="progress-container">
  <div class="progress-bar" id="myBar"></div>
</div>

<div class="">
   <div class="container page">
     <div class="row">
       <div class="col-md-8 intro-content spacing-xxxl" data-aos="fade-up">
         <a class="l-para" href="<?php echo get_home_url(); ?>"><p class="l-para"><span class="arrow-back"><ion-icon name="arrow-back"></ion-icon></span>Back to projects</p></a>
         <h1><?php the_title(); ?></h1>
         <p class="l-para"><?php the_field('intro_text'); ?></p>
       </div>
     </div>
   </div>

   <div class="container-fluid">
     <div class="row">
       <div class="project-image" style="background-image: url('<?php the_field('hero'); ?>');" data-aos="fade-up" data-aos-offset="300"></div>
     </div>
   </div>

   <div class="overview">
     <div class="container">
       <div class="row">
         <div class="col-lg-6" data-aos="fade-up">
           <h3>Overview</h3>
           <p><?php the_field('overview'); ?></p>
         </div>
         <div class="col-lg-5 offset-lg-1" data-aos="fade-up" data-aos-delay="600">
           <h3>Team</h3>
           <?php the_field('team'); ?>
         </div>
         <!-- <div class="col-md-3">
           <h3>Launch</h3>
           <p><?php the_field('launch_date'); ?></p>
         </div> -->
       </div>
     </div>
   </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 project-content" data-aos="fade-up" data-aos-offset="300">
        <?php
  			/* Start the Loop */
  			while ( have_posts() ) :
  				the_post();

  				the_content();

  			endwhile; // End of the loop.
  			?>
      </div>
    </div>
  </div>


  <?php

  $images = get_field('gallery');
  $size = 'full'; // (thumbnail, medium, large, full or custom size)

  if( $images ): ?>

  <div class="masonry">
    <?php foreach( $images as $image ): ?>
      <div class="item"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
    <?php endforeach; ?>
  </div>
  
  <?php endif; ?>


  <?php
    get_template_part( 'nextProject', get_post_format() );
  ?>
 
            
</div>

<script type="text/javascript">
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>

<?php get_footer(); ?>
