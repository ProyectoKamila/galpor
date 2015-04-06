<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link href='<?php bloginfo('stylesheet_url'); ?>' rel='stylesheet' type='text/css'> 
	<?php wp_head(); ?>
</head>
<body>
<div class="logo">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="<?php bloginfo('template_url')?>/images/logo.png" alt="Industrias Galpor">
			</div>
		</div>
	</div>
</div>
<header class="menu">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4">
				<ul class="nav nav-pills">
  					<li role="presentation" class="active"><a href="<?php echo home_url(''); ?>">INICIO</a></li>
  					<li role="presentation"><a href="<?php echo home_url('conocenos'); ?>">CONÓCENOS</a></li>
  					<li role="presentation"><a href="<?php echo home_url('servicios'); ?>">SERVICIOS</a></li>
  					<li role="presentation"><a href="<?php echo home_url('galeria'); ?>">GALERIA</a></li>
  					<li role="presentation"><a href="<?php echo home_url('contactanos'); ?>">CONTACTANOS</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>	

<div class="container-fluid content-slider">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="slider">
	<ul id="slider1">
		<li style="background:url(<?php bloginfo('template_url');?>/images/banner/inicio-1.jpg) top center no-repeat; background-size:cover;"></li>
		<li style="background:url(<?php bloginfo('template_url');?>/images/banner/inicio-1.jpg) top center no-repeat; background-size:cover;"></li>
		<li style="background:url(<?php bloginfo('template_url');?>/images/banner/inicio-1.jpg) top center no-repeat; background-size:cover;"></li>									
		<li style="background:url(<?php bloginfo('template_url');?>/images/banner/inicio-1.jpg) top center no-repeat; background-size:cover;"></li>			
	</ul>
</div>
		</div>
	</div>
</div>