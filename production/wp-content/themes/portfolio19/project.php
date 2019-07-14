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
         <a class="l-para" href="<?php echo get_home_url(); ?>"><p class="l-para">Back to projects</p></a>
         <h1><?php the_title(); ?></h1>
         <p class="l-para"><?php the_field('intro_text'); ?></p>
       </div>
     </div>
   </div>

   <div class="container-fluid">
     <div class="row">
       <div class="project-image" style="background-image: url('<?php the_field('thumbnail_image'); ?>');" data-aos="fade-up" data-aos-offset="300"></div>
     </div>
   </div>

   <div class="overview spacing-xxxl">
     <div class="container">
       <div class="row">
         <div class="col-md-6" data-aos="fade-up">
           <h3>Overview</h3>
           <p><?php the_field('overview'); ?></p>
         </div>
         <div class="col-md-5 offset-md-1" data-aos="fade-up" data-aos-delay="600">
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
      <div class="col-md-8 offset-md-2 project-content" data-aos="fade-up" data-aos-offset="300">
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