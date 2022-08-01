<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<head>
    <meta charset="utf-8">
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<header>

<?php get_template_part('includes/header'); ?>

</header>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>


<?php if (have_posts()):?>
<?php while (have_posts()): the_post(); ?>

  <!-- Page Header -->
  <?php
  $img = get_eyecatch_with_default();
  ?>

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

  <!-- Post Content -->
  <article>
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
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="blog-btn">
                <a href="/column">記事一覧</a>
                <a href="<?php echo get_page_link(114);?>">画像一覧</a>
                <a href="<?php echo get_author_posts_url( 3 ); ?>">MIAO記事一覧</a>
                <a href="<?php echo get_author_posts_url( 2 ); ?>">TAKAO記事一覧</a>
              </div>
              <h1><?php the_title(); ?></h1>
              <br/>
              <p><?php the_content();?></p>
              <br/>
              <span class="meta">
                <?php the_date(); ?>&nbsp;投稿&emsp;<?php the_author(); ?>
              </span>
              <br/>
              <a href="#">
              <div class="rtn-top">TOPへ戻る
              </div>
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
  </article>

  <?php endwhile; ?>
  <?php endif; ?>



</body>
<footer>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>
</footer>

</html>
