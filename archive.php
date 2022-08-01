<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<header>

<?php get_template_part('includes/header'); ?>

</header>
<body>
  

  <!-- Page Header -->
  <header class="masthead">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="blog-btn">
        <a href="/column">記事一覧</a>
        <a href="#">画像一覧</a>
        <a href="<?php echo get_author_posts_url( 3 ); ?>">MIAO記事一覧</a>
        <a href="<?php echo get_author_posts_url( 2 ); ?>">TAKAO記事一覧</a>
      </div>
  <aside>
  <div class="blog-left">
        <div class="blog-prf">
            <div class="TAKAO-prf">
              <?php the_attachment_link( 75 ); ?>
              <h1>TAKAO</h1>
              <p>自己紹介自己紹介</p>
            </div>
            <div class="MIAO-prf">
            <?php the_attachment_link( 72 ); ?>
              <h1>MIAO</h1>
              <p>自己紹介自己紹介</p>
            </div>
        </div>
      </div>
     
  <div class="container">

  <div class ="posts-list-ttl">
  <h1>ブログ記事一覧</h1>
  </div>
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      query_posts('posts_per_page=3&paged=' . $paged); 
      ?>


            <?php if (have_posts()):?>
              <?php while (have_posts()): ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_post();?>
                  <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle">
                  <?php the_excerpt(); ?>
                </h3>
              </a>

        </div>

        <?php endwhile; ?>

        <!-- Pager -->

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
        
        <?php else: ?>
          <p>記事が見つかりませんでした</p>
          <?php endif; ?>



      <?php wp_reset_query(); ?>

      </div>      
    </div>
      
  </div>
  <div class="blog-right">
        <div class="cat-list">
          <p>カテゴリー一覧</p>
          <ul>
            <li><a href="/index.php?cat=4">お役立ち情報</a></li>
            <li><a href="/index.php?cat=5">発見情報</a></li>
            <li><a href="/index.php?cat=6">MIAO働く思考</a></li>
          </ul>
        </div>
        <div class="latest-list">
        <p>最新記事一覧</p>
        <ul>
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'offset' => 1,
            );
            $my_query = new WP_Query( $args );
        ?>

        <?php if ( $my_query->have_posts() ): ?>
        <?php while( $my_query->have_posts()): $my_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </ul>
        </div>
      </div>

      
  </aside>
<?php get_template_part ('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
