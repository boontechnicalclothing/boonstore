<?php
/**
 * Template Name: Order Form - plugin
 *
 */
 ?>
<?php get_header();?>


<div class="order-page">
	<div class="page-hero">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-12">		
				<h1 class="head order"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<?php the_content(); ?>
	
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, that page does not exist'); ?></p>
	<?php endif; ?>

</div>


      
<?php get_footer();?>