<?php
/**
 * Template Name: Homepage
 *
 */
 ?>
<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<div class="blog-list">
	<div class="container">
		<div class="col-md-12">
			<h2 class="head">From the blog</h2>
		</div>
<?php 
$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();?>
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
		</div><!--col-md-4-->
		
		<?php endwhile; else: ?>
			<div class="col-md-12"><p><?php _e('Sorry, there are no posts'); ?></p></div>
		<?php endif; ?>
		<div class="col-md-12"><p class="text-right"><a href="blog">More news on the blog</a></p>
	</div><!--container-->
</div><!--blog-list-->

     
      
<?php get_footer();?>