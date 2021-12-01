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


		<!-- 交通事故に遭ってしまったら -->
		<section class="kodawari pd-top">
			<h2 class="page-kotei__title">交通事故に遭ってしまったら</h2>
			<p class="page-kotei__text">
			どんぐり整骨院では<br class="PC-br">ただ電気を当てたりするだけでなくマッサージで筋肉を緩めたり、<br class="PC-br">鍼灸、ソフトな関節整体で不調を解消いたします。<br class="PC-br">
			当整骨院は<span class="red-text">手技の施術</span>がメインの整骨院です！
			</p>
		</section>

		<!-- 交通事故に遭ったら不調がでやすい症状 -->
		<div class="page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>//images/pic/donguri-kou-1.jpg" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>交通事故に遭ったら不調がでやすい症状</h3>
				<p><strong>お身体の痛み</strong><br>
				　・首の痛み、むち打ち、頭痛<br>
				　・腰の痛み、腰痛<br>
				　・肩や背中の痛み<br>
				　・膝や肘などの打撲<br>
				<strong>自律神経系のお悩み</strong><br>
				　・めまい、吐き気、気分がすぐれない<br>
				　・不眠、血圧の上昇、寒気...etc</p>
			</div>
		</div>
		<!-- 交通事故の施術内容 -->
		<div class="page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-kou-2.jpg" alt=""> -->
				<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-1.jpg" class="o-img-size" alt="交通事故の施術内容">

			</div>
			<div class="page-kotei__bottombox__text">
				<h3>交通事故の施術内容</h3>
				<p>・ハンドメイド手技による施術<br>
				・痛めた個所の回復をはかる電気機器<br>
				・鍼灸による施術<br>
				・痛みの回復後の運動療法<br class="SP-br">・ストレッチ<br>
				・骨格の矯正</p>
			</div>
		</div>

		<!-- 交交通事故にお悩みの方へ -->
		<section class="kodawari pd-top">
			<h2 class="page-kotei__title">交通事故にお悩みの方へ</h2>
			<p class="page-kotei__text">
			交通事故によるお身体のお痛みは長期になることがあります。<br class="PC-br">ですので<span class="red-text">早期の施術開始</span>と<span class="red-text">早期の復帰</span>が重要です。<br class="PC-br">事故直後は不安もたくさんあります。<br>
			<br>

			「はじめて事故に遭ってしまった。」<br>
			「身体の痛みが不安・・」<br>
			「車はどうしたらいいのだろうか・・」<br>
			「だれに相談したらいいの？」<br>
			「仕事や損害賠償のことで頭がいっぱい・・」<br>
			<br>
			お悩みを解消する為、<br class="PC-br">
			当整骨院では<span class="red-text">交通事故無料相談</span>も承っております。<br class="PC-br">
			お怪我や痛みから一刻も早く回復する為、<br class="PC-br">
			難しいことやお悩みはご相談いただき<br class="PC-br">
			不調の回復に集中できる環境をご提供いたします。<br class="PC-br">
			<span class="red-text">下山口駅から徒歩1分</span>にあり、<br class="PC-br">
			時間外も相談いただければ対応しております。

			</p>
		</section>




		<!-- 事故発生から通院までの流れ -->
		<div class="page-box pd-btm">
			<div class="c-flow">
				<h2 class="c-flow__title pd-top">事故発生から通院までの流れ</h2>
				<div class="c-flow-box">

					<h3 class="SP c-flow-box-title">1.交通事故証明書を発行</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-5.jpg" alt="交通事故証明書を発行する">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">1.交通事故証明書を発行する</h3>
							<p>交通事故の届出をして<span class="red-text">「交通事故証明書」</span>を発行してもらってください。この証明書は自賠責保険を適用する場合に必要となります。</p>
						</div>
					</div>

					<h3 class="SP c-flow-box-title">2.病院で診察を受ける</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-1.jpg" class="o-img-size" alt="病院にて診察を受ける">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">2.病院で診察を受ける</h3>
							<p>近くの病院で医師による診察を受けてください。重症の場合は、病院での通院・治療が有効です。整骨院に来る前に必ず病院で診てもらうようにしましょう。</p>
						</div>
					</div>


					<h3 class="SP c-flow-box-title">3.保険会社に報告</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">

							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-7.jpg" alt="保険会社に報告">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">3.保険会社に報告をしましょう</h3>
							<p>保険会社の方に、<span class="red-text">「どんぐり整骨院鍼灸マッサージ院で交通事故の治療を受ける」</span>と伝えてください。その後、保険会社から当院に連絡が入り、自賠責保険での治療が可能となります。</p>
						</div>
					</div>


					<h3 class="SP c-flow-box-title">4.当院にご連絡ください</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-3.jpg" alt="当院にご連絡">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">4.当院にご連絡ください</h3>
							<p>当院に<span class="red-text">受診予約</span>のご連絡をください。診察日時を調整させていただきます。予約方法につきましては、電話予約もしくはLINE予約があります。<br>
							<span class="">電話予約</span>はこちら：
							<a class="c-flow-box-textbox__link red-text" href="tel:04-2936-7744">04-2936-7744</a><br class="PC-br">
							<span class="">LINE予約</span>はこちら：
							<a class="c-flow-box-textbox__link red-text" href="https://line.me/R/ti/p/%40962vsbox">公式アカウント</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- 交通事故施術について -->
			<section id="faq02" class="page-faq">
				<h2 class="page-kotei__title">よくある質問</h2>
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
							<p>通院期間と実際に施術を受けた日数で変わってきます。</p>
							<p class="red-text">【自賠責基準の場合】<br>
								１日4,300円～8,400円<br>
								通院期間×4,300円 <br class="SP-br">実日数×4,300円×2<br>
								※どちらか少ない方が算出されます。
							</p>
							<p>30日間毎日通ったら252,000円にはなりません。<br class="PC-br">
								ただし保険会社様が整骨院に通うと慰謝料が下がりますと仰る事がございますが、整骨院でも病院でも慰謝料の計算式は変わりませんのでご安心ください。
							</p>
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