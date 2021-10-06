<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="どんぐり整骨院, 埼玉県, 所沢市, 整骨院, 駐車場あり">
	<meta name="description" content="埼玉県所沢市を拠点に置く、地元形の整骨院です。">
	<title>どんぐり整骨院 | 埼玉県所沢市の整骨院</title>

	<link rel="alternate" hreflang="ja" href="/">



	<!-- ogp -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="/">
	<meta property="og:description" content="埼玉県所沢市を拠点に置く、地元形の整骨院です。">
	<meta property="og:image" content="">
	<meta property="og:title" content="どんぐり整骨院 | 埼玉県所沢市の整骨院">
	<meta property="og:site_name" content="">
	<!-- /ogp -->

	<!-- swiper関連 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<!-- // swiper関連 -->

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">
</head>
<body class="<%= page['bodyclass'] %>">
  <div class="bgc">
    <!-- ボード > 左上のアイコン -->
    <div class="bgc__icon">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo/donguri-children.png" alt="どんぐり家族">
      </a>
    </div>
    
    <div class="l-wrapper">
      <!-- ボード > 中央上部「クリップボード」 -->
      <div class="l-wrapper__clip">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clip/clip-shadow3.png" alt="クリップパーツ">
      </div>
      <!--ハンバーガーメニュー -->
      <div id="js-menuToggle" class="gnav-btn">
        <div class="gnav-btn__container">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <!-- ハンバーガーメニュー / モバイルメニュー -->
      <div id="js-menu" class="mobile-menu">
        <h2 class="mobile-menu__ttl">menu</h2>
        <ul class="mobile-menu__main">
            <!-- 1.ホーム -->
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="/">
                    <span class="en-title">HOME</span>
                    <span class="ja-title">ホーム</span>
                </a>
            </li>
            <!-- 2.当院のこだわり -->
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="/about/">
                    <span class="en-title">about</span>
                    <span class="ja-title">当院のこだわり</span>
                </a>
            </li>
            <!-- 3.メニュー／料金表 -->
            <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="/menu/">
                    <span class="en-title">menu</span>
                    <span class="ja-title">メニュー</span>
                </a>
            </li>
            <!-- 4.交通事故施術 -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/accident/">
                  <span class="en-title">accident</span>
                  <span class="ja-title">交通事故施術</span>
              </a>
            </li>
            <!-- 5.訪問マッサージ -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/visit/">
                  <span class="en-title">visit</span>
                  <span class="ja-title">訪問マッサージ</span>
              </a>
            </li>
            <!-- 6.ブログ -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/blog/">
                  <span class="en-title">blog</span>
                  <span class="ja-title">ブログ</span>
              </a>
            </li>
            <!-- 7.院内／スタッフ紹介 -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/introduction/">
                  <span class="en-title">introduction</span>
                  <span class="ja-title">院内／スタッフ</span>
              </a>
            </li>
            <!-- 8.アクセス -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/access/">
                  <span class="en-title">access</span>
                  <span class="ja-title">アクセス</span>
              </a>
            </li>
            <!-- 9.よくあるご質問 -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/faq/">
                  <span class="en-title">FAQ</span>
                  <span class="ja-title">よくある質問</span>
              </a>
            </li>
            <!-- 10.ご予約／お問い合わせ -->
            <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="/contact/">
                  <span class="en-title">CONTACT</span>
                  <span class="ja-title">ご予約／お問い合わせ</span>
              </a>
            </li>

        </ul>
      </div>

      <!-- お問い合わせボタン＋LINEボタン -->
      <div class="page-top__btn">
        <div class="page-top__contact">
          <a href="#" class="page-top__contact__link"></a>
        </div>
        <div class="page-top__line">
          <a href="#" class="page-top__line__link"></a>
        </div>
      </div>


