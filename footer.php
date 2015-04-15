<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-3 col-lg-offset-3 col-md-offset-3 contmar">
                <div class="redes col-lg-12 col-md-12">
                    <ul class="">
                        <?php $c = query_posts(array('post_type' => 'page','post_name'=>'contactanos'));                        ?>
                        <?php if(!empty($c)){?>
                            <?php while(have_posts()){ the_post()?>
                                <li>
                                                                     <?php $f= get_field('facebook'); 
                                if(!empty($f)){?>
                                <li><a class="facebook" href="<?php echo get_field('facebook'); ?>"></a></li>
                                <?php } ?>
                                </li>
                                <li><a class="twitter" href="<?php echo get_field('twitter'); ?>"></a></li>
                                <li><a class="google" href="<?php echo get_field('google'); ?>"></a></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 col-md-12 nave">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="<?php echo home_url(''); ?>">INICIO</a></li>
                        <li role="presentation"><a href="<?php echo home_url('conocenos'); ?>">CONÓCENOS</a></li>
                        <li role="presentation"><a href="<?php echo home_url('servicios'); ?>">SERVICIOS</a></li>
                        <li role="presentation"><a href="<?php echo home_url('galeria'); ?>">GALERIA</a></li>
                        <li role="presentation"><a href="<?php echo home_url('contactanos'); ?>">CONTACTANOS</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 col-md-12 copy">
                    <p>Copyright 2015 www.galpor.com. Todos los derechos reservados.</p>
                    <p>Desarrollado por <a href="http://www.proyectokamila.com">Proyecto Kamila</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
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
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url'); ?>/scripts/slider/js/jquery.anythingslider.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/scripts/carrusel/jquery.carouFredSel-6.2.1-packed.js"></script>
<script>
    $('#slider1').anythingSlider({
        hashTags: false
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