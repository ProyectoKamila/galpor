<?php

add_action('login_head', 'custom_login_logo');
add_action('init', 'theme_custom_types');
add_filter('admin_footer_text', 'left_admin_footer_text_output');
add_filter('update_footer', 'right_admin_footer_text_output', 11);
add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
add_theme_support('post-thumbnails');
//Funciones para post type y Taxonomy personalizadas
include('library/custom_post.php');
//Libreria de funcion max_charlengeth
include('library/string-limited.php');
//para poner la imagen en fecth_feed
include('library/image-feed-rss.php');
//Informacion del desarrollador y logo de inicio de sesion
include('library/delete-widget.php');
//Funcion para los banners
include('library/banner.php');
//Funcion para la url de la imagen
include('library/imgurl.php');
//opciones
include('library/options.php');
?>
<?php

//Funcion DEBUG ESENCIAL
function debug($var, $stop = true) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($stop)
        exit;
}

function theme_custom_types() {
//Ejemplo de Post_type
    add_custom_post_type(array(
        'type' => 'galeria',
        'singular' => 'galeria'
    ));
//ejemplo de Taxonomy    
    add_custom_taxonomy(array(
        'name' => 'tipo',
        'singular' => 'tipo',
        'genero' => 'f',
        'post_type' => 'galeria',
        'hierarchical' => true
    ));

    //Ejemplo de Post_type
    add_custom_post_type(array(
        'type' => 'banner',
        'plural' => 'banner'
    ));
    //ejemplo de Taxonomy    
    add_custom_taxonomy(array(
        'name' => 'pagina',
        'plural' => 'pagina',
        'genero' => 'f',
        'post_type' => 'banner',
        'hierarchical' => true
    ));
}
