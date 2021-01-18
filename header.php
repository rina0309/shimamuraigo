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