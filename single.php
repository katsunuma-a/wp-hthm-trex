<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>
 
</head>
<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

<?php get_template_part('includes/header'); ?>

<?php if (have_posts()):?>
<?php while (have_posts()): the_post(); ?>

  <!-- Page Header -->
  <?php
  $img = get_eyecatch_with_default();
  ?>
  <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="overlay"></div>
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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <h1><?php the_title(); ?></h1>
          <?php the_content();?>
          <br/>
          <span class="meta">
            <?php the_date(); ?>&emsp;投稿&emsp;<?php the_author(); ?>
          </span>
        </div>
      </div>
    </div>
  </article>

  <?php endwhile; ?>
  <?php endif; ?>



</body>
<footer>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>
</footer>

</html>
