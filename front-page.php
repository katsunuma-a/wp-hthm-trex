<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<head>

<title>株式会社トレックス</title>
   
</head>
<body>
<?php get_header(); ?>
    <div class="top-wrapper">
    <aside>
    <?php get_template_part('includes/sidebar'); ?>
    </aside>

        <h1>人生の咲かせ方</h1>
        <h2>HOW do you bloom your life?</h2>

    </div>
    <div class="txt-wrapper">
        <h1>私たちは日々給与の対価に労働という</h1>
        <h1>人生の時間を使って働いています</h1>
        <h1>その働く時間をどう輝かせるかは自分次第</h1>
        <h1>納得のキャリアややりがいの感じる仕事で</h1>
        <h1>自分の人生の咲かせ方を考えてみませんか？</h1>
    </div>
    <div class="list-wrapper">
        <div class="msg-container">
            <a class="nav-link" href="/page-21.php?page_id=21">
            <div class="msg-back">
                <h1>Message</h1>
            </div>
            </a>
            <link href="page-21.php">
            <div class="msg-img">
            </div>
        
        </div>
        <div class="mmb-container">
        <link href="page-37.php">
            <a class="nav-link" href="/page-37.php?page_id=37">
            <div class="mmb-front">
                <h1>Member</h1>
                <p>TREXで働くスタッフ紹介<br/>担当のお仕事ややりがいに<br/>ついて語っています</p>
            </div>
            </a>

            <div class="mmb-back">
            </div>
        </div>
        <div class="blog-container">
            <div class="blog-back">
            </div>
            <a href="<?php
              $recent = get_posts('numberposts=1');
                if (count($recent) > 0) {
                    $recent_id = $recent[0]->ID;
                    $recent_url = get_permalink($recent_id);
                    echo $recent_url;
              } ?>">
            <div class="blog-middle">
                <h1>TrexBlog</h1>
                <p>TREXで作ったアプリや日常の話など</p>
                </a>     
            </div>

              <div class="blog-front">
            </div>
        <div class="career-container">
        <link href="archive-item.php">
            <a class="nav-link" href="/item">
            <div class="career-back">
                <h1>採用情報</h1>
            </div>
            </a>
            <div class="career-front">
            </div>
        </div>
        <div class="entry-container">
            <div class="entry-btn">
            <a href="#"><h1>TREXにENTRY</h1></a>
            </div>
        </div>
    </div>

</body>
<footer>
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</footer>
</html>