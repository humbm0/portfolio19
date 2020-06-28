<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>

<?php get_header(); ?>

<div class="page about">
  <div class="container">
      <div class="row spacing-xxl">
        <div class="col-lg-9" data-aos="fade-up">
          <h1>A multidisciplinary designer focused on user experience with a keen interest in humanising complex technology.</h1>
        </div>
        <div class="col-lg-7 col-md-10" data-aos="fade-up" data-aos-delay="1000">
          <p>I am a dynamic and creative UX and product designer with experience of working on international brands, in a fast paced collaborative environment. I turn visions into concepts and translate those concepts into designs that illustrate simplicity despite system complexity. As a hands on individual I apply strategic thinking to deliver end-to-end user experience solutions with a focus on user needs and business goals directly responsible for delivering all aspects of design, from defining customer needs to delivering concepts and prototypes to UI specifications for engineering.
          </p>
          <p>My keen ineterst in the technology that can underpin a seamless and memorable experience has led me to learn front-end development languages such as HTML, CSS, SASS Javascript, PHP and frameworks such as Vue JS and Angular. I use this knowledge not only to bring my own ideas to reality but it allows me to effectively communicate design intent to technical teams and creating high fidelity interaction prototypes.</p>
        </div>
      </div>
      <div class="row spacing-xl" data-aos="fade-up">
        <div class="col-lg-4 col-md-6">
          <h4>Qualification</h4>
          <?php the_field('certifications'); ?>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4>Awards</h4>
          <?php the_field('awards'); ?>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4>Publications</h4>
          <?php the_field('publications'); ?>
        </div>
      </div>
      <div class="row spacing-xxl" data-aos="fade-up">
        <div class="col-md-12 clients">
          <h3>Who I've worked with</h3>
          <div class="images">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/stw.png" alt="">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/ibm.jpg" alt="">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/arcadia.svg" alt="">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/eon.svg" alt="">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/shell.svg" alt="">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/cb.jpg" alt="">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/clients/wills.png" alt="">
          </div>
        </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>
