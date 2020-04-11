<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>

<?php get_header(); ?>

<div class="">
  <div class="home page">

    <div class="container ">
      <div class="row">
        <div class="col-lg-9 col-md-10 intro-content spacing-xxxl" data-aos="fade-up">
          <h1><?php the_field('title'); ?></h1>
        </div>
      </div>
    </div>

    <div class="container">

      <?php
      $args = array( 
        'numberposts' => 7 
      );
      $lastposts = get_posts( $args );
      foreach($lastposts as $post) : setup_postdata($post);
        get_template_part( 'content', get_post_format() );
      ?>
      <?php endforeach; ?>

      <div class="contact-block">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 content">
            <h2>Let’s work together…</h2>
            <p>I'm always interested in new ideas and exciting projects.</p>
            <a href="mailto:maxhumberstonedesigns@gmail.com" target="_top" class="primary-btn">Say hello!</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>




