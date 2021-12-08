
<?php
/*
Template Name: FAQ template
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
					<h1 class="c-header__pic__title">よくある質問<br><span>F A Q</span></h1>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pic/donguri-faq.jpg" alt="サイトヘッダー">
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


		<!-- 施術について -->
		<section id="faq02" class="page-faq">
			<h2 class="page-kotei__title ">施術について</h2>
			<ul class="page-faq__wrap ">
			<!-- 一つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">整骨院とはどういうところなのですか？整体とは違うのですか？</h3>
				<div class="page-faq-block__text">
					<p>「整骨院」は国で定められた柔道整復師という国家資格を持つもののみ掲げられる名称です。そのため、各種健康保険が適応でき、また、交通事故や労災の治療もできるのが整骨院です。<br>
					＊ちなみに「整骨院」と「接骨院」は同じものです。<br>
					「整体院」は、いわゆる「民間資格」と呼ばれるものであり、これは要するに無資格のことです。したがって健康保険が使えません。誰でもすぐに「整体院」で開業できますので通院する場合、慎重に選ぶ必要があります。</p>

				</div>
				</section>
			</li>
			<!-- 二つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">どんな治療をするのですか？</h3>
				<div class="page-faq-block__text">
					<p>どんぐり整骨院は手技に自信のある院です。骨盤矯正、鍼灸、指圧、マッサージはもちろん、ストレッチ、特殊電気療法など、患者さま一人ひとりのからだや症状に合わせた治療を行っています。 詳しくは当院施術をご確認ください。</p>
				</div>
				</section>
			</li>
			<!-- 三つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">施術時間はどのくらいかかりますか？</h3>
				<div class="page-faq-block__text">
					<p>症状や混雑状況やメニューによりますが、おおよそ30〜40分くらい、長いものでは90〜100分のものもあります。初回の場合はメニューの時間よりも余裕を持ってご予約ください。</p>
				</div>
				</section>
			</li>
			<!-- 四つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">食後、すぐに施術を受けても大丈夫ですか？</h3>
				<div class="page-faq-block__text">
					<p>施術内容により異なりますが、食後30分以上経ってからご来院されることをお勧めしております。</p>
				</div>
				</section>
			</li>
			<!-- 五つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">1回の施術で症状はよくなりますか？</h3>
				<div class="page-faq-block__text">
					<p>患者様の症状により改善される速度は異なります。まずはしっかりとカウンセリングを行いお体の状態を把握させて頂きます。その後、施術後に今後の施術に関してご説明していきます。</p>
				</div>
				</section>
			</li>
			<!-- 六つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">保険は使えますか？</h3>
				<div class="page-faq-block__text">
					<p>各種健康保険、自賠責保険（交通事故の場合）、労災などが適用されます。
						保険適用できる症状や範囲を教えてください。<br>
						保険が適用される範囲は私たち柔道整復師が「骨折」「脱臼」「捻挫」「挫傷」「打撲」と判断したものに限られます。ただ、患者様が単なる疲れや筋肉のハリ・コリ・腰痛だと思っている場合でも、これらの症状に当てはまるケースがあります。まずは一度ご相談ください。</p>
				</div>
				</section>
			</li>
			<!-- 七つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">どんな服装で行けばいいのですか？</h3>
				<div class="page-faq-block__text">
					<p>普段の服装でご来院いただいて大丈夫です。お仕事帰りの方やスカートでご来院された患者様などで施術に際し必要な場合は、お着替えをご用意していますので、お気軽にご来院ください。</p>
				</div>
				</section>
			</li>
			<!-- 八つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">予約をしないとダメですか？</h3>
				<div class="page-faq-block__text">
					<p>施術時間内であれば、ご自由にお越しいただいて構いません。ただし、混みあうことがありますのでご予約が確実です。整骨院にお越しになる時間が分かるのであれば、一度ご連絡いただければ幸いです。</p>
				</div>
				</section>
			</li>
			<!-- 九つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">他の整骨院に行っているのですが、併用はできますか？</h3>
				<div class="page-faq-block__text">
					<p>原則的に、重複施術（同じケガを別の接骨、整骨院、整形外科で同時に診てもらう）になってしまうため併用はできません。ただし、DONGURIコースなど自費診療での施術は可能ですので一度ご相談ください。</p>
				</div>
				</section>
			</li>
			<!-- 十つ目 -->
			<li class="page-faq-block">
				<section>
				<h3 class="page-faq-block__title">妊娠中ですが、施術を受けることはできますか？</h3>
				<div class="page-faq-block__text">
					<p>基本的に安定期に入った方がメインになりますが、安定期前でも患者さん一人ひとりに合わせた施術を行っています。施術者は一児の親です。マタニティポーズでの施術など、お子さんとお母さんお二人のことを考えた施術を致しますのでご安心ください。</p>
				</div>
				</section>
			</li>
			</ul>
		</section>


	</div>




<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>