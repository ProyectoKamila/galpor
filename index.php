<?php get_header(''); ?>
<div id="stoy" data-url="index"></div>

<div class="container-fluid content-slider">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="slider">
                <?php echo pk_banner('inicio'); ?>
            </div>
        </div>
    </div>
</div>

<div id="slogan">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h3><?php echo $db->slogan; ?></h3>
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
            <?php $var = query_posts(array('post_type' => 'galeria', 'posts_per_page' => 6, 'tipo' => 'destacar')); ?>
            <?php if (!empty($var)) { ?>
                <div class="col-lg-12 col-md-12 content-carrusel">
                    <ul id="foo2">
                        <?php while (have_posts()) {
                            the_post(); ?>
                            <li class="col-lg-4 col-md-4 foo2-thumbnail">
                                <a href="<?php the_permalink(); ?>">
        <?php echo get_the_post_thumbnail($post_id, array(380, 185)); ?>
                                    <h2> <?php the_title(); ?> </h2>
                                    <p> <?php echo get_field('descripcion_corta_del_proyecto'); ?></p>
                                </a>
                            </li>
    <?php } ?>
                    </ul>
                    <div id="prev2" class="prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></div>
                    <div id="next2" class="next"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></div>
                </div>
<?php } else { ?>
                <p style="color:white"> Lo sentimos aun no hemos subido informacion de este tipo.</p>
            <?php } ?>
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
$var = query_posts(array('post_type' => 'galeria','posts_per_page' => 9, 'tipo' => 'portafolio'));
?>
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col-lg-4 col-md-4">
                    <div class="item 
                         <?php if ($i === 1) { ?> alto-1 <?php } ?> 
                         <?php if ($i === 2) { ?> alto-1 <?php } ?> 
                         <?php if ($i === 3) { ?> alto-1 <?php } ?> 
                         <?php if ($i === 4) { ?> alto-2 <?php } ?>
                         <?php if ($i === 5) { ?> alto-1 <?php } ?>
                         <?php if ($i === 6) { ?> alto-2 <?php } ?>
                         <?php if ($i === 7) { ?> alto-3 <?php } ?>
                         <?php if ($i === 8) { ?> alto-4 <?php } ?>
                         <?php if ($i === 9) { ?> alto-3 <?php } ?>
                         ">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail($post_id, array(380, 510)); ?>
                        </a>
                    </div>
                </div>
                <?php $i++;
            } ?>

        </div>
    </div>
</section>
<?php get_footer(); 
