<?php $db = select_pkconfig('mt_pkconfig'); ?>
<?php get_header(''); ?>
<div class="container-fluid content-slider">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="slider">
                <?php echo pk_banner('conocenos'); ?>
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
<div class="clearfix"></div>
<div class="container-fluid franja">
    <div class="container">
        <p><?php echo $db->nosotros; ?></p>
    </div>
</div>
<section class="recientes nosotros">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 nosotros">
                <h1>+ NOSOTROS</h1>
                <div class="container-fluid cabecera">
                    <div class="row ">
                        <div class="col-lg-4 col-md-4 bordered"><h2 onclick="show('mision');">MISI&Oacute;N</h2></div>
                        <div class="col-lg-4 col-md-4 bordered"><h2 onclick="show('vision');">VISI&Oacute;N</h2></div>
                        <div class="col-lg-4 col-md-4 bordered"><h2 onclick="show('valores');">VALORES</h2></div>
                        <div class="col-lg-12 col-md-12 mini-description" id="mision" style="display: block;">
                            <?php echo $db->mision; ?>
                        </div>
                        <div class="col-lg-12 col-md-12 mini-description" id="vision">
                            <?php echo $db->vision; ?>
                        </div>
                        <div class="col-lg-12 col-md-12 mini-description" id="valores">
                            <?php echo $db->valores; ?>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-2">
                <img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt="" style="float: right;"/>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>     
<div class="container-fluid franja2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?php echo $db->nosotros1; ?>
            </div>
            <div class="clearfix"></div>
                        <?php query_posts(array('post_type' => 'galeria', 'tipo' => 'conocenos', 'posts_per_page' => 4)); ?>
                        <?php while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-lg-3 col-md-3">
                                <?php echo get_the_post_thumbnail($post_id, array(290, 290)); ?>
                            </div>

                        <?php } ?>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>
<script>
    function show(id) {
        console.log(id);
        if (id === 'mision') {
            $('.mini-description').slideUp(500);
            $('#mision').slideDown(1000);
        }
        if (id === 'vision') {
            $('.mini-description').slideUp(500);
            $('#vision').slideDown(1000);
        }
        if (id === 'valores') {
            $('.mini-description').slideUp(500);
            $('#valores').slideDown(1000);
        }

    }
</script>
<?php wp_footer(); ?>
