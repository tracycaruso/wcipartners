<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
   



<head>

	 <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:700italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,700,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php bloginfo('name');?><?php echo wp_title();?></title>
	<meta name="description" content="<?php bloginfo('description');?>">
	<meta name="author" content="">
	<meta name="google-site-verification" content="zROz9zFcKqN0pVrlQKZJYE0nJNPLnfUpTbzh1akY7Oc" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon-114x114.png">
    
    <?php wp_head();?>
   </head>
<body>


	<!-- Primary Page Layout
	================================================== -->
    
    
	<!-- Delete everything in this .container and get started on your own site! -->
	<div class="band head">
		<div class="header container">
            <div class="three columns">
            	<h1 class="logo"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
            </div><!--end3-->
            <div class="thirteen columns main nav styled-select">
    			<?php wp_nav_menu(
                        array(
                            'menu' => 'Primary Navigation',
                            'container' => 'div',
                            'conatiner_class' => '',
                            )
                );?>
            </div>
				
				
			</div><!--end container 13-->
			</div><!--endContainer header-->
    </div><!--endBand-->
