<?php $db = select_pkconfig('mt_pkconfig'); ?>
<?php get_header(''); ?>
<div class="container-fluid content-slider">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="slider">
                <?php echo pk_banner('servicios'); ?>
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
<section class="galeria-interna-servicios">
         <?php $gi = query_posts(array('post_type' => 'galeria', 'tipo' => 'servicios', 'posts_per_page' => 3)); ?>
         <?php if(!empty($gi)){?>
    <div class="container-fluid">
        <div class="row">
                        <?php while (have_posts()) {
                            the_post();
                            ?>
            <div class="col-lg-4 col-md-4 item">
                <div class="image" style="background: url(<?php echo get_the_post_thumbnail($post_id, array(600, 344)); ?>);"></div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php } ?>
    <article class="info-servicios">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <h1 class="title">DISFRUTE DE NUESTROS SERVICIOS</h1>
                <p>Nuestras cuatro divisiones sectoriales generan una amplia gama de productos los cuales comprenden desde la fabricación de antenas parabólicas, torres y accesorios para telecomunicaciones, hasta casas rodantes para oficinas o viviendas.</p>
                <ul>
                     <li> Lorem Ipsum es simplemente el texto de relleno de las imprentas y </li>
                     <li> Lorem Ipsum es simplemente el texto de relleno de las imprentas y </li>
                     <li> Lorem Ipsum es simplemente el texto de relleno de las imprentas y </li>
                     <li> Lorem Ipsum es simplemente el texto de relleno de las imprentas y </li>
                     <li> Lorem Ipsum es simplemente el texto de relleno de las imprentas y </li>
                     <li> Lorem Ipsum es simplemente el texto de relleno de las imprentas y </li>
                </ul>
                <p> Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                <p> Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                <br/>
                <br/>
                <br/>
                </p>
            </div>
            <div class="col-lg-5 col-md-5"> 
                <h1 class="title">DIVISIONES</h1>
                <div class="divisiones-items">
                    <section class="item" onclick="">
                        
                    </section>

                </div>
            </div>
        </div>
    </div>
    </article>
</section>

<div class="clearfix"></div>


<?php get_footer(); ?>

<?php wp_footer(); ?>
