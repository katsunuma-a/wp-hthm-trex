<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<head>
    
</head>

<header>

    <?php get_template_part('includes/header'); ?>

</header>

<body>

<div class="cont">
お問い合わせ内容を記入してください

<?php echo do_shortcode('[mwform_formkey key="62"]'); ?>


</div>

</body>
<footer>
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    </footer>
</html>