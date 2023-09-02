<?php 
//テーマの設定
function custom_theme_support() {
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));
  //有効化にしている
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('menus');
  register_nav_menus( array(
    'footer_nav' => esc_html__('footer navigation', 'hamburger'),
    'category_nav' => esc_html__('category navigation', 'hamburger'),
  ));
  add_theme_support('editor-styles');
  add_editor_style();
}
//実行
add_action('after_setup_theme', 'custom_theme_support');


//フォント、ファイル、jauery読み込み
function readScript() {
  wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array(), "");
  wp_enqueue_style('M+PLUS+1', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600;700&family=M+PLUS+1p:wght@400;500;700&display=swap', array(), "");
  wp_enqueue_style('FontAwesome', '//kit.fontawesome.com/b5c2f07411.js" crossorigin="anonymous', array(), "");
  wp_enqueue_style('hamburger', get_theme_file_uri('style.css'), array(), '1.0.0');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', '', '3.7.0', true);
  wp_enqueue_script('js', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0.0',true);
}
add_action('wp_enqueue_scripts','readScript');

