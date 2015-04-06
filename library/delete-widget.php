<?php
function custom_dashboard_widgets() {
    global $wp_meta_boxes;
    // var_dump( $wp_meta_boxes['dashboard'] );  
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}
function custom_login_logo() {
    $path = explode('/', get_bloginfo('template_directory'));
    $path[] = 'images';
    $ruta = ABSPATH . implode('/', array_slice($path, count($path) - 4)) . '/';
    if (!(file_exists($ruta . 'login_logo.png'))) {

        if (!is_dir($ruta))
            mkdir($ruta, 0777, true);

        $is_copied = @copy('http://proyectokamila.com/logo_in.png', $ruta . 'login_logo.png');

        if (!$is_copied) {
            $source = file_get_contents('http://proyectokamila.com/logo_in.png');
            $destiny = @fopen($ruta . 'login_logo.png', 'w');
            @fwrite($destiny, $source);
            @fclose($destiny);
        }
    }
    echo '<style type="text/css">h1 a { background-image:url(' . get_bloginfo('template_directory') . '/images/login_logo.png) !important; }</style>';
}

function left_admin_footer_text_output($text) {
    $text = get_bloginfo();
    return $text;
}

function right_admin_footer_text_output($text) {
    $text = 'Web Desarrollada por <a href="http://www.proyectokamila.com" target="_blank">Proyectokamila.com</a>';
    return $text;
}

if (!current_user_can('edit_users')) {
    add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
    add_filter('pre_option_update_core', create_function('$a', "return null;"));
}

?>
