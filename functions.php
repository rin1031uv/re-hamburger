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
  add_theme_support('automatic-feed-links');
  //add_theme_support('menus');
  register_nav_menus( array(
    'footer_nav' => esc_html__('footer navigation', 'hamburger'),
    'category_nav' => esc_html__('category navigation', 'hamburger'),
  ));
  add_theme_support('editor-styles');//エディタスタイル有効化
  add_editor_style();
}
//実行
add_action('after_setup_theme', 'custom_theme_support');

function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args -> add_li_class)) {
    $classes['class'] = $args -> add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


//フォント、ファイル、jauery読み込み
function readScript() {
  //フォント読み込み
  wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array(), "");
  wp_enqueue_style('M+PLUS+1', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600;700&family=M+PLUS+1p:wght@400;500;700&display=swap', array(), "");
  //FontAwesome読み込み
  wp_enqueue_script('FontAwesome', '//kit.fontawesome.com/b5c2f07411.js', array(), "", true);
  //スタイルシート読み込み
  wp_enqueue_style('my-style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
  //スタイルシート読み込み（コメントアウトのみ）
  wp_enqueue_style('hamburger', get_theme_file_uri('style.css'), array(), '1.0.0');
  //jQuery読み込み
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', '', '3.7.0', true);
  wp_enqueue_script('js', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0.0',true);
}
add_action('wp_enqueue_scripts','readScript');

//FontAwesomeを読み込むための記述
add_filter('script_loader_tag', 'custom_script_loader_tag', 10, 2);
function custom_script_loader_tag($tag, $handle) {
  if($handle !== 'FontAwesome') {
    return $tag;
  }
  return str_replace('></script','crossorigin="anonymous"></script>', $tag);
}

//絶対パス→相対パス
function make_href_root_relative($input) {
  return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}
//パーマリンク絶対パス→相対パス
function root_relative_permalinks($input) {
  return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );

//ページネーションの表示
//リライトルールの書き換え
if(is_admin()) {
add_action('init', function(){
  add_rewrite_rule(
    '(.?.+?)-([1-9][0-9]*).html$',
    'index.php?pagename=$matches[1]&paged=$matches[2]',
    'top'
  );
});
}

//パーマリンクカテゴリ削除
add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link) {
    return str_replace("/category/", "/", $link);
}
add_action('init', 'remcat_flush_rules');
function remcat_flush_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
add_filter('generate_rewrite_rules', 'remcat_rewrite');
function remcat_rewrite($wp_rewrite) {
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

//カードに取得・表示される抜粋の文の文字数を55単語から変更
function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );