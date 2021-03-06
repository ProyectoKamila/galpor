<?php $db = select_pkconfig('mt_pkconfig'); ?>
<?php get_header(''); ?>
<div class="container-fluid content-slider">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="slider">
                <?php echo pk_banner('galeria'); ?>
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
<div class="container-fluid franja galeria">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 trabajos">
                <p>TRABAJOS RECIENTES</p>
            </div>
            <div class="col-lg-12 col-md-12 ulnav">
                <ul class="nav nav-pills">
                    <?php
                    $idcat = get_term_by('name', 'portafolio', 'tipo');
                    $counter = 0;
                    $max = 13;
                    $terms = get_terms('tipo', array('order' => 'rand', 'parent' => $idcat->term_id));
                    shuffle($terms);
                    foreach ($terms as $term) {
                        $counter++;
                        if ($counter <= $max) {
                            ?>
                            <li>
                                <div class="base">
                                    <div>
                                        <?php $category_link = get_category_link(get_term_by('slug', $term->slug, 'tipo')); ?>
                                        <a href="<?php echo $category_link; ?>">
                                            <?php echo $term->name; ?>
                                        </a>
                                    </div>
                                </div>
                                <span></span>
                            </li>
                                      <?php }
                                            }
                                            ?>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12">
                <!--285 235-->
                <div class="container-fluid galery">
                    <div class="row">
                        <?php
                        $i = 1;
//                        $var = query_posts(array('post_type' => 'galeria', 'posts_per_page' => 9, 'tipo' => 'seniat'));
                        ?>
                        <?php wp_reset_query(); ?>
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-lg-3 col-md-3">
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
                            <?php
                            $i++;
                        }
                        ?>
                        <!--<div class="col-lg-3"></div>-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php wp_footer(); ?>
