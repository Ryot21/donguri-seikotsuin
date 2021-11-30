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
			<div class="c-header">
				<!-- 固定ページ > ヘッダー -->
				<div class="c-header__pic">
					<h1 class="c-header__pic__title">訪問マッサージ<br><span>HOUMON MASSAGE</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-mas.jpg" alt="サイトヘッダー">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>
				<nav class="pc-nav">
					<!-- ul -->
					<?php $args = array(
						'menu' => 'header-menu', //管理画面で作成したメニュー名
						'menu_class' => 'pc-nav__lists', //メニューを構成する<ul>タグのクラス名
						'container' => 'false', //<ul>タグを囲っている<div>タグについて
						'link_before'  => '<div class="pc-nav__lists__iconbox"></div><p class="pc-nav__lists__text">',//テキストの直前
						'link_after'      => '</p>',//テキストの直後
					);
						wp_nav_menu($args);
					?>
					<!-- // ul -->
				</nav>
			</div>
		</div>
	</header>




	<!-- ここからコンテンツ -->
	<div id="area-3" class="page l-container">

	<!-- タイトルタイトル -->
	<!-- <section class="page-kodawari"> -->
		<!-- <h2 class="page-kodawari__title arch">お客様に寄り添う施術</h2> -->


		<div class="topbox page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>//images/pic/sample-pic.png" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>お客様の小さな声に耳を傾けて的確な施術を行います。</h3>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
			</div>
		</div>

		<div class="page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>ただ治すだけの施術では意味がありません。『アフター施術』が大事！！</h3>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
			</div>
		</div>

	</section>



	<div class="page-box pd-btm">
		<div class="page-kotei-fristbox">
			<h2 class="page-kotei__title arch pd-top">ご利用までの流れ</h2>
			<div class="page-kotei-fristbox__textbox">
				<h4>1.LINEや電話からご予約</h4>
				<div class="display-f c-flow-box">
					<div class="c-flow-box-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-line.jpg" alt="ご予約方法">
					</div>
					<p>当院ではLINEやお電話からのご予約を行うことができます。<a href="https://line.me/R/ti/p/%40962vsbox" class="red-text">こちら</a>からアクセスいただき、QRコードをお持ちのスマートフォンから読み込んでいただき、お友達ご登録した後にご予約をお願いします。</p>
				</div>


				<h4>2.カウンセリング</h4>
				<div class="display-f c-flow-box">
					<div class="c-flow-box-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-1.jpg" alt="カウンセリング">
					</div>
					<p>施術当日、受付にてカウンセリングシートを受け取っていただき、お体でお悩みの場所や症状についてご記入をお願いいたします。</p>
				</div>


				<h4>3.検査</h4>
				<div class="display-f c-flow-box">
					<div class="c-flow-box-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-2.jpg" alt="検査">
					</div>

					<p>お答えいただいたカウンセリングシートを拝見させていただき、直接調査した上で施術方法をご提案＆ご説明させていただきます。</p>
				</div>


				<h4>3.施術</h4>
				<div class="display-f c-flow-box">
					<div class="c-flow-box-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-3.jpg" alt="施術">
					</div>

					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				</div>
				<h4>4.アフターカウンセリング</h4>
				<div class="display-f c-flow-box">
					<div class="c-flow-box-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-4.jpg" alt="アフターカウンセリング">
					</div>
					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				</div>


			</div>
		</div>
	</div>



	<!-- </section> -->
	</div>




<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>