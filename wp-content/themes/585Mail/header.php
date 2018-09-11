<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
	<link rel="icon" href=" <?php bloginfo('template_url'); ?>/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href=" <?php bloginfo('template_url'); ?>/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grid.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css" type="text/css" media="screen" />


	<style type="text/css">
		.preloader {
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			background-color: #fff;
		}
		.sk-cube-grid {
		  width: 100px;
		  height: 100px;
		  margin: auto;
		  position: absolute;
		  left: 0;	
		  top: 0;	
		  right: 0;	
		  bottom: 0;	
		}

		.sk-cube-grid .sk-cube {
		  width: 33%;
		  height: 33%;
		  background-color: #ff0000;
		  float: left;
		  -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
		          animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; 
		}
		.sk-cube-grid .sk-cube1 {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s; }
		.sk-cube-grid .sk-cube2 {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s; }
		.sk-cube-grid .sk-cube3 {
		  -webkit-animation-delay: 0.4s;
		          animation-delay: 0.4s; }
		.sk-cube-grid .sk-cube4 {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s; }
		.sk-cube-grid .sk-cube5 {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s; }
		.sk-cube-grid .sk-cube6 {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s; }
		.sk-cube-grid .sk-cube7 {
		  -webkit-animation-delay: 0s;
		          animation-delay: 0s; }
		.sk-cube-grid .sk-cube8 {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s; }
		.sk-cube-grid .sk-cube9 {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s; }

		@-webkit-keyframes sk-cubeGridScaleDelay {
		  0%, 70%, 100% {
		    -webkit-transform: scale3D(1, 1, 1);
		            transform: scale3D(1, 1, 1);
		  } 35% {
		    -webkit-transform: scale3D(0, 0, 1);
		            transform: scale3D(0, 0, 1); 
		  }
		}

		@keyframes sk-cubeGridScaleDelay {
		  0%, 70%, 100% {
		    -webkit-transform: scale3D(1, 1, 1);
		            transform: scale3D(1, 1, 1);
		  } 35% {
		    -webkit-transform: scale3D(0, 0, 1);
		            transform: scale3D(0, 0, 1);
		  } 
		}
	</style>


	<?php wp_head(); ?> 
</head>
<body>
	<div class="preloader">	
		<div class="sk-cube-grid">
		  <div class="sk-cube sk-cube1"></div>
		  <div class="sk-cube sk-cube2"></div>
		  <div class="sk-cube sk-cube3"></div>
		  <div class="sk-cube sk-cube4"></div>
		  <div class="sk-cube sk-cube5"></div>
		  <div class="sk-cube sk-cube6"></div>
		  <div class="sk-cube sk-cube7"></div>
		  <div class="sk-cube sk-cube8"></div>
		  <div class="sk-cube sk-cube9"></div>
		</div>
	</div>
<main>
<header>

</header>
