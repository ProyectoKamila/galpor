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
<article class="contacto">
    <div class="container">
        <?php wp_reset_query(); the_post(); ?>
        <div class="row">
            <div class="col-lg-3 col-md-3 info-contact">
                <img src="<?php bloginfo(template_url);?>/images/telefono.png" alt="" class="icon">
                <h3>comunícate</h3>
                <?php $t1= get_field('telefono_1'); 
                if(!empty($t1)){?>
                <p> <?php echo get_field('telefono_1'); ?></p>
                <?php }?>
                <?php $t2= get_field('telefono_2'); 
                if(!empty($t2)){?>
                <p> <?php echo get_field('telefono_1'); ?></p>
                <?php }?>
                <?php $t3= get_field('telefono_3'); 
                if(!empty($t3)){?>
                <p> <?php echo get_field('telefono_3'); ?></p>
                <?php }?>
            </div>
            <div class="col-lg-3 col-md-3 info-contact">
                <img src="<?php bloginfo(template_url);?>/images/mail.png" alt="" class="icon">
                <h3>correo electrónico </h3>
                <?php $c1= get_field('correo_1'); 
                if(!empty($c1)){?>
                <p> <?php echo get_field('correo_1'); ?></p>
                <?php }?>
                <?php $c2= get_field('correo_2'); 
                if(!empty($c2)){?>
                <p> <?php echo get_field('correo_2'); ?></p>
                <?php }?>
                <?php $c3= get_field('correo_3'); 
                if(!empty($c3)){?>
                <p> <?php echo get_field('correo_3'); ?></p>
                <?php }?>
                
                
            </div>
            <div class="col-lg-3 col-md-3 info-contact">
                <img src="<?php bloginfo(template_url);?>/images/redes.png" alt="" class="icon">
                <h3>síguenos</h3>
                <di class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                                 <?php $f= get_field('facebook'); 
                                if(!empty($f)){?>
                            <a href="<?php echo get_field('facebook'); ?>"> <img src="<?php bloginfo(template_url);?>/images/facebook.png" alt="" class="icon-redes"></a>
                                <?php } ?>
                        </div>

                        <div class="col-lg-4 col-md-4">
                         <?php $t= get_field('twitter'); 
                                if(!empty($t)){?>
                            <a href="<?php echo get_field('facebook'); ?>"> <img src="<?php bloginfo(template_url);?>/images/twitter.png" alt="" class="icon-redes"></a>
                                <?php } ?>
                        </div>
                        <div class="col-lg-4 col-md-4">
                               <?php $g= get_field('google'); 
                                if(!empty($g)){?>
                                <a href="<?php echo get_field('google'); ?>"> <img src="<?php bloginfo(template_url);?>/images/google.png" alt="" class="icon-redes"></a>
                                <?php } ?>
                        </div>
                    </div>
                </di>
                
                
                
                
            </div>
            <div class="col-lg-3 col-md-3 info-contact">
                <img src="<?php bloginfo(template_url);?>/images/mapa.png" alt="" class="icon">
                <h3>ubicación</h3>
                <?php $di= get_field('direccion'); 
                if(!empty($di)){?>
                <p class="dire"> <?php echo get_field('direccion'); ?></p>
                <?php }?>
            </div>
        </div>
    </div>
</article>


<?php get_footer(); ?>

<?php wp_footer(); ?>
