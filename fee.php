<?php
/*
Template Name: fee
*/
?>

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
            <h1><a href="<?php echo home_url('/');?>"><img src="<?php echo get_theme_file_uri('images/logo_1.png'); ?>" alt="島村囲碁クラブ"></a></h1>
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
        <div class="admission">
            <div class="admission__inner">
                <div class="admission__titleAll">
                    <p class="admission__sub-title">ADMISSION FEE</p>
                    <h2 class="admission__title">入場料</h2>
                </div>
                <table class="admission__table">
                    <tbody class="admission__tbody">
                        <tr class="admission__tr">
                            <th class="admission__th">一般</th>
                            <td class="admission__td">1,200円</td>
                        </tr>
                        <tr class="admission__tr">
                            <th class="admission__th">女性・大学生</th>
                            <td class="admission__td">900円</td>
                        </tr>
                        <tr class="admission__tr">
                            <th class="admission__th">高校生以下</th>
                            <td class="admission__td">600円</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="admission__list">
                    <li class="admission__item">※全て税込み価格です。</li>
                    <li class="admission__item">※入場料で１日ご利用いただけます。</li>
                </ul>
            </div>
        </div>

        <div class="coupon">
            <div class="coupon__inner">
                <div class="coupon__titleAll">
                    <p class="coupon__sub-title">COUPON</p>
                    <h2 class="coupon__title">お得な回数券</h2>
                </div>
                <table class="coupon__table">
                    <tbody class="coupon__tbody">
                        <tr class="coupon__tr">
                            <th class="coupon__th">男性</th>
                            <td class="coupon__td">10,800円</td>
                        </tr>
                        <tr class="coupon__tr">
                            <th class="coupon__th">女性</th>
                            <td class="coupon__td">8,100円</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="coupon__list">
                    <li class="coupon__item">10枚つづり（入場料一回分無料）</li>
                    <li class="coupon__item">※全て税込み価格です。</li>
                    <li class="coupon__item">※有効期限６ヶ月</li>
                </ul>
            </div>
        </div>

    </main>
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__flex">
                <h1><img src="images/logo_1.png" alt="島村囲碁クラブ"></h1>
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