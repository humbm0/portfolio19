<!-- <a href="<?php echo get_permalink(); ?>" class="project fade">
	<div class="project module spacing-xxl" data-aos="fade-up" >
		<div class="row">
			<div class="col-lg-7 image-block">
				<div class="wrapper">
					<div class="image" style="background-image: url('<?php the_field('thumbnail_image'); ?>');"></div>
				</div>
			</div>
			<div class="content col-lg-5">
				<h4 class="grey"></h4>
				<h2><?php the_title(); ?></h2>
				<p><?php the_field('intro_text'); ?></p>
				<p class="info grey small"><?php the_date(); ?></p>
			</div>
		</div>
	</div>
</a> -->

<a href="<?php echo get_permalink(); ?>" class="project fade">
	<div class="project col-md-6 " data-aos="fade-up" >
		<div class="image-block">
			<div class="wrapper">
				<div class="image" style="background-image: url('<?php the_field('thumbnail_image'); ?>');"></div>
			</div>
			<div class="content">
				<h4 class="grey"></h4>
				<h2><?php the_title(); ?></h2>
				<p><?php the_field('intro_text'); ?></p>
				<p class="info grey small"><?php the_date(); ?></p>
			</div>
		</div>
	</div>
</a>

