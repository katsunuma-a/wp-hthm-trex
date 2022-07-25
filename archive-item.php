
<!DOCTYPE html>
<html lang="ja">


<head>
<title>株式会社トレックス | 採用情報</title>
</head>

<body>
<?php get_header(); ?>
<?php get_template_part('includes/header'); ?>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-sample-image.jpg')">
    <div class="overlay"></div>
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
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
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
        <div class="clearfix">
        
        </div>
        <?php else: ?>
          <p>記事が見つかりませんでした</p>
          <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_template_part ('includes/footer'); ?>

<?php get_footer(); ?>

</body>

</html>
