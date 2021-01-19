<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>島村囲碁クラブ</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <header>
        <div class="header__inner">
            <h1><a href="home.html"><img src="<?php echo get_theme_file_uri('images/logo_1.png'); ?>" alt="島村囲碁クラブ"></a></h1>
                        <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <ul class="g-nav__list">
                        <li class="g-nav__item">
                            <a href="fee.html" class="g-nav__link">料金</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="lesson.html" class="g-nav__link">初心者・段位者レッスン【浩揮会】</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="affiliation.html" class="g-nav__link">プロ棋士指導碁・所属棋士</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="igoclass.html" class="g-nav__link">囲碁教室</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="taiseikai.html" class="g-nav__link">泰正会</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="g-nav">
                <ul class="g-nav__list">
                    <li class="g-nav__item">
                        <a href="fee.html" class="g-nav__link">料金</a>
                    </li>
                    <li class="g-nav__item">
                        <a href="lesson.html" class="g-nav__link">初心者・段位者レッスン【浩揮会】</a>
                    </li>
                    <li class="g-nav__item">
                        <a href="affiliation.html" class="g-nav__link">プロ棋士指導碁・所属棋士</a>
                    </li>
                    <li class="g-nav__item">
                        <a href="igoclass.html" class="g-nav__link">囲碁教室</a>
                    </li>
                    <li class="g-nav__item">
                        <a href="taiseikai.html" class="g-nav__link">泰正会</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
                      <?php if( have_posts()):?>
        <?php while(have_posts()): the_post();?>
          <article id="post-<?php the_ID();?><?php post_class('');?>">
                <h2><?php the_title();?></h2>
                <p><?php the_content();?></p>
            </article>
                  <?php endwhile;?>
                  <?php endif; ?>

    </main>
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__flex">
                <h1><img src="<?php echo get_theme_file_uri('images/logo_1.png'); ?>" alt="島村囲碁クラブ"></a></h1>
                            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <ul class="g-nav__list">
                        <li class="g-nav__item">
                            <a href="fee.html" class="g-nav__link">料金</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="lesson.html" class="g-nav__link">初心者・段位者レッスン【浩揮会】</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="affiliation.html" class="g-nav__link">プロ棋士指導碁・所属棋士</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="igoclass.html" class="g-nav__link">囲碁教室</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="taiseikai.html" class="g-nav__link">泰正会</a>
                        </li>
                    </ul>
                </div>
            </div>
                <nav class="g-nav">
                    <ul class="g-nav__list">
                        <li class="g-nav__item">
                            <a href="" class="g-nav__link">料金</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="" class="g-nav__link">初心者・段位者レッスン【浩揮会】</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="" class="g-nav__link">プロ棋士指導碁・所属棋士</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="" class="g-nav__link">囲碁教室</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="" class="g-nav__link">泰正会</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <p class="footer__copy"><small>Copyright © 2020 島村囲碁クラブ.</small></p>
        </div>
    </footer>
</body>

</html>