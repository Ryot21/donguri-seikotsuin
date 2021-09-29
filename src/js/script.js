
$(function () {

  var $body = $('body');
  var $menu = $('#js-menu');

  AOS.init()//Animation On Scroll libraryを使用する宣言

  $(function() {// 宣言

    anchorLink();
    // mvtop()//メイン画像について
    //           setTimeoutAsync(2000).then(topFirst)//2秒後に表示
    //           setTimeoutAsync(4000).then(topSecond)
    //           setTimeoutAsync(6000).then(topThird)
    //           setTimeoutAsync(8000).then(topFourth)
    //           setTimeoutAsync(10000).then(topFifth);

    // slideAnime();
    // onScroll();
    navControl();
    mouseOver();
});


function openSubMenu() {
      if ( $(window).width() < 980 ) {
        $('#js-menu').css('display','none');
        if($('#js-menuToggle').hasClass('close')) {
          $('#js-menuToggle').removeClass('close');
          $body.removeClass('menu-open');
        }
      } else {
        $('#js-menu').css('display','block');
      }
}
$(window).on('resize', function() {openSubMenu();}).trigger('resize');

//global navigation
function navControl() {
      var $menuToggle = $('#js-menuToggle');
      var $bottomMenuToggle = $('#js-menuToggleClose');

      $('#js-menuToggle').on('click', function(e) {
        e.preventDefault();
        if ( $menuToggle.hasClass('close') ) {
          $menu.fadeOut(300);
        } else {
          $menu.fadeIn(300);
        }
        $menuToggle.toggleClass('close');
        $body.toggleClass('menu-open');
      });

      $('#js-menu, #js-menuToggle, #js-menuToggleClose').on( 'click', function(e) {
        e.stopPropagation();
      });
}

  // anchor link
  function anchorLink() {
    $(document).on('click', 'a[href^="#"]', function(e) {
      e.preventDefault();

      var $el     = $(this);
      var $target = $($el.attr('href'));
      paddingTop = $('#header').outerHeight();

      if (!$target[0]) {
        return;
      }

      var offset = $target.offset().top;
      $('html, body').animate({scrollTop: offset - paddingTop});
    });
  }


  //トップ画像
  // mainvisual animation first
  // promise用のsetTimeout関数
  function setTimeoutAsync(delay) {
    return new Promise(function(resolve, reject) {
        setTimeout(resolve, delay);
    });
  }


  //ニュースティッカー
  $('.c-newsticker_slider').bxSlider({
      touchEnabled:false,//リンクを有効にするためスライドをマウスでドラッグした際にスライドの切り替えを可能にする機能を無効化
      mode: 'vertical',
      controls: false,
      auto: 'true',
      pager: false
  });
  //モバイルメニュー
  function mouseOver() {
    $('.js-hover').hover(function () {
      $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
    }, function () {
      $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
    });
  }
});

// ページTOPボタン
// jQuery(function() {
//   var pagetop = $('#page_top');   
//   pagetop.hide();
//   $(window).scroll(function () {
//       if ($(this).scrollTop() > 500) {  //100pxスクロールしたら表示
//           pagetop.fadeIn();
//       } else {
//           pagetop.fadeOut();
//       }
//   });
//   $('a[href^="#"]').click(function(){
//     var time = 500;
//     var href= $(this).attr("href");
//     var target = $(href == "#" ? 'html' : href);
//     var distance = target.offset().top;
//     $("html, body").animate({scrollTop:distance}, time, "swing");
//     return false;
//   });
// });

// LINE公式アカウントボタン
// jQuery(function() {
//   var pagetop = $('#page_top_line');   
//   pagetop.hide();
//   $(window).scroll(function () {
//       if ($(this).scrollTop() > 500) {  //100pxスクロールしたら表示
//           pagetop.fadeIn();
//       } else {
//           pagetop.fadeOut();
//       }
//   });
//   $('a[href^="#"]').click(function(){
//     var time = 500;
//     var href= $(this).attr("href");
//     var target = $(href == "#" ? 'html' : href);
//     var distance = target.offset().top;
//     $("html, body").animate({scrollTop:distance}, time, "swing");
//     return false;
//   });
// });


//ブログ記事内の【strongタグ】の装飾
// $(window).on('scroll',function(){
//   $("strong").each(function(){
//     var position = $(this).offset().top;
//     var scroll = $(window).scrollTop();
//     var windowHeight = $(window).height();
//     if (scroll > position - windowHeight){
//       $(this).addClass('isActive');
//     }
//   });
// });


//スクロール途中からヘッダーを出現させるための設定を関数でまとめる
function FixedAnime() {
	var elemTop = $('#area-3').offset().top;//#area-3の位置まできたら
	var scroll = $(window).scrollTop();
	if(scroll <= 560){//上から20pxスクロールされたら $('#header').addClass('DownMove');//DownMoveというクラス名を除き } else if (scroll >= elemTop){
			$('#nav').removeClass('UpMove');//#headerについているUpMoveというクラス名を除く
			$('#nav').addClass('DownMove');//#headerについているDownMoveというクラス名を付与

		}else{
			if($('#nav').hasClass('DownMove')){//すでに#headerにDownMoveというクラス名がついていたら
				$('#nav').removeClass('DownMove');//DownMoveというクラス名を除き
				$('#nav').addClass('UpMove');//UpnMoveというクラス名を付与
			}
		}
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
});