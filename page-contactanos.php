<?php $db = select_pkconfig('mt_pkconfig'); ?>
<?php get_header(''); ?>
<div class="container-fluid content-slider">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="slider">
                <?php echo pk_banner('contactanos'); ?>
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


<?php get_footer(); ?>

<?php wp_footer(); ?>
