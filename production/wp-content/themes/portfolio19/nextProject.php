<div class="container next-project">

	<h4>Next project</h4>
	
		<?php $prev_post = get_adjacent_post( true, '', true ); ?>
		<?php if ( is_a( $prev_post, 'WP_Post' ) ) { ?>
			<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
				<div class="row">
					<div class="col-md-6 item">
						<img src="<?php the_field('thumbnail_image', $prev_post->ID); ?>" alt="">
					</div>
					<div class="col-md-6">
						<h3><?php echo get_the_title( $prev_post->ID ); ?></h3>
						<p><?php the_field('intro_text', $prev_post->ID); ?></p>
						<p class="info grey small"><?php the_date($prev_post->Date); ?>  |  <?php the_field('read_time', $prev_post->ID); ?> minutes</p>
					</div>
				</div>
			</a>
		<?php } else { ?>
			<?php
				$args = array( 'numberposts' => 1 );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
					<div class="row">
						<div class="col-md-6 item">
							<img src="<?php the_field('thumbnail_image', $prev_post->ID); ?>" alt="">
						</div>
						<div class="col-md-6">
							<h3><?php echo get_the_title( $prev_post->ID ); ?></h3>
							<p><?php the_field('intro_text', $prev_post->ID); ?></p>
							<p class="info grey small"><?php the_date($prev_post->ID); ?>  |  <?php the_field('read_time', $prev_post->ID); ?> minutes</p>
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		<?php } ?>	
				
</div>





<!-- <?php $next_post = get_adjacent_post( true, '', false ); ?>
	<?php if ( is_a( $next_post, 'WP_Post' ) ) {  ?>
	<div class="col-md-6 item">
		<a href="<?php echo get_permalink( $next_post->ID ); ?>">
			<img src="<?php the_field('thumbnail_image', $next_post->ID); ?>" alt="">
			<h3><?php echo get_the_title( $next_post->ID ); ?></h3>
			<p><?php the_field('intro_text', $next_post->ID); ?></p>
			<p class="info grey small"><?php the_date($next_post->ID); ?>  |  <?php the_field('read_time', $next_post->ID); ?> minutes</p>
		</a>
	</div>
<?php } ?> -->