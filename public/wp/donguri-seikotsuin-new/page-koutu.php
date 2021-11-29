<?php
/*
Template Name: KOUTU template
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
					<h1 class="c-header__pic__title">交通事故施術<br><span>KOUTUJIKO SEJUTU</span></h1>
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

	<!-- タイトルタイトル -->
	<!-- <section class="page-kodawari"> -->
		<!-- <h2 class="page-kodawari__title arch">交通事故治療について</h2> -->


		<div class="topbox page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>//images/pic/donguri-kou-1.jpg" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>悪化する前にしっかり完治！！</h3>
				<p>交通事故直後は症状が少なくても、後になって痛みが増してくる場合もあります。当院では、交通事故にあわれた方のお体のケアに最善を尽くしております。症状が改善し納得いただけるまで、しっかりと治療させていただきます。</p>
			</div>
		</div>

		<div class="page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-kou-2.jpg" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>自賠責保険・慰謝料について</h3>
				<p>当院では自賠責保険にて交通事故による症状を治療いたします。患者様の治療負担金は０円です。自賠責保険には、休業損害などの保障もありますので、保険会社への対応など分からないこともお気軽にご相談ください。</p>
			</div>
		</div>

	<!-- </section> -->

		<div class="page-box">
			<div class="page-kotei-fristbox ">
				<h2 class="page-kotei__title arch pd-top">ご利用までの流れ</h2>
				<div class="page-kotei-fristbox__textbox">
					<h4>1.LINE公式アカウントからご予約</h4>
					<p>どんぐり整骨院では予約のお客様を優先しておりますので、<a href="" class="red-text">『LINE公式アカウント』</a>からQRコードお持ちのスマートフォンまたは携帯から読み込んでいただき、お友達ご登録した後、ご予約をお願いします。ご予約方法につきましては公式LINEアカウントの方からお知らせいたします。</p>

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
			<!-- 交通事故施術について -->
			<section id="faq02" class="page-faq">
				<h2 class="page-faq__title arch">よくある質問</h2>
					<ul class="page-faq__wrap ">
					<!-- 一つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">交通事故で病院に通院中ですが、それと並行しての治療は可能ですか？</h3>
						<div class="page-faq-block__text">
							<p>自賠責保険では、病院に通院しながら他の医療機関（整骨院など）でも治療を受ける事が可能です。当院で治療を受けながら、病院で月1回程度回復具合を検査してもらっている患者さんは大勢いらっしゃいます。同じ日の掛け持ち治療でなければ全く問題ありません。</p>

						</div>
						</section>
					</li>
					<!-- 二つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">施術期間はどのくらいになりますか？</h3>
						<div class="page-faq-block__text">
							<p>症状や事故の状況によって一概にはお伝えできませんが目安としまして一般的なむち打ちなどに関しては３～５ヶ月ほどになります。</p>

						</div>
						</section>
					</li>
					<!-- 三つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">慰謝料はどのくらいですか？</h3>
						<div class="page-faq-block__text">
							<p>通院期間と実際に施術を受けた日数で変わってきますが自賠責基準ですと１日4,300円～8,400円になります。通院期間×4,300円 実日数×4,300円×2</p>
							<p>どちらか少ない方で算出されますので30日間毎日通ったら252,000円にはなりませんのでご注意を。ただ保険会社様が整骨院に通うと慰謝料が下がりますと仰る事がございますが、整骨院でも病院でも慰謝料の計算式は変わりませんのでご安心ください。</p>
						</div>
						</section>
					</li>
					<!-- 四つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">まだ保険会社から連絡がこないのですが</h3>
						<div class="page-faq-block__text">
							<p>病院の診断書がない場合も当整骨院では交通事故無料施術体験を行っておりますので一度ご相談ください。治療開始後も施術の自己負担はかかりませんのでご安心ください。</p>
						</div>
						</section>
					</li>
					<!-- 五つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">症状が軽くても受診は可能ですか？</h3>
						<div class="page-faq-block__text">
							<p>症状の軽い、重いは関係なく治療を受けることができます。初めのうちは症状が軽いからといってほっておいて 後から辛くなってくることも多くあります。</p>
						</div>
						</section>
					</li>
					<!-- 六つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">治療時間はどのくらいかかりますか？</h3>
						<div class="page-faq-block__text">
							<p>手技治療、物理療法の併用で30分～40分程度になります。</p>
						</div>
						</section>
					</li>
				</ul>
			</section>
		</div>




	<!-- </section> -->
	</div>




<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>