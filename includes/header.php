<?php wp_body_open(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!--Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt="<?php bloginfo('name'); ?>"></a>
      <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <?php 
      // メニューIDを取得する
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php foreach($menu_items as $item): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_attr($item->url);?>"><?php echo esc_html($item->title);?></a>
          </li>
          <?php endforeach; ?>
          <li class="nav-item">
            <link href="front-page.php">
            <a class="nav-link" href="/">TOP</a>
          </li>
          <li class="nav-item">
            <link href="page-21.php">
            <a class="nav-link" href="<?php echo get_page_link(21);?>">Message</a>
          </li>
          <li class="nav-item">
            <link href="page-37.php">
            <a class="nav-link" href="<?php echo get_page_link(37);?>">Member</a>
          </li>
          <li class="nav-item">
            <link href="#">
            <a class="nav-link" href="<?php
              $recent = get_posts('numberposts=1');
                if (count($recent) > 0) {
                    $recent_id = $recent[0]->ID;
                    $recent_url = get_permalink($recent_id);
                    echo $recent_url;
              } ?>">Blog</a>
          </li>
          <li class="nav-item">
            <link href="single-item.php">
            <a class="nav-link" href="/item">採用情報</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>