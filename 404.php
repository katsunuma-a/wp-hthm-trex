<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<head>

<?php get_header(); ?>

</head>

<header>
<?php get_template_part('includes/header'); ?>
</header>

<body>
<div class="not-found">
<h1>404</h1>
<p>Page Not Found</p>
<p>指定されたページが存在しません。</p>

<div class="not-btn">
<a href="/"><h5>TOPへ戻る</h5></a>
</div>

</div>

</body>

<footer>
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</footer>

</html>
