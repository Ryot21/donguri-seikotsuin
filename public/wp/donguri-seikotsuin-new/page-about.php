<?php
/*
Template Name: ABOUT template
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
					<h1 class="c-header__pic__title">こだわり<br><span>KODAWARI</span></h1>
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-title-about-1-scaled-e1637742642698.jpg" alt="こだわりページ">
					<!-- パンくず -->
					<?php get_template_part('module/breadcrumb'); ?>
				</div>
				<!-- ナビゲーション -->
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
		<section class="page-kotei">
			<h2 class="page-kotei__title arch">お客様に寄り添う施術</h2>


			<div class="page-kotei__bottombox">
				<div class="page-kotei__bottombox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>//images/pic/donguri-kodawari-1.jpg" alt="こだわりその１">
				</div>
				<div class="page-kotei__bottombox__text">
					<h3>お客様の小さな声に耳を傾けて的確な施術を行います。</h3>
					<p>どんぐりの施術の特徴は筋肉の深層に潜り込み、ピンポイントで深く持続した圧を加えて、
					筋肉を傷付けずに、施術していきます。
					早い圧では力積が少ないので緩みません。
					プロの施術をぜひご体感ください。</p>
				</div>
			</div>

			<div class="page-kotei__bottombox">
				<div class="page-kotei__bottombox__pic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-kodawari-2.jpg" alt="こだわりその2">
				</div>
				<div class="page-kotei__bottombox__text">
					<h3>豊富な治療経験から解決策を必ず見つけます！</h3>
					<p>
					豊富な治療経験と最新医療機器で疲労回復から急性症状の治療までご対応いたします。
					ぎっくり腰・寝違え・五十肩・腱鞘炎・坐骨神経痛・変形性膝関節症などでお悩みの方。ぜひご相談ください。
					</p>
				</div>
			</div>

		</section>

		<!-- スタッフ紹介 -->
		<section class="page-kotei page-box pd-btm">
			<h2 class="page-kotei__title arch">スタッフ紹介</h2>
			<!-- 画像説明 -->
			<!-- <div class="display-f"> -->
				<div class="page-kotei-fristbox">
					<div class="page-kotei-fristbox__pic">
						<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-syougo.jpg" alt="佐藤翔吾 院長">
					</div>
					<div class="page-kotei-fristbox__textbox">
						<h3 class="staff-title">佐藤 翔吾（院長）</h3>

						<h4 class="staff-subtitle">得意な治療分野</h4>
						<p class="staff-text">スポーツ外傷、トレーニング指導、テ－ピング、トリガーポイント療法</p>

						<h4 class="staff-subtitle">趣味・特技</h4>
						<p class="staff-text">野球、バトミントン、子育て</p>

						<h4 class="staff-subtitle">メッセージ</h4>
						<p>患者様が楽になった、痛みが取れたと笑顔になる様な治療を目指していきます。辛い痛み、悩みなど些細なことでも良いので相談してください。一緒に解決していきましょう。</p>

					</div>
				</div>
				<div class="page-kotei-fristbox">
					<div class="page-kotei-fristbox__pic">
						<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-tomomi.jpg" alt="佐藤智美">
					</div>
					<div class="page-kotei-fristbox__textbox">
						<h3 class="staff-title">佐藤 智美</h3>

						<h4 class="staff-subtitle">得意な治療分野</h4>
						<p class="staff-text">スポーツ外傷、トレーニング指導、テ－ピング、トリガーポイント療法</p>

						<h4 class="staff-subtitle">趣味・特技</h4>
						<p class="staff-text">野球、バトミントン、子育て</p>

						<h4 class="staff-subtitle">メッセージ</h4>
						<p>患者様が楽になった、痛みが取れたと笑顔になる様な治療を目指していきます。辛い痛み、悩みなど些細なことでも良いので相談してください。一緒に解決していきましょう。</p>

					</div>
				</div>

			<!-- </div> -->
		</section>
		
	</div>




<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>