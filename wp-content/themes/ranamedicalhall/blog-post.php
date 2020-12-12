<?php
/*
Template Name: Blog Posts
*/
get_header(); ?>


<div class="page-wrapper blogs-page py-5">
	<div class="container py-3">
		<div class="row">
			<div class="col-12">
	
				<?php query_posts('post_type=post&post_status=publish&posts_per_page=-1'); ?>

				<?php if (have_posts()) : ?>

					<div class="blogs-wrapper">
						<div class="row">

							<?php while (have_posts()) : the_post(); ?>
								<div class="col-md-4" style="margin-bottom: 30px">

									<div id="post-<?php echo get_the_ID(); ?>" <?php echo post_class(); ?>>

										<a href="<?php the_permalink(); ?>" class="w-100 featured-image"><?php echo the_post_thumbnail(array(200, 220)); ?></a>

										<a class="post-title" href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
										</a>

										<span class="date d-block mb-2"> <i class="fa fa-calendar" aria-hidden="true" class="mr-3"></i> <b><?php echo get_the_date('M j, Y'); ?></b></span>

										<?php the_excerpt(__('Continue reading »', 'example')); ?>

										<a class="more" href="<?php the_permalink(); ?>">
											Read More 
										</a>
									</div><!-- /#post-<?php get_the_ID(); ?> -->
								</div>

							<?php endwhile; ?>

							<div class="col-12">
								<div class="navigation">
									<span class="prev"><?php previous_posts_link(__('« Previous', 'example')) ?></span> <span class="next"><?php next_posts_link(__('Next »', 'example')) ?></span>
								</div><!-- /.navigation -->
							</div>
						</div>
					</div>

				<?php else : ?>

					<div id="post-404" class="noposts">

						<p><?php _e('None found.', 'example'); ?></p>

					</div><!-- /#post-404 -->

				<?php endif;
				wp_reset_query(); ?>

			</div><!-- /#content -->
		</div>
	</div>
</div>
<?php get_footer(); ?>