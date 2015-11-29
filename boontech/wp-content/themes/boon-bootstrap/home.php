<?php
/**
 * Template Name: Blog Template
 *
 */
 ?>

<?php get_header();?>

<div class="page-hero blog-hero">
	<div class="container">
		<div class="col-md-12"><h1 class="head">Blog</h1></div>
	</div>	
</div>	

<div class="blog-list">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-4 col-sm-6">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<div class="blog-item post-featured-bg" style="background-image: url('<?php echo $image[0]; ?>')">
			<?php else: ?>
			<div class="blog-item post-default-bg">
			<?php endif; ?>			
				<a class="blog-item--permalink block-it" href="<?php the_permalink(); ?>">
				</a>
			</div>
			<a class="blog-item--permalink block-it" href="<?php the_permalink(); ?>">
					<div class="blog-item--meta">
						<h2 class="blog-item--title"><?php the_title(); ?></h2>
						<div class="blog-item--excerpt"><?php the_excerpt(); ?></div>
					</div>
				</a>
		</div>
		
		<?php endwhile; else: ?>
			<div class="col-md-12"><p><?php _e('Sorry, there are no posts'); ?></p></div>
		<?php endif; ?>
	</div>
</div>



      
<?php get_footer();?>