<div class="container next-project">

	<h4>Continue reading</h4>
	
		<?php $prev_post = get_adjacent_post( true, '', true ); ?>
		<?php if ( is_a( $prev_post, 'WP_Post' ) ) { ?>
			<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
				<div class="row">
					<div class="col-md-6 item">
						<img src="<?php the_field('thumbnail_image', $prev_post->ID); ?>" alt="">
					</div>
					<div class="col-md-6 wrapper">
						<div>
							<h2><?php echo get_the_title( $prev_post->ID ); ?></h2>
							<p><?php the_field('intro_text', $prev_post->ID); ?></p>
							<p class="info grey small"><?php the_date($prev_post->Date); ?>  |  <?php the_field('read_time', $prev_post->ID); ?> minutes</p>
						</div>
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
						<div class="col-md-6 wrapper">
							<div>
								<h2><?php echo get_the_title( $prev_post->ID ); ?></h2>
								<p><?php the_field('intro_text', $prev_post->ID); ?></p>
								<p class="info grey small"><?php the_date($prev_post->ID); ?></p>
							</div>
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		<?php } ?>	
				
</div>





