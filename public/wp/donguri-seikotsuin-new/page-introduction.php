<?php
/*
Template Name: INTRODUCTION template
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
					<h1 class="c-header__pic__title">院内紹介<br><span>INTRODUCTION</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-page.jpg" alt="サイトヘッダー">
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

		<!-- 院内紹介文 -->
		<div class="page-introduction">
			<div class="page-introduction-fristbox">
			<p>当院では、お客様にリラックスして<br class="SP-br">施術を受けていただけるよう、<br>
				清潔で安らげる空間づくりを<br class="SP-br">徹底しています。<br>
				<br>
				また最新治療器も導入しており、<br>
				極力お客様のお体にストレスのないよう、<br>
				効果的な施術が行えるように<br class="SP-br">工夫しています。<br>
			</p>
			</div>
		</div>


		<!-- 写真 -->
		<section id="introduction" class="pd-btm">
			<!-- <h2 class="page-introduction__title pd-btm">写真</h2> -->
			<div class="page-introduction-picbox pd-btm">
				<!-- 左側 -->
				<div class="left-box">
					<!-- 左/上 -->
					<div class="left-box_top">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-huuhu.jpg" alt="どんぐり整骨院 笑顔">
						</div>
						<div class="txt-box">
						<div class="txt">
							<div class="txt-ttl">どんぐり整骨院は夫婦で営業しております。皆様の声を真摯に受け止め、お体のお悩みを解決します。</div>
						</div>
						</div>
					</div>
					<!-- 左/下 -->
					<div class="left-box_bottom">
						<div class="left-box_flex">
							<div class="img-box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
							</div>
							<div class="txt-box">
								<div class="txt">
								<div class="txt-ttl">ベンチについて書く。</div>
								</div>
							</div>
						</div>
						<div class="left-box_flex">
							<div class="img-box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/innaisyoukai/sample-1.jpg" alt="院内紹介その１">
							</div>
							<div class="txt-box">
								<div class="txt">
								<div class="txt-ttl">ウォーターサーバーについて書く。</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 右側 -->
				<div class="right-box">
					<!-- 右・上 -->
					<div class="right-box_top">
						<div class="right-box_flex">
							<div class="img-box">
								<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-kigu-4-scaled-e1637661914595.jpg" alt="院内紹介 器具">
							</div>
							<div class="txt-box">
								<div class="txt">
								<div class="txt-ttl">テキストテキストテキストテキストテキストテキスト</div>
								</div>
							</div>
						</div>
						<div class="right-box_flex">
							<div class="img-box">
								<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/12/donguri-syogo-5-1-scaled-e1638813010757.jpg" alt="カバン置き">
							</div>
							<div class="txt-box">
								<div class="txt">
								<div class="txt-ttl">テキストテキストテキストテキスト</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 右・下 -->
					<div class="right-box_bottom">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-kigu-3.jpg" alt="どんぐり整骨院 ベット">
						</div>
						<div class="txt-box">
							<div class="txt">
								<div class="txt-ttl">お客様に使用していただくベット。こんなご時世だからこそ、皆様にご安心いただけるよう、使用前・使用後のアルコール除菌を徹底しております。</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- 院長紹介 -->
		<section class="page-kotei pd-btm">
			<h2 class="page-kotei__title">院長紹介</h2>
			
			<?php get_template_part('module/staff'); ?>

		</section>
	</div>










<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>