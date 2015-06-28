<?php
// THEME OPTION PAGE
add_action('admin_menu', 'theme_menu');

function theme_menu() {
    add_menu_page('Setting theme pages', 'Setting theme pages', 'administrator', 'theme_setting', 'theme_display');
}

function dangkyJavascripUploadLogo(){
    if (isset($_GET['page']) && $_GET['page'] == 'theme_setting')
     {
         wp_enqueue_script('jquery');
         wp_enqueue_script('media-upload');
         wp_enqueue_script('thickbox');
         wp_register_script('my-logo_upload', get_template_directory_uri().'/scripts/logoupload.js', array('jquery','media-upload','thickbox'));
         wp_enqueue_script('my-logo_upload');
     }
}
function dangkyStyleUploadLogo()
{
     if (isset($_GET['page']) && $_GET['page'] == 'theme_setting')
     {
        wp_enqueue_style('thickbox');
     }
}
add_action('admin_print_scripts', 'dangkyJavascripUploadLogo');
add_action('admin_print_styles', 'dangkyStyleUploadLogo');

add_action('admin_init', 'theme_setting_regiter');

function theme_setting_regiter() {

    register_setting('my_theme_group', 'logo_src');

}

function theme_display() {
    ?>
    <div class="wrap">
        <?php screen_icon(); ?><h2>Theme Option</h2>
        <form id="social_link" action="options.php" method="post">
            <?php settings_fields('my_theme_group'); ?>
            <table>
  
                <tr valign="top">
                    <td>
                        <img src="<?php echo get_option('logo_src'); ?>" style="width:50px"><br/>
                        <p><b><?php echo __( 'LOGO', 'theme_sangiler' ) ?></b></p>
                        <input id="image_location" type="text" name="logo_src" value="<?php echo get_option('logo_src'); ?>" size="50" placeholder="LOGON IMAGE" />
                        <input  class="onetarek-upload-button button" type="button" value="Chọn hình ảnh" />
                    </td>
                </tr>
               

            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
?>
