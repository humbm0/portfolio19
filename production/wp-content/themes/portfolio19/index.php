<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="animsition">
  <div class="home page">


		<div class="container">
      <div class="row">
        <div class="col-md-6 intro-content spacing-xxxl">
          <h1><?php the_field('title', get_option('page_for_posts')); ?></h1>
          <p class="l-para"><?php the_field('sub_text'); ?>👋</p>
          <div class="music-module">
            <p><img src="./img/music.svg" alt=""> <span>Currently listening to</span> - <?php the_field('listening_to'); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- <?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?> -->



      <div class="contact-block">
        <div class="row">
          <div class="col-md-6 offset-md-3 content">
            <h2>Let’s work together…</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis leo vel nibh facilisis ullamcorper.</p>
            <a href="#" class="primary-btn">Say hello!</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>
