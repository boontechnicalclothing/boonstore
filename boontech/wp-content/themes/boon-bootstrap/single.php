<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="col-md-8">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	
		<hr>
		<?php comments_template(); ?>
		
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, that page does not exist'); ?></p>
		<?php endif; ?>
	
	</div>
	
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>


      
<?php get_footer();?>