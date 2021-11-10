<?php
/*
Template Name: HOUMON template
*/
	get_header('page');
?>


<!-- 紙 -->
<div class="l-paper">
	<header id="header" class="l-header">
		<div class="l-header__wrap">
			<nav class="c-header">
				<!-- 固定ページ > ヘッダー -->
				<div class="c-header__pic">
					<h1 class="c-header__pic__title">訪問マッサージ<br><span>HOUMON MASSAGE</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>

				<!-- ul -->
				<?php $args = array(
					'menu' => 'header-menu', //管理画面で作成したメニュー名
					'menu_class' => 'c-header__gnav', //メニューを構成する<ul>タグのクラス名
					'container' => 'false', //<ul>タグを囲っている<div>タグについて
					'link_before'  => '<div class="c-header__gnav__iconbox"></div><p class="c-header__gnav__text">',//テキストの直前
					'link_after'      => '</p>',//テキストの直後
				);
					wp_nav_menu($args);
				?>
				<!-- // ul -->


			</nav>
		</div>
	</header>




	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">

	<!-- タイトルタイトル -->
	<section class="page-kodawari">
		<!-- <h2 class="page-kodawari__title arch">お客様に寄り添う施術</h2> -->


		<div class="page-kodawari__bottombox">
		<div class="page-kodawari__bottombox__pic">
			<img src="<?php echo get_template_directory_uri(); ?>//images/pic/sample-pic.png" alt="">
		</div>
		<div class="page-kodawari__bottombox__text">
			<h3>お客様の小さな声に耳を傾けて的確な施術を行います。</h3>
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
		</div>
		</div>

		<div class="page-kodawari__bottombox">
		<div class="page-kodawari__bottombox__pic">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="">
		</div>
		<div class="page-kodawari__bottombox__text">
			<h3>ただ治すだけの施術では意味がありません。『アフター施術』が大事！！</h3>
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
		</div>
		</div>

	</section>



	<!-- スタッフ紹介 -->
	<section class="page-kodawari pd-btm">
		<!-- <h2 class="page-kodawari__title arch">初めての患者さまへ</h2> -->
		<!-- 画像説明 -->
		<div class="page-kodawari-fristbox">
			<div class="page-kodawari-fristbox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="こだわりその１">
				<h3 class="page-kodawari-fristbox__pic__title">ご利用までの流れ</h3>
			</div>
			<div class="page-kodawari-fristbox__textbox">
				<h4>1.LINE公式アカウントからご予約</h4>
				<p>どんぐり整骨院では予約のお客様を優先しておりますので、『<a href="">LINE公式アカウント</a>』からQRコードお持ちのスマートフォンまたは携帯から読み込んでいただき、お友達ご登録した後、ご予約をお願いします。ご予約方法につきましては公式LINEアカウントの方からお知らせいたします。</p>

				<h4>2.カウンセリング</h4>
				<p>施術当日、受付にてカウンセリングシートを受け取っていただき、お体でお悩みの場所や症状についてご記入をお願いいたします。</p>

				<h4>3.調査・施術方法のご提案</h4>
				<p>お答えいただいたカウンセリングシートを拝見させていただき、直接調査した上で施術方法をご提案＆ご説明させていただきます。</p>

				<h4>4.施術</h4>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

				<h4>5.アドバイス</h4>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

			</div>
		</div>



		<div class="display-f">

		</div>

	</section>
	</div>




<!-- ここまでコンテンツ -->
<?php get_footer(); ?>