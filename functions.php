<?php
add_action('init',function(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    //　メニューをサポート
    register_nav_menus([
      'global_nav' => 'グローバルナビゲーション',
    ]);
});

add_action('init',function(){
    register_post_type('item',[
      'label' => '採用情報',
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-thumbs-up',
      'supports' => ['title','editor','thumbnail','excerpt','page-attributes','author'],
      'has_archive' => true,
      'hierarchical' => true,
    ]);
    register_taxonomy_for_object_type('category', 'item');
    register_taxonomy_for_object_type('post_tag', 'item');
});

/*　アイキャッチ画像がなければ、標準画像を取得する　*/
function get_eyecatch_with_default()
{
    if (has_post_thumbnail()): 
        $id = get_post_thumbnail_id(); 
        $img = wp_get_attachment_image_src($id,'large'); 
        else:
          $img = array(get_template_directory_uri().'/img/post-bg.jpg');
        endif;
      
        return $img;

}

function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'column'; // 任意のURL
    $args['label'] = 'Blog投稿'; // 管理画面の「投稿」の表示名です　
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );




function add_files(){
    wp_enqueue_style('my_style','/style.css');
}
add_action('wp_enqueue_scripts', 'add_files');

