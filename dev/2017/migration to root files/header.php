<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('-',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" type="image/x-icon" href="favicon.ico"/>
	<meta name="description" content="Boon Technical Clothing: The Ultimate Choice">
	<meta name="description" content="Performance clothing and active wear to suit athletes and people who live an active lifestyle. The Ultimate Choice. Sublimation printing, heatpress, tshirt design. Shipping Worldwide"/>
	<meta name="keywords" content="Boon Technical Clothing, sublimation, Boon USA, Ultimate Disc, Ultimate Frisbee, tshirt, t-shirt, clothing, printing, design, heatpress, worldwide shipping, teamwear, climbing, triathlon, running, sportswear"/>
	
	<meta property="og:title" content="Boon Technical Clothing" />
	<meta property="og:image" content="http://boontechnicalclothing.com/boon/wp-content/themes/boon-bootstrap/ogimage.jpg" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Performance clothing and active wear to suit athletes and people who live an active lifestyle. The Ultimate Choice." />
	<meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

	
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="content">
	<div class="container">
		<div class="col-md-12">
			<div id="header">
				<div class="pull-right fb-header">
				<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FBoonTechnicalClothing&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=564178057027174" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
			</div>
				<div class="">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/boon-header-logo.png" alt="<?php bloginfo('name'); ?>"></a>
				</div>
			</div>
		</div>
	</div>


