  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
          <li class="list-inline-item">
          <img class="site-logo" src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt="<?php bloginfo('name'); ?>">
            </li>
            <li class="list-inline-item">
              <a href="/">
              Top
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_page_link(21);?>">
              Message
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo get_page_link(37);?>">
              Member
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php
              $recent = get_posts('numberposts=1');
                if (count($recent) > 0) {
                    $recent_id = $recent[0]->ID;
                    $recent_url = get_permalink($recent_id);
                    echo $recent_url;
              } ?>">
              Blog
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/item">
              採用情報
              </a>
            </li>
            <br/>
            <li class="list-inline-item">
              <a href="https://www.trex-group.com/" target="blank">
              コーポレートサイト
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/contact/">
              お問い合わせ
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.trex-group.com/hogohoshin/" target="blank">
              個人情報保護方針
              </a>
            </li>
            <li class="list-inline-item">
            <img class="site-logo" src="<?php echo esc_url(get_theme_file_uri('img/p-mark.png')); ?>" alt="<?php bloginfo('name'); ?>">
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; 2022 Trex-Group.</p>
        </div>
      </div>
    </div>
  </footer>