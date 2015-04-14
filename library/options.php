<?php
// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
    // Add a new submenu under Settings:
//    add_options_page(__('Test Settings','menu-test'), __('Test Settings','menu-test'), 'manage_options', 'testsettings', 'mt_settings_page');

    // Add a new submenu under Tools:
//    add_management_page( __('Test Tools','menu-test'), __('Test Tools','menu-test'), 'manage_options', 'testtools', 'mt_tools_page');

    // Add a new top-level menu (ill-advised):
    add_menu_page(__('Informaci&oacute;n','menu-test'), __('Informaci&oacute;n','menu-test'), 'manage_options', 'configuraciones', 'mt_toplevel_page' );

    // Add a submenu to the custom top-level menu:
//    add_submenu_page('configuraciones', __('Test Sublevel','menu-test'), __('Test Sublevel','menu-test'), 'manage_options', 'sub-page', 'mt_sublevel_page');
//
//    // Add a second submenu to the custom top-level menu:
//    add_submenu_page('configuraciones', __('Test Sublevel 2','menu-test'), __('Test Sublevel 2','menu-test'), 'manage_options', 'sub-page2', 'mt_sublevel_page2');
}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
    //must check that the user has the required capability 
    if (!current_user_can('manage_options')) {
        wp_die(__('Usted no tiene los permisos necesarios para acceder a esta página.'));
    }
    
    // variables for the field and option names 
    $opt_name = 'mt_pkconfig';
    
    //nosotros
    $nosotros = 'nosotros';
    $nosotros1 = 'nosotros1';
    $slogan = 'slogan';
    $mision = 'mision';
    $vision = 'vision';
    $valores = 'valores';
    
    $facebook = 'facebook';
    $twitter = 'twitter';
    $instagram = 'instagram';
    
    $data_field_name = 'mt_pkconfig';
    
    // Read in existing option value from database
    $opt_val = get_option($opt_name);

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'


    if (isset($_POST['submit'])) {
        // Read their posted value
        $opt_val = json_encode($_POST);

        // Save the posted value in the database
        update_option($opt_name, $opt_val);

        //debug($opt_val, false);
        // Put an settings updated message on the screen
        ?>
        <div class="updated"><p><strong><?php _e('settings saved.', 'menu-test'); ?></strong></p></div>
        <?php
    }
     $db = json_decode($opt_val);
//    debug($db->alert, false);
//    
    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . __('Informaci&oacute;n de la p&aacute;gina de Nosotros') . "</h2>";

    // settings form
    ?>
    <form name="form1" method="post" action="">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <label><?php _e("Slogan:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from = $slogan;//name del editor ?>
                            <?php if($content!=''){}else{$content = $db->slogan;}//name del editor ?>
                            <?php $setting_editor = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content, $name_from, $setting_editor); ?>
                        </div>
                    </div>
                    <p class="description">Texto informativo que estara bajo os banners</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Nosotros Superior:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from1 = $nosotros;//name del editor ?>
                            <?php $content1 = ''; ?>
                            <?php if($content1!=''){}else{$content1 = $db->nosotros;}//name del editor ?>
                            <?php $setting_editor1 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from1, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content1, $name_from1, $setting_editor1); ?>
                        </div>
                    </div>
                    <p class="description">Texto informativo superior en nosotros</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Nosotros Inferior:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from11 = $nosotros1;//name del editor ?>
                            <?php $content11 = ''; ?>
                            <?php if($content11!=''){}else{$content11 = $db->nosotros1;}//name del editor ?>
                            <?php $setting_editor11 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from11, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content11, $name_from11, $setting_editor11); ?>
                        </div>
                    </div>
                    <p class="description">Texto informativo Inferior en nosotros</p>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <label><?php _e("Misi&oacute;n:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from2 = $mision;//name del editor ?>
                            <?php $content2 = ''; ?>
                            <?php if($content2!=''){}else{$content2 = $db->mision;}//name del editor ?>
                            <?php $setting_editor2 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from2, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content2, $name_from2, $setting_editor2); ?>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <th scope="row">
                    <label><?php _e("Visi&oacute;n:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from3 = $vision;//name del editor ?>
                            <?php $content3 = ''; ?>
                            <?php if($content3!=''){}else{$content3 = $db->vision;}//name del editor ?>
                            <?php $setting_editor3 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from3, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content3, $name_from3, $setting_editor3); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Valores:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from4 = $valores;//name del editor ?>
                            <?php $content4 = ''; ?>
                            <?php if($content4!=''){}else{$content4 = $db->valores;}//name del editor ?>
                            <?php $setting_editor4 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from4, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content4, $name_from4, $setting_editor4); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <label><?php _e("Galeria:  ", 'menu-test'); ?><a href="<?php echo home_url(''); ?>/wp-admin/post-new.php?post_type=galeria" target="_blank" class="add-new-h2" style="float: right;">Añadir Imagen</a></label>
                </th>
                <td>
                    
                    <?php query_posts(array('post_type' => 'galeria', 'tipo' => 'conocenos', 'posts_per_page' => 4)); ?>
                    <?php while (have_posts()) {
                the_post(); ?>
                    <?php echo get_the_post_thumbnail($post_id, array(100, 510)); ?>
                    <?php } ?>
                    <p class="description">Para agregar las imagenes de galeria en el conocenos ingrese al siguiente enlace <a href="<?php echo home_url(''); ?>/wp-admin/post-new.php?post_type=galeria" target="_blank">Añadir Imgaenes</a> y marque el tipo conocenos</p>
                </td>
                    
            </tr>
            
            
            
        </table>
<!--        <table class="form-table">
            <tr>
                <th scope="row">
                    <label><?php _e("Facebook URL:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $facebook; ?>" value="<?php echo $db->facebook; ?>" size="70">
                    <p class="description">Colocar la url de Facebook</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Twitter URL:", 'menu-test'); ?> </label>
                </th>
                <td>
                    <input type="url" name="<?php echo $twitter; ?>" value="<?php echo $db->twitter; ?>" size="70">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Instagram URL:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $instagram; ?>" value="<?php echo $db->imstagran; ?>" size="70">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>Alerta</label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from = 'alert';//name del editor ?>
                            <?php if($content!=''){}else{$content = $db->alert;}//name del editor ?>
                            <?php $setting_editor = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 15),// este es para el alto por lineas del texarea
//                                'tabindex' => '',
//                                'editor_css' => '',
//                                'editor_class' => '',
                                'teeny' => true,// true para desastivar el more
//                                'dfw' => false,
//                                'tinymce' => true,
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
//                                'drag_drop_upload' => false,
                                
                                ); ?>
                            <?php wp_editor($content, $name_from, $setting_editor); ?>
                            <?php // wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false); ?>
                            <?php // wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false); ?>
                            <?php // debug($settings, false); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label></label>
                </th>
                <td>

                </td>
            </tr>

        </table>-->

        <p class="submit">
            <input type="submit" name="submit"class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>

    </form>
    </div>

    <?php
// debug($_REQUEST, false);
}
function select_pkconfig($opt_name) {
//    mt_pkconfig
//    $opt_name = 'mt_pkconfig';
    $opt_val = get_option($opt_name);
    return $db = json_decode($opt_val);
}





















// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
function mt_sublevel_page() {
    echo "<h2>" . __( 'Test Sublevel', 'menu-test' ) . "</h2>";
}

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
function mt_sublevel_page2() {
    echo "<h2>" . __( 'Test Sublevel2', 'menu-test' ) . "</h2>";
}