<!DOCTYPE html>
<html lang="ja">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!-- ディスクリプション -->
		<?php
			if(is_home()) {
				$description = get_bloginfo('description');
			} else if(is_tax('news')) {//お知らせ
				$description = 'どんぐり整骨院のお知らせ一覧ページです。どんぐり整骨院の更新情報をはじめとした各種情報を掲載しています。';
			} else if(is_single()) {
				$postsummary = strip_tags($post->post_content);
				$textsearch = array('\n','<br>','<br />');
				$postsummary = str_replace($textsearch, '', $postsummary);
				$postsummary = mb_substr($postsummary, 0, 50). '…';
				$description = $postsummary . ' | どんぐり整骨院';
			} else if(is_category()) {//ブログ > カテゴリ
				$description = 'どんぐり整骨院のカテゴリー一覧ページです。各サービスについての詳細な情報を公開します。';
			} else if(is_page('about')) {//当院のこだわり
				$description = 'どんぐり整骨院のこだわりをまとめたページです。';
			} else if(is_page('contact')) {//お問い合わせ
				$description = 'どんぐり整骨院のお問い合わせページです。お問い合わせの方はフォームよりご連絡ください。';
			}
		?>
		<meta name="description" content="<?php echo $description; ?>">
	<!-- /ディスクリプション -->
	<!-- タイトル -->
		<?php if( is_home()): ?>
			<title><?php bloginfo('name'); ?></title>
		<?php else: ?>
			<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<?php endif; ?>
	<!-- /タイトル -->
	<!-- ogp -->
		<?php
			if(is_home()) {
				$ogtype = 'website';
			} else {
				$ogtype = 'article';
			}
		?>
		<meta property="og:type" content="<?php echo $ogtype; ?>">
		<meta property="og:url" content="<?php echo("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
		<meta property="og:description" content="<?php echo $description; ?>">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/common/ogimage.png">
		<meta property="og:title" content="<?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<!-- /ogp -->

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">

</head>


<?php
  if(is_page()) {
    $page = get_post( get_the_ID() );
    $slug = $page->post_name;
  } elseif(is_home()) {//トップ
    $slug = 'index';
  } elseif(is_category() || is_single()) {//ブログ
    $slug = 'blog';
  }

?>


<body class="<?php echo $slug; ?>">



  <div id="container" class="bgc">
    <!-- ボード > 左上のアイコン -->
    <div class="PC bgc__icon">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo/donguri-children.png" alt="どんぐり家族">
        <p>ホーム</p>
      </a>
    </div>
    
    <div class="l-wrapper">
      <!-- ボード > 中央上部「クリップボード」 -->
      <div class="l-wrapper__clip">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clip/clip-shadow3.png" alt="クリップパーツ">
      </div>
      <!-- SP / 固定ナビ -->
      <nav class="SP sp-nav-fixed">
        <ul class="display-f-sp sp-nav-fixed__inner">
          <!-- トップ -->
          <li class="sp-nav-fixed__inner_box">
            <a href="/">
              <p>
                <img class="d-top" src="<?php echo get_template_directory_uri(); ?>/images/logo/donguri-kodawari.png" alt="トップ">
                <br>
                トップ
              </p>
            </a>
          </li>
          <!-- メニュー -->
          <li class="sp-nav-fixed__inner_box">
            <a href="/menu/">
              <p>
                <img class="d-sec" src="<?php echo get_template_directory_uri(); ?>/images/icon/menu-32.svg" alt="メニュー">
                <br>
                メニュー
              </p>
            </a>
          </li>
          <!-- アクセス -->
          <li class="sp-nav-fixed__inner_box">
            <a href="/access/">
              <p>
                <img class="d-thr" src="<?php echo get_template_directory_uri(); ?>/images/icon/map-32.svg" alt="アクセス">
                <br>
                アクセス
              </p>
            </a>
          </li>
          <!-- よくある質問 -->
          <li class="sp-nav-fixed__inner_box">
            <a href="/faq/">
              <p>
                <img class="d-four" src="<?php echo get_template_directory_uri(); ?>/images/icon/faq-32.svg" alt="よくある質問">
                <br>
                FAQ
              </p>
            </a>
          </li>
          <!--ハンバーガーメニュー -->
          <li>
            <div id="js-menuToggle" class="gnav-btn">
              <div class="gnav-btn__container">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </li>
        </ul>
      </nav>




      <!-- ハンバーガーメニュー / モバイルメニュー -->
      <div id="js-menu" class="mobile-menu">
        <h2 class="mobile-menu__ttl">menu</h2>
        <ul class="mobile-menu__main">
          <!-- 1.ホーム -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/">ホーム</a>
          </li>
          <!-- 2.当院のこだわり -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/about/">こだわり</a>
          </li>
          <!-- 3.メニュー -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/menu/">メニュー</a>
          </li>
          <!-- 4.交通事故施術 -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/koutu/">交通事故施術</a>
          </li>
          <!-- 5.訪問マッサージ -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/massage/">訪問マッサージ</a>
          </li>
          <!-- 6.ブログ -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/blog/">ブログ</a>
          </li>
          <!-- 7.院内／スタッフ紹介 -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/introduction/">院内紹介</a>
          </li>
          <!-- 8.アクセス -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/access/">アクセス</a>
          </li>
          <!-- 9.よくあるご質問 -->
          <li class="mobile-menu__item">
            <a class="mobile-menu__item__link" href="/faq/">よくある質問</a>
          </li>

        </ul>
      </div>





      <!-- お問い合わせボタン＋LINEボタン -->
      <div class="PC page-top__line">
        <a href="https://line.me/R/ti/p/%40962vsbox" class="page-top__line__link"></a>
      </div>

      <!-- スマホ表示用 電話+LINEボタン -->
      <div id="js-lineToggle" class="SP page-btm__btn">
        <div class="display-f-sp">
          <div class="page-btm__tel">
            <a href="#" class="page-btm__tel__link"></a>
          </div>
          <div class="page-btm__line">
            <a href="https://line.me/R/ti/p/%40962vsbox" class="page-btm__line__link"></a>
          </div>
        </div>
      </div>
