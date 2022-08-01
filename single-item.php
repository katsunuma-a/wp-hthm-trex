<!DOCTYPE html>

<html <?php language_attributes(); ?>>

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
  <header class="masthead-rct-post">
    <div class="container-rct-post">
      <div class="row-rct-post">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <span class="subheading">自分に合う仕事って<br/>なんだろう</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
    <div class="container-rct-post">
      <div class="row-rct-post-ttl">
            <h1><?php the_title(); ?></h1>
      </div>
    </div>

  <!-- Post Content -->
  <article>
    <div class="container-rct-post">
      <div class="row-rct-post-ctt">
          <?php the_content();?>
      </div>
    </div>
  </article>



  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>
