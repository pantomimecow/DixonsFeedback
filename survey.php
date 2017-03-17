<?php
/*
Template Name: Survey
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Feeback On Dixons Plug</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/author.css">

	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<frameset cols = "100%">
		<frame src ="http://my-best-domain.net" />
	</frameset>
</head>


<body id="home">

	<div class="container">
		<div class="container_inner">
		<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		the_content();
		//
	} // end while
} // end if
?>
</div>
	</div>

</body>
</html>