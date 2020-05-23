<div class="project" data-aos="fade-up">
	<a href="<?php echo get_permalink(); ?>">
		<div class="image-block">
			<div class="wrapper">
				<div class="image" style="background-image: url('<?php the_field('thumbnail_image'); ?>');"></div>
			</div>
			<div class="content">
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('intro_text'); ?></p>
				<p class="info grey small"><?php the_date(); ?></p>
			</div>
		</div>
	</a>
</div>