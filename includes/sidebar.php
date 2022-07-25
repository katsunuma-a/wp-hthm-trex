
    <?php wp_body_open(); ?>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

      <?php 
      // メニューIDを取得する
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>


    <!--Navigation-->
    <nav class="sidebar">
      <ul>
        <li>
        <a class="nav-link" href="<?php echo esc_attr($item->url);?>"><?php echo esc_html($item->title);?></a>
        </li>
        <li>
          <link href="front-page.php">
          <a class="nav-link" href="/">TOP</a>
          </li>
          <li class="nav-item">
            <link href="page-21.php">
            <a class="nav-link" href="/page-21.php?page_id=21">Message</a>
          </li>
          <li class="nav-item">
            <link href="page-37.php">
            <a class="nav-link" href="/page-37.php?page_id=37">Member</a>
          </li>
          <li class="nav-item">
            <link href="single.php">
            <a class="nav-link" href="<?php
              $recent = get_posts('numberposts=1');
                if (count($recent) > 0) {
                    $recent_id = $recent[0]->ID;
                    $recent_url = get_permalink($recent_id);
                    echo $recent_url;
              } ?>">
            Blog</a>
          </li>
          <li class="nav-item">
            <link href="archive-item.php">
            <a class="nav-link" href="/item">採用情報</a>
        </li>
      </ul>
    </nav>
