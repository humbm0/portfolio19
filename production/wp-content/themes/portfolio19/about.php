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
          <p>I am a dynamic and creative UX and product designer with experience of working on international brands, in a fast paced collaborative environment. As a hands on individual I apply strategic thinking to deliver end-to-end user experience solutions with a focus on user needs and business goals directly responsible for delivering all aspects of design, from defining customer needs to delivering concepts and prototypes to UI specifications for engineering.
          </p>
          <p>I turn visions into concepts and translate those concepts into designs that illustrate simplicity despite system complexity. I have experience working with both on and off shore teams to take concepts through from concept to production. Using my knowledge in front-end development languages such as HTML, CSS, Javascript and SASS I am able to effectively communicate design intent to technical teams as well as creating high fidelity interaction prototypes.</p>
        </div>
      </div>
      <div class="row spacing-xxl" data-aos="fade-up">
        <div class="col-lg-4 col-md-6">
          <h4>Experience</h4>
          <?php the_field('experience'); ?>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4>Education</h4>
          <?php the_field('education'); ?>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4>Certifications</h4>
          <?php the_field('certifications'); ?>
          <h4>Awards</h4>
          <?php the_field('awards'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <h3>Publications and conferences</h3>
          <?php the_field('publications'); ?>
        </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>
