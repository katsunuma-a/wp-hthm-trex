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

//一覧ページに記事1枚目画像を表示
//画像サイズをセット
set_post_thumbnail_size( 150, 150, true );
//画像URLからIDを取得
function get_attachment_id_by_url( $url ) {
  global $wpdb;
  $sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
  preg_match( '/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches );
  $post_name = $matches[1];
  return ( int )$wpdb->get_var( $wpdb->prepare( $sql, $post_name ) );
}
//画像をサムネイルで出力
function catch_that_image() {
  global $post;
  $first_img = '';
  $output = preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
  $first_img_src = $matches[1][0];
  $attachment_id = get_attachment_id_by_url( $first_img_src );
  $first_img = wp_get_attachment_image( $attachment_id, 'thumbnail', false, array( 'class' => 'archive-thumbnail' ) );
  if( empty( $first_img ) ){
    $first_img = '<img class="attachment_post_thumbnail" src="img/image.jpg" alt="No image" />';
  }
  return $first_img;
}

function my_redirect($redirect_url){
	if(is_single()){$redirect_url = false;}
	else{return $redirect_url;}
}
add_filter('redirect_canonical','my_redirect');


//エスケープ処理を行う関数
function h($var) {
  if(is_array($var)){
    //$varが配列の場合、h()関数をそれぞれの要素について呼び出す（再帰）
    return array_map('h', $var);
  }else{
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
  }
}
 
//入力値に不正なデータがないかなどをチェックする関数
function checkInput($var){
  if(is_array($var)){
    return array_map('checkInput', $var);
  }else{
    //NULLバイト攻撃対策
    if(preg_match('/\0/', $var)){  
      die('不正な入力です。');
    }
    //文字エンコードのチェック
    if(!mb_check_encoding($var, 'UTF-8')){ 
      die('不正な入力です。');
    }
    //改行、タブ以外の制御文字のチェック
    if(preg_match('/\A[\r\n\t[:^cntrl:]]*\z/u', $var) === 0){  
      die('不正な入力です。制御文字は使用できません。');
    }
    return $var;
  }
}