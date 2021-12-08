
<?php
/*
Template Name: MENU template
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
					<h1 class="c-header__pic__title">メニュー<br><span>MENU</span></h1>
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-huuhu-1-scaled.jpg" alt="メニューページ">
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

		<ul class="menu-lists">
			<!-- 投稿されているWORKSの全てを表示 -->
			<li class="menu-list">
				<a href="#menu1">DONGURI<br class="SP-br">整体コース</a>
			</li>
			<li class="menu-list">
				<a href="#menu2">DONGURI<br class="SP-br">マッサージ</a>
			</li>
			<li class="menu-list menu-list-1">
				<a href="#menu3">保険診療</a>
			</li>

			<!-- <li class="menu-list">
				<a href="#menu3">鍼治療</a>
			</li>
			<li class="menu-list">
				<a href="#menu4">電気治療</a>
			</li> -->
		</ul>

		<div class="page-menu pd-btm">
		<!-- DONGURI整体コース -->
			<div id="menu1" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-sinsou-scaled-e1637744017827.jpg" alt="DONGURIコース">
					<h3 class="page-menu-fristbox__pic__title">DONGURI整体コース<br><span class="SP-text-space">オーダーメイド式マッサージ</span></h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p><strong>身体の痛み歪み<br>そのままにしていませんか？</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						<br>
						・頭痛がひどく肩こりや<br class="SP-br">手の痺れがある<br><br class="SP-br">
						・腰の痛みで仕事や<br class="SP-br">家事に集中できない<br><br class="SP-br">
						・日々の疲れで身体が<br class="SP-br">ずっしり重く眠れない<br> <br class="SP-br">
						・子どもの猫背やスマホ首など<br class="SP-br">姿勢が気になる…などなど<br>
						<br>
						"人"はそれぞれ<span class="red-text">自分に合った</span>施術法があります。<br class="PC-br">
						どんぐり整骨院ではあなたに合った施術を提案して施術をおこないます。<br class="PC-br">
						筋肉、神経、ツボにアプローチをして痛みを改善し、根本の歪みを正し、<br class="PC-br">
						<span class="red-text">痛みの出ない身体づくり</span>を目指します。 


					
					</p>
					<!-- オススメ -->
					<p><strong>施術内容</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						<span class="black-text">1.鍼灸治療</span><br>
						東洋・西洋を用いて様々な症状を改善<br>
						<br>
						<span class="black-text">2.骨格・骨盤矯正</span><br>
						背骨や骨盤を中心に各関節の歪みを<br class="SP-br">整えます<br>
						<br>
						<span class="black-text">3.マッサージ</span><br>
						<span class="red-text">どんぐり整骨院独自の深い圧</span>で深層筋にアプローチしていきます<br>
						<br>
						<span class="black-text">4.ストレッチ</span><br>
						独自の方法で関節の機能を<br class="SP-br">改善させます<br>
						<br>
						<span class="black-text">5.特殊電気療法</span><br>
						手技ではとれない痛みや自律神経に作用させ全体の機能改善に<br>
					</p>
					<!-- 料金・テーブル -->
					<p><strong>料金プラン</strong></p>
					<p class="black-text">
						30分 4,000円<br>
						<span class="osusume">60分 7,600円</span>
					</p>
					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>
			</div>
		<!-- DONGURIマッサージ  -->
			<div id="menu2" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/12/donguri-syogo-5-scaled-e1638812702723.jpg" alt="DONGURIマッサージ ">
					<h3 class="page-menu-fristbox__pic__title">DONGURIマッサージ<br><span class="SP-text-space">もみほぐしのみコース</span></h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p><strong>日頃の疲れを<br>ゆったりほぐしたい方に<br class="SP-br">おすすめ！</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						
						肩、腰、腕、足、身体中を<span class="red-text">独自の深い指圧</span>で通常のもみほぐしでは<br class="PC-br">
						届かない深いところまでほぐします。
						<br>
						ゆっくり圧が入るので<span class="red-text">もみ返しが起こりにくい</span>のが特徴です。<br class="PC-br">
						一度やってみると違いがわかりますので、ぜひご実感ください。
					
					</p>
					<!-- 料金・テーブル -->
					<p><strong>料金プラン</strong></p>
					<p class="black-text">
						30分 4,000円<br>
						<span class="osusume">60分 7,600円</span>
					</p>
					<p>
						※表示金額は、<br class="SP-br">全て税込価格となります。<br>
						※その他オプションメニューあります。 <br class="SP-br">ご不明な点ご相談ください。
					</p>
				</div>
			</div>
		<!-- 保険診療  -->
			<div id="menu3" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<!-- <img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-seitai-scaled-e1637743834598.jpg" alt="保険診療"> -->
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/12/donguri-menu-hoken-1.jpg" alt="保険診療">
					<h3 class="page-menu-fristbox__pic__title">保険診療</h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p><strong>健康保険で一部負担可能です！</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						
						原因と発症日がはっきりと分かる腰痛や肩痛、<br class="PC-br">
						その他の痛みなどの場合、健康保険を一部使用しての治療が可能です。<br class="PC-br">
						初診の際は必ず健康保険証をご提示ください。<br class="PC-br">
						料金は負担割合によって変更します。<br class="PC-br">
						その他ご不明な点はお気軽にお問い合せください。
					
					</p>
				</div>
			</div>



		<!-- 鍼治療 -->
			<!-- <div id="menu3" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-hari-scaled-e1637743383731.jpg" alt="鍼治療">
					<h3 class="page-menu-fristbox__pic__title">鍼治療</h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p class="page-menu-fristbox__menubox__text">
						日本製の細い鍼を使用しピンポイントの痛みや頑固なコリ、ハリにお勧めです。<br>
						また痛みの改善だけではなく体質改善（ストレス、生理不順自律神経の乱れなど）を促し、<br>
						体調を整えていくことも目的の一つにあります。<br>
						初めて鍼を受けられる方はまず最も細い鍼から施術を行います。<br>
						こちらもまた、深層指圧と併用することでより効果が得られますので<br>
						組み合わせていただくことをお勧めいたします。
					</p>
					
					<p><strong>こんな方にお勧め</strong></p>
					<p class="page-menu-fristbox__menubox__text">
						頑固な肩こり、腰痛、頭痛、ぎっくり腰、寝違え、神経痛が気になる方<br>
						ストレスを日頃感じている方<br>
						長時間のデスクワークで眼精疲労が溜まった方<br>
						鍼に興味がある方
					</p>
					
					<p><strong>料金プラン</strong></p>
					<table>
						<tbody>
							<tr>
							<td>30分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>60分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>90分</td>
							<td>000円～0,000円</td>
							</tr>
						</tbody>
					</table>
					
					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>
			</div> -->
		<!-- 電気治療 -->
			<!-- <div id="menu4" class="page-menu-fristbox">
				<div class="page-menu-fristbox__pic">
					<img src="http://donguri.dev-webitch.xyz/wp-content/uploads/2021/11/donguri-menu-denki-scaled-e1637743587429.jpg" alt="電気治療">
					<h3 class="page-menu-fristbox__pic__title">電気治療</h3>
				</div>
				<div class="page-menu-fristbox__menubox">
					<p class="page-menu-fristbox__menubox__text">
						イトーES5000という最新の立体動態波・ハイボルテージ・微弱電流機器を設置しています。<br>
						立体的な電流のうねりが生体深部を広範囲に刺激する<br>
						立体動態波モード、マイクロカレントが立体的に行える3D MENSモード、<br>
						筋肉に立体的な刺激を与える3D EMSモードを搭載。<br>
						その他にも、ハイボルテージモード、EMSモード、MCRモードを加え<br>
						神経性の痛みから、シビレ、筋疲労、炎症、外傷症状にも非常に効果が高いです。<br>
						大リーガーの投手でも使用している選手が多く評価もとても高い治療機械です。
					</p>

					<p><strong>料金プラン</strong></p>
					<table>
						<tbody>
							<tr>
							<td>30分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>60分</td>
							<td>000円～0,000円</td>
							</tr>
							<tr>
							<td>90分</td>
							<td>000円～0,000円</td>
							</tr>
						</tbody>
					</table>

					<p>※表示金額は、<br class="SP-br">全て税込価格となります。</p>
				</div>

				<p class="page-menu-secbox--strong"><strong>代表的な治療をご紹介！</strong></p>
				<div class="display-f">
					<div id="menu5" class="page-menu-secbox">

						<h3 class="page-menu-secbox__title">3D干渉電流刺激療法</h3>
						<div class="page-menu-secbox__menubox">
							<p class="page-menu-secbox__menubox__text">
								3対の異なる高い周波数の電流が生体内部で干渉し、立体的で複雑な電流のうねりを発生させます。6点の電極から流れる電流が3次元的に干渉することで、生体深部の筋や神経にも刺激を与えることができます。
							</p>
	
							<p><strong>こんな方にお勧め</strong></p>
							<p class="page-menu-fristbox__menubox__text">
								頸椎椎間板ヘルニアで手に痺しびれがある方<br>
								坐骨神経痛で足にしびれがある方<br>
								骨折や捻挫のリハビリをしたい方<br>
								ぎっくり腰を早く治したい<br>
								...etc
							</p>
						</div>
					</div>
					<div id="menu6" class="page-menu-secbox">

					<h3 class="page-menu-secbox__title">ハイボルテージ治療</h3>
					<div class="page-menu-secbox__menubox">
						<p class="page-menu-secbox__menubox__text">
							他の電気治療に比べ、身体の奥深い患部へのアプローチが出来るため、とても即効性が高く、変化をその場で体感しやすいのが特徴です。強い痛みを早くとりたい、症状の変化がみられない…とうでお悩みの方にお勧めです。
						</p>
		
						<p><strong>こんな方にお勧め</strong></p>
						<p class="page-menu-fristbox__menubox__text">
							ぎっくり腰、寝違え、捻挫、四十肩･五十肩、ひざの痛み、<br>
							足底筋膜炎、シンスプリントなどに効果的です。<br>
						</p>
					</div>
				</div>
			</div> -->



		</div>
	</div>







<!-- ここまでコンテンツ -->
<?php 
	get_footer('page');
?>