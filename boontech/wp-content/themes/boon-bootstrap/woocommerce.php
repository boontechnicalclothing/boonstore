<?php get_header();?>
<div class="store-container">
<div class="container">
	<div class="col-md-12">
		<?php
	$args = array(
			'delimiter' => '',
			'before' => '<li>',
			'after' => '</li>'
//			'before' => '<span class="breadcrumb-title">' . __( '', 'woothemes' ) . '</span>'
	);
?>
<ol class="breadcrumb"><?php woocommerce_breadcrumb( $args ); ?></ol>
		<?php woocommerce_content(); ?>
	</div>
</div>
</div>


      
<?php get_footer();?>