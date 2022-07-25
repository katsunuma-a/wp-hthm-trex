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
        <h1>私たちは日々給与の対価に労働という<br/>人生の時間を使って働いています<br/>その働く時間をどう輝かせるかは自分次第<br/>
        納得のキャリアややりがいの感じる仕事で<br/>自分の人生の咲かせ方を考えてみませんか？</h1>
    </div>
    <div class="list-wrapper">
        <div class="msg-container">
            <div class="msg-back">
                <h1>Message</h1>
            </div>
            <div class="msg-img">
            </div>
        </div>
        <div class="mmb-container">
            <div class="mmb-front">
                <h1>Member</h1>
                <p>TREXで働く人たちが<br/>どんな働き方をしているか</p>
            </div>
            <div class="mmb-back">
            </div>
        </div>
        <div class="blog-container">
            <div class="blog-back">
            </div>
            <div class="blog-middle">
                <h1>TrexBlog</h1>
                <p>TREXで作ったアプリや日常の話       
            </div>
            <div class="blog-front">
            </div>
        <div class="career-container">
            <div class="career-back">
                <h1>採用情報</h1>
                <p>現在募集中の求人を 掲載しています</p>
            </div>
            <div class="career-front">
            </div>
        </div>
        <div class="entry-container">
            <div class="entry-btn">
            <a href="#"><h1>TREXにENTRY</h1></a>
            </div>
        </div>
    </div>
    <footer>
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    </footer>
</body>
</html>