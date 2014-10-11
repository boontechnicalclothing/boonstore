<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('-',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" type="image/x-icon" href="favicon.ico"/>
	<meta name="description" content="">
	<meta name="author" content="">
	
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
					<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/boon-header-logo.png" alt="<?php bloginfo('name'); ?>"></a>
				</div>
			</div>
		</div>
	</div>
	<!--<ul class="navbar-nav nav">
		<?php wp_list_pages(array('title_li' => '', 'exclude' => 8)); ?>
	</ul>-->

