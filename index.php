<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

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
        <div class="header__image"><img src="<?php echo get_theme_file_uri('images/header.png'); ?>" alt="">
        </div>
        <div class="header__inner">
            <h1><a href="<?php echo home_url('/');?>"><img src="<?php echo get_theme_file_uri('images/logo_1.png'); ?>" alt="島村囲碁クラブ"></a></h1>
            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <ul class="g-nav__list">
                        <li class="g-nav__item">
                            <a href="<?php echo home_url('fee/');?>" class="g-nav__link"></a>
                        </li>
                        <li class="g-nav__item">
                            <a href="<?php echo home_url('fee/');?>lesson.html" class="g-nav__link">初心者・段位者レッスン【浩揮会】</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="<?php echo home_url('fee/');?>affiliation.html" class="g-nav__link">プロ棋士指導碁・所属棋士</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="<?php echo home_url('fee/');?>igoclass.html" class="g-nav__link">囲碁教室</a>
                        </li>
                        <li class="g-nav__item">
                            <a href="<?php echo home_url('fee/');?>taiseikai.html" class="g-nav__link">泰正会</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="g-nav">
                <ul class="g-nav__list">
                    <li class="g-nav__item">
                        <a href="fee.php" class="g-nav__link">料金</a>
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
        <p class="media__text">「島村囲碁クラブ」は、創業52年、名駅三丁目にある名古屋最大の囲碁クラブです。
            <br>・毎日、プロ棋士の指導碁あり ・フリーの方、大歓迎
            <br>・初心者、級位者への指導あり ・団体様の御予約可
            御来店、心よりお待ちしております。
        </p>

        <div class="news">
            <div class="news__inner">
                <div class="news__titleAll">
                    <p class="news__sub-title">NEWS</p>
                    <h2 class="news__title">お知らせ</h2>
                </div>

                <ul class="news__list">
                    <li class="news__item">
                        <a href="<?php the_permalink(); ?>">
                            <p class="news__day"><?php the_time('Y年n月j日'); ?></p>
                            <p><?php the_title(); ?></p>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="<?php the_permalink(); ?>">
                            <p class="news__day"><?php the_time('Y年n月j日'); ?></p>
                            <p><?php the_title(); ?></p>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="<?php the_permalink(); ?>">
                            <p class="news__day"><?php the_time('Y年n月j日'); ?></p>
                            <p><?php the_title(); ?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="access">
            <div class="access__inner">
                <div class="access__titleAll">
                    <p class="access__sub-title">ACCESS</p>
                    <h2 class="access__title">交通案内</h2>
                </div>

                <div class="access__date">
                    <dl class="access__box">
                        <dt class="access__box__dt">住所</dt>
                        <dd class="access__box__dd">名古屋市中村区名駅三丁目２２番８号<br>
                            大東海ビル地下一階</dd>
                    </dl>
                    <dl class="access__box">
                        <dt class="access__box__dt">交通機関</dt>
                        <dd class="access__box__dd">「名古屋」より徒歩7分（ユニモール⑫出口の目の前）<br>
                            「国際センター」より徒歩3分（ユニモール⑭出口の目の前）</dd>
                    </dl>
                    <dl class="access__box">
                        <dt class="access__box__dt">お問い合わせ</dt>
                        <dd class="access__box__dd">052-589-2056</dd>
                    </dl>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__flex">
                <h1><img src="<?php echo get_theme_file_uri('images/logo_1.png'); ?>" alt="島村囲碁クラブ"></h1>
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
  <?php wp_footer(); ?>
</body>

</html>