/* register menu item */
function msp_helloworld_admin_menu_setup() {
    add_submenu_page(
        'options-general.php',
        'Helloworld Settings',
        'Helloworld',
        'manage_options',
        'msp_helloworld',
        'msp_helloworld_admin_page_screen'
    );
}

//menu setup
add_action('admin_menu', 'msp_helloworld_admin_menu_setup');

/* display page content */
function msp_helloworld_admin_page_screen() {
    global $submenu;

    // access page settings
    $page_data = array();

    foreach ($submenu['options-general.php'] as $i => $menu_item) {
        if ($submenu['options-general.php'][$i][2] == 'msp_helloworld') {
            $page_data = $submenu['options-general.php'][$i];
        }
    }
    // output
?>
    <div class="wrap">
        <?php screen_icon(); ?>
        <h2><?php echo $page_data[3]; ?></h2>
        <form id="msp_helloworld_options" action="options.php" method="post">
            <?php
            settings_fields('msp_helloworld_options');
            do_settings_sections('msp_helloworld');
            submit_button('Save options', 'primary', 'msp_helloworld_options_submit');
            ?>
        </form>
    </div>
    <?php
}

/* settings link in plugin management screen */

function msp_helloworld_settings_link($actions, $file) {
    if (false !== strpos($file, 'msp-helloworld')) {
        $actions['settings'] = '<a href="options-general.php?page=msp_helloworld">Settings</a>';
    }

    return $actions;
}

add_filter('plugin_action_links', 'msp_helloworld_settings_link', 2, 2);