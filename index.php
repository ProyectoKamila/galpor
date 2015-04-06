<?php get_header('');?>
<div id="slogan">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1">
						<img src="<?php bloginfo('template_url');?>/images/logo2.png" alt="">
					</div>
					<div class="col-lg-8 col-md-8">
						<h3>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<section class="recientes">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 title">
				<h1>TRABAJOS RECIENTES</h1>
			</div>
			<?php	
			$var = query_posts(array('post_type'=>'galeria','posts_per_page'=>6, 'tipo'=>'destacar')); ?>
			<?php if(!empty($var)){?>
			<div class="col-lg-12 col-md-12 content-carrusel">
				<ul id="foo2">
			<?php 

			while(have_posts()){ the_post(); ?>
				<li class="col-lg-4 col-md-4">
					<a href="<?php the_permalink();?>">
					<?php echo get_the_post_thumbnail( $post_id, array( 380, 185) ); ?>
					<h2> <?php the_title();?> </h2>
					<p> <?php echo get_field('descripcion_corta_del_proyecto');?></p>
					</a>
				</li>
			<?php } ?>
			</ul>
			<div id="prev2" class="prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></div>
			<div id="next2" class="next"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></div>
			</div>
			<?php } else {?>
			<p style="color:white"> Lo sentimos aun no hemos subido informacion de este tipo.</p>
			<?php } 	?>
		</div>

	</div>
</section>
<section class="content-grid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 title"> 
			<h1>PORTAFOLIO</h1>
			</div>
			<?php 
			$i = 1;
			$var = query_posts(array('post_type' => 'galeria', 'posts_per_page' => 9));
			?>
			<?php while(have_posts()){ the_post();?>
			<div class="col-lg-4 col-md-4">
				<div class="item 
				<?php if($i === 1){?> alto-1 <?php  } ?> 
				<?php if($i === 2){?> alto-1 <?php  } ?> 
				<?php if($i === 3){?> alto-1 <?php  } ?> 
				<?php if($i === 4){?> alto-2 <?php  } ?>
				<?php if($i === 5){?> alto-1 <?php  } ?>
				<?php if($i === 6){?> alto-2 <?php  } ?>
				<?php if($i === 7){?> alto-3 <?php  } ?>
				<?php if($i === 8){?> alto-4 <?php  } ?>
				<?php if($i === 9){?> alto-3 <?php  } ?>
				">
					<a href="<?php the_permalink();?>">
					<?php echo get_the_post_thumbnail($post_id, array(380,510)); ?>
					</a>
				</div>
			</div>
<?php  $i++; } ?>

		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-lg-offset-9 col-md-offset-9">
				<div class="formulario">
					<p>¿Quieres contactarnos? <br>  Envíenos sus dudas ó sugerencias</p>
					<form action="">
						<label>Nombre</label><br>
						<input type="text" name="nombre" class="texto"/>
						<label>Email</label><br>
						<input type="email" name="nombre" class="texto"/>
						<label>Telefono</label><br>
						<input type="text" name="nombre" class="texto"/>
						<label>Mensaje</label><br>
						<textarea name="mensaje" id="" cols="30" rows="2" class="textarea"></textarea>
						<input type="submit" value="ENVIAR" class="enviar">
					</form>
				</div>	
			</div>
		</div>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/scripts/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url');?>/scripts/slider/js/jquery.anythingslider.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url');?>/scripts/carrusel/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script>
		$('#slider1').anythingSlider({
			hashTags:false
		});

		//	Scrolled by user interaction
			$('#foo2').carouFredSel({
				auto: true,
				prev: '#prev2',
				next: '#next2',
				pagination: "#pager2",
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
	</script>
<?php wp_footer(); ?>
</body>
</html>