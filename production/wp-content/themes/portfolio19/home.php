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
        <div class="col-lg-6 col-md-9 intro-content spacing-xxxl">
          <h1><?php the_field('title'); ?></h1>
          <p class="l-para"><?php the_field('sub_text'); ?>👋</p>
          <div class="music-module">
            <p><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/music.svg" alt=""> <span>Currently listening to</span> - <?php the_field('listening_to'); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <?php
      $args = array( 'numberposts' => 4 );
      $lastposts = get_posts( $args );
      foreach($lastposts as $post) : setup_postdata($post);
        get_template_part( 'content', get_post_format() );
      ?>
      <?php endforeach; ?>

      <div class="contact-block">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 content">
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
