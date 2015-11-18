<?php
/**
 * Template Name: Full width - Container only
 *
 */
 ?>
<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="col-md-12">
		<h1 class="head"><?php the_title(); ?></h1>
	</div>
	<?php the_content(); ?>
	
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, that page does not exist'); ?></p>
	<?php endif; ?>




      
<?php get_footer();?>