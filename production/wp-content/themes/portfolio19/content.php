<a href="<?php echo get_permalink(); ?>" class="project fade">
	<div class="project module spacing-xxl" data-aos="fade-up" >
		<div class="row">
			<div class="col-lg-7 image-block">
				<div class="wrapper">
					<div class="image" style="background-image: url('<?php the_field('thumbnail_image'); ?>');"></div>
				</div>
			</div>
			<div class="content col-lg-5">
				<h4 class="grey"></h4>
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('intro_text'); ?></p>
				<p class="info grey small"><?php the_date(); ?>  |  <?php the_field('read_time'); ?> minutes</p>
			</div>
		</div>
	</div>
</a>
