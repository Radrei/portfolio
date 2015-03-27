<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <!--[if IE]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" />
    <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

</head>

<body>
<div id="wrapper">

         <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu') ); ?>





	<div id="content">
