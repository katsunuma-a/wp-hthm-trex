
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>採用情報</title>
    <meta charset="utf-8">
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<header>

<?php get_template_part('includes/header'); ?>

</header>

<body>


<style>
  body{background-color: rgba(240, 244, 248, 1);}

</style>

  <!-- Page Header -->
  <header class="masthead-rct">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <span class="subheading">自分に合う仕事って<br/>なんだろう</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container-rct">
    <div class="row-rct">
        <h1>中途採用&emsp;求人一覧</h1>
        

        <ul class="rct">

          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedの設定
          $args = array(
            'posts_per_page' => 3, 
            'post_type' => array('item'), // 取得する投稿タイプのスラッグ
            'orderby' => 'date', //日付で並び替え
            'order' => 'DESC', // 降順 or 昇順
            'paged' => $paged

          );
          $my_posts = get_posts($args);
          ?>
          <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
          <div class="rct-posts">
          <li>

            <a href="<?php echo get_permalink($post->ID); ?>"></a>
              <div class="rct-cat">
              <?php
                $categories = get_the_category();
                if ( $categories ) {
                  foreach ( $categories as $category ) {
                    echo $category->name.' '; //ハイフン区切りにする場合は最後を'-'に変更
                  }
                }
              ?>
              </div>
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <h4 class="post-subtitle"><?php the_excerpt(); ?></h4>
            
          </li>
          </div>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        
        <!-- Pager -->

        <div class="clearfix">

        <?php 
        $link =  get_previous_posts_link('&larr;新しい記事へ');
        if($link){
        $link = str_replace('<a','<a class="btn btn-primary float-left"',$link);
        echo $link;
        }
        ?>

        <?php 
        $link = get_next_posts_link('古い記事へ&rarr;');
        if($link){
        $link = str_replace('<a','<a class="btn btn-primary float-right"',$link);
        echo $link;
        }
        ?>

        </div>
    </div>
  </div>

</body>

<footer>
<?php get_template_part ('includes/footer'); ?>

<?php get_footer(); ?>

</footer>

</html>
