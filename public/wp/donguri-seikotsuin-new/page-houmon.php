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


		<section class="kodawari pd-top">
			<!-- まず初めに -->
			<h2 class="page-kotei__title">まずはじめに</h2>
			<p class="page-kotei__text pd-btm">
				通院が難しい方の為に健康保険適用で<span class="red-text">国家資格を取得した</span><br class="PC-br">
				鍼灸・あん摩マッサージ師が<span class="red-text">お身体の辛さを改善する</span>ためご自宅に伺います！<br class="PC-br">
				高齢・障害・病気などで<span class="red-text">一人での通院が難しく</span>お困りの方へ、<br class="PC-br">
				痛みの緩和・身体機能改善を目的としたマッサージで<br class="PC-br">
				様々な悩みを解決していくお手伝いをいたします！
			</p>
			<!-- 訪問マッサージとは -->
			<h2 class="page-kotei__title">訪問マッサージとは</h2>
			<p class="page-kotei__text pd-btm">
				訪問マッサージは『歩行困難』『寝たきり』などの<span class="red-text">ご自身での通院困難</span>で<br class="PC-br">
				マッサージや鍼灸治療が受けられない患者様が、ご自宅や入居されている介護施設等で<br class="PC-br">
				医師の同意のもと<span class="red-text">健康保険</span>を使ってマッサージ・鍼灸治療を受けられるものです。<br>
				<br>
				目的としては、痛み・しびれ・むくみ等の改善、<br class="PC-br">関節の動きの回復や維持などを目的としています。<br>
				<br>
				お伺いする施術者は<span class="red-text">“国家資格者”</span>であり<br class="PC-br">
				多くの施術経験と実績があり、患者様の状態にあった施術を提供します。
			</p>
		</section>

		<div class="topbox page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>//images/pic/sample-pic.png" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>様々なお悩みを解決します！</h3>
				<p>・歩行困難でお悩みの方<br>
					・身体が辛く慢性的な痛みや痺れがある方<br>
					・介護施設や在宅でのリハビリが必要な方<br>
					・パーキンソン病や難病でお困りの方<br>
					といったお悩み方！どんぐり訪問マッサージにご連絡ください！<br>
					TEL：<a class="red-text" href="tel:04-2936-7744">04-2936-7744</a>				</p>
			</div>
		</div>

		<div class="page-kotei__bottombox">
			<div class="page-kotei__bottombox__pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pic/sample-pic.png" alt="">
			</div>
			<div class="page-kotei__bottombox__text">
				<h3>国家資格取得者がご自宅にお伺いします！</h3>
				<p>
				・関節可動域の維持や改善<br>
				・血液循環促進により痛みや痺れの緩和<br>
				・適度な筋肉への刺激で筋力の維持向上<br>
				・日常生活動作(ADL)の維持や向上<br>
				などの効果と身体の変化が期待できます！

				</p>
			</div>
		</div>

		<section class="kodawari pd-top pd-btm">

			<!-- 施術無料体験 -->
			<h2 class="page-index__title red-text"><span style="background: linear-gradient(transparent 45%, #E5D02F 0%);">無料体験募集中</span><br><span style="background: linear-gradient(transparent 45%, #E5D02F 0%);">（はり・きゅう・マッサージ）</span></h2>
		
			
		</section>

		<div class="page-box pd-btm">
			<div class="c-flow">
				<h2 class="c-flow__title pd-top">無料施術体験までの流れ</h2>
				<div class="c-flow-box">

					<h3 class="SP c-flow-box-title">1.お気軽にお電話ください！</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-line.jpg" alt="ご予約方法">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">1.まずはお気軽にお電話ください！</h3>
							<p>
								お忙しい日々の中でお体でお悩みなどありましたら、<span class="red-text">随時受付中</span>ですので、是非ご連絡下さい。ご希望の方は<a class="red-text" href="tel:04-2936-7744">04-2936-7744</a>までご連絡下さい。
							</p>
						</div>
					</div>


					<h3 class="SP c-flow-box-title">2.訪問日程を相談</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-8.jpg" alt="訪問日程調整">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">2.訪問日程を相談</h3>
							<p>
								お電話の中でお客さまのご都合の良い日程を提示させていただきます。キャンセルの場合は、<span class="red-text">前日まで</span>にご連絡いただきますようお願いします。
							</p>
						</div>
					</div>


					<h3 class="SP c-flow-box-title">3.ご自宅に訪問</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-9.jpg" alt="ご自宅に訪問">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">3.ご自宅に訪問</h3>
							<p>
								お客さまとの簡単な会話で、お体でお悩みの箇所をお聞きかせいただき、
								マッサージの準備をさせていただきます。
							</p>
						</div>
					</div>



					<h3 class="SP c-flow-box-title">4.無料施術開始</h3>
					<div class="display-f c-flow-box__inner">
						<div class="c-flow-box-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/flow/donguri-flow-3.jpg" alt="無料施術開始">
						</div>
						<div class="c-flow-box-textbox">
							<h3 class="PC c-flow-box-title">4.無料施術開始</h3>
							<p>
								30分程度の医療マッサージを受けていただいた後に、
								サービス内容のご説明をさせていただきます。（全所要時間60分）
							</p>
						</div>
					</div>


				</div>
			</div>
			<!-- 訪問マッサージについて -->
			<section id="faq03" class="page-faq">
				<h2 class="page-kotei__title pd-top">よくある質問</h2>
				<ul class="page-faq__wrap">
					<!-- 一つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">一度試してみたいのですが…</h3>
						<div class="page-faq-block__text">
							<p>無料施術体験を行っていますので、マッサージの施術内容を実際に身をもって体験していただき、またお身体の状態を見させていただければと思います。</p>

						</div>
						</section>
					</li>
					<!-- 二つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">介護保険と併用はできますか？</h3>
						<div class="page-faq-block__text">
							<p>はい、併用可能です。訪問マッサージは健康保険を使いますので介護保険の上限を気にすることなくご利用いただけます。</p>

						</div>
						</section>
					</li>
					<!-- 三つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">1回にかかる料金を知りたいです。</h3>
						<div class="page-faq-block__text">
							<p>医師の同意をいただけた場合は、健康保険適用となります。<br>
							１部例外はございますが、自己負担割が１割負担の場合は400円～600円程度になります。その他、自己負担割合により異なります。</p>

						</div>
						</section>
					</li>
					<!-- 四つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">交通費はかかりますか？</h3>
						<div class="page-faq-block__text">
							<p>いいえ、交通費込み金額となっていますので、別途で請求されることはございません。</p>

						</div>
						</section>
					</li>
					<!-- 五つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">訪問時間はどのくらいですか？</h3>
						<div class="page-faq-block__text">
							<p>１回の訪問時間は30分程度のとなっております。</p>

						</div>
						</section>
					</li>
					<!-- 六つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">生活保護の場合は訪問マッサージを受けられますか？</h3>
						<div class="page-faq-block__text">
							<p>はい、もちろん訪問マッサージを受けることができます。受ける際には、市町村の生活保護（福祉）課の承諾が必要になります。</p>

						</div>
						</section>
					</li>
					<!-- 七つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">医師の同意は整形外科以外の診療科の医師でも大丈夫ですか？</h3>
						<div class="page-faq-block__text">
							<p>はい、大丈夫です。同意書は毎月医師に書いていただく必要がありますので、定期的に診ていただいている医師であれば、問題ないです。</p>

						</div>
						</section>
					</li>
					<!-- 八つ目 -->
					<li class="page-faq-block">
						<section>
						<h3 class="page-faq-block__title">介護施設に入居していますが施設に来ていただけますか？</h3>
						<div class="page-faq-block__text">
							<p>はい、お伺い可能です！入浴やお食事のお時間など、施設での生活に差し支えない時間帯での訪問をさせていただきます。</p>

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