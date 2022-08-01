<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<head>

<?php get_header(); ?>

</head>

<header>
<?php get_template_part('includes/header'); ?>
</header>

<body <?php body_class(); ?>>




<?php if (have_posts()): ?>
  <?php while (have_posts()):the_post(); ?>
  <!-- Page Header -->

  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>


  <?php endwhile; ?>
  <?php endif; ?>

  


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

<footer>
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</footer>

</html>
