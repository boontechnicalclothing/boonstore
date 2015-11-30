<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('-',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"/>
	<meta name="description" content="Boon Technical Clothing: The Ultimate Choice">
	<meta name="description" content="Performance clothing and active wear to suit athletes and people who live an active lifestyle. The Ultimate Choice. Sublimation printing, heatpress, tshirt design. Shipping Worldwide"/>
	<meta name="keywords" content="Boon Technical Clothing, sublimation, Boon USA, Ultimate Disc, Ultimate Frisbee, tshirt, t-shirt, clothing, printing, design, heatpress, worldwide shipping, teamwear, climbing, triathlon, running, sportswear"/>
	
	<meta property="og:title" content="<?php wp_title('-',1,'right'); ?> <?php bloginfo('name'); ?>" />
	<meta property="og:image" content="http://boontechnicalclothing.com/boon/wp-content/themes/boon-bootstrap/ogimage.jpg" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Performance clothing and active wear to suit athletes and people who live an active lifestyle. The Ultimate Choice." />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:site_name" content="BoonTechnicalClothing.com" />

	
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>> 

<nav class="navbar navbar-default navbar-fixed-top boon-nav">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/boon-logo.png" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php wp_nav_menu( array(
					'menu' => 'default nav',
					'container' => false,
					'items_wrap' => '%3$s'
				 )); ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php wp_nav_menu( array(
					'menu' => 'order nav',
					'container' => false,
					'items_wrap' => '%3$s'
				)); ?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div id="content" class="content">