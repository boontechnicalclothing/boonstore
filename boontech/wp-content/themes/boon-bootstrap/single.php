<?php get_header();?>


<div class="page-hero hero-mini">
	<div class="container">
		<div class="col-md-12">		
			<h1 class="head order">Blog</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
		<hr>
		<?php endwhile; else: ?>
		<div class="col-md-10 col-md-offset-1">
			<p><?php _e('Sorry, that page does not exist'); ?></p>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>


      
<?php get_footer();?>