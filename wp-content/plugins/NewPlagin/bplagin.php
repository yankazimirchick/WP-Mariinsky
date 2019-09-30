<?php
/**
 * Plugin Name: bplagin
 * Description: Описание плагина желательно не очень длинное
 * Plugin URI:  Ссылка на инфо о плагине
 * Author URI:  Ссылка на автора
 * Author:      Ян
 * Version:     1.0
 *
 * Text Domain: Идентификатор перевода, указывается в load_plugin_textdomain()
 * Domain Path: Путь до файла перевода. Нужен если файл перевода находится не в той же папке, в которой находится текущий файл.
 *              Например, .mo файл находится в папке myplugin/languages, а файл плагина в myplugin/myplugin.php, тогда тут указываем "/languages"
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:     Укажите "true" для возможности активировать плагин по все сети сайтов (для Мультисайтовой сборки).
 */
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}
// Добавление Страницы настроек в меню
function add_settings_page() {
    add_menu_page( __( 'Опции темы' ), __( 'Опции' ), 'manage_options', 'settings', 'theme_settings_page');
}
//Добавление действий
//add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );