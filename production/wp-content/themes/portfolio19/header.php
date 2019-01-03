<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for Bootstrap</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/dist/animsition.min.css"> -->
	<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/dist/hamburgers.min.css">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<script src="https://unpkg.com/scrollreveal"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

  <div class="nav-menu">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/mh.png" alt="">
			</a>
		</div>
		<button class="hamburger hamburger--spin" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
  </div>

  <div class="overlay-menu">
    <ul>
			<?php wp_list_pages( '&title_li=' ); ?>
    </ul>
  </div>

	<div class="">
