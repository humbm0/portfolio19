<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' );?>/img/favicon.ico">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Max Humberstone Design</title>
	<?php wp_head();?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	<!-- <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/dist/animsition.min.css"> -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/dist/hamburgers.min.css">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<script src="https://unpkg.com/scrollreveal"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


	<div class="nav-menu">
		<div class="container">
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/mh.png" alt="">
				</a>
			</div>
			<ul>
				<?php wp_list_pages( '&title_li=' ); ?>
	    </ul>
		</div>
  </div>

	<div class="">
