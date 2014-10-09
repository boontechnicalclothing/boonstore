<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('-',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="navbar navbar-inverse" role="navigation">
	<div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="navbar-nav nav">
				<?php wp_list_pages(array('title_li' => '', 'exclude' => 8)); ?>
			</ul>
		</div><!--/.nav-collapse -->

	</div>
</div>

