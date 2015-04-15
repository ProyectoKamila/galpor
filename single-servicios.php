<?php $db = select_pkconfig('mt_pkconfig'); ?>
<?php get_header(''); ?>
<div id="stoy" data-url="servicios"></div>
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
                            <h3><?php echo $db->slogan; wp_reset_query();?></h3>
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
    <?php } wp_reset_query(); ?>
    <article class="info-servicios">
    <div class="container">
        <div class="row">
            
                
            
            <div class="col-lg-7 col-md-7">
                <?php while (have_posts()) { the_post();?>
                <h1 class="title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php }wp_reset_query(); ?>
            </div>
            <div class="col-lg-5 col-md-5"> 
                <h1 class="title">DIVISIONES</h1>
                <div class="divisiones-items">
                    <?php 
                        $x=0;
                        query_posts(array('post_type'=>'servicios','posts_per_page'=>-1));
                     ?> 
                     <?php while (have_posts()) { the_post();?>
                    <section  id="<?php echo $x; ?>" class="item" onclick="desplegar(this.id);">
                        <div class="icono">
                            <?php $img = get_field('icono_de_servicio'); ?>
                            <img src="<?php echo $img[url]?>" alt="Iconos de servicios"/>
                        </div>
                        <?php the_title();?>
                    </section>
                    <article class="telecomunicaciones des-item <?php echo $x; ?>">
                        <a href="<?php the_permalink(); ?>"><p><?php echo max_charlength(get_the_content(), '300', '...');?></p></a>
                    </article>
                    <?php $x++; } wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    </article>
</section>

<div class="clearfix"></div>
<script>
    function desplegar(id){
        console.log(id);
        $('.item').removeClass('active');
        $('.des-item').removeClass('open');
        $('#'+id).addClass('active');
        $('.'+id).addClass('open');
    }
</script>

<?php get_footer(); ?>

<?php wp_footer(); ?>
