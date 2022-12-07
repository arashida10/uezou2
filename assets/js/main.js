jQuery(function($) {
  const winWidth = $(window).width(); //グローバル

  if (winWidth > 768) {
    $('.gNav-list').children('li').hover(function() {
      $(this).toggleClass('is-active');
      $(this).children('ul').stop().slideToggle(180);
    });
  }

  // トップ LATEST NEWS
  $('#news-slide').slick({
    vertical: true,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    speed: 2000,
  });

  // トップ イベント情報
  $('.event-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: `<div class="prev-arrow"><img src="${path}/assets/images/common/arrow_1.svg"></div>`,
    nextArrow: `<div class="next-arrow"><img src="${path}/assets/images/common/arrow_1.svg"></div>`,
    responsive: [
      {
        breakpoint: 769, // 768px以下のサイズに適用
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        },
      },
    ],
  });

  //  共通スライダー
  $('.c-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: `<div class="prev-arrow"><img src="${path}/assets/images/common/arrow_5.svg"></div>`,
    nextArrow: `<div class="next-arrow"><img src="${path}/assets/images/common/arrow_5.svg"></div>`,
    responsive: [
      {
        breakpoint: 769, // 768px以下のサイズに適用
        settings: {
          prevArrow: `<div class="prev-arrow"><img src="${path}/assets/images/common/arrow_1.svg"></div>`,
          nextArrow: `<div class="next-arrow"><img src="${path}/assets/images/common/arrow_1.svg"></div>`,
        },
      },
    ],
  });

  // 共通ポップアップ
  $('.c-popup-open').on('click', function(){
    $(this).closest('.c-popup').addClass('is-active');
    $(this).closest('.c-popup').find('.c-popup-content').fadeIn();
    $('#popup-overlay').fadeIn();
  });
  $('.c-popup-close, #popup-overlay').on('click', function(){
    $('.c-popup').find('.c-popup-content').hide();
    $('#popup-overlay').hide();
    $('.c-popup').removeClass('is-active');
  });

  // アコーディオン
  $('.accordion-open').on('click', function() {
    $(this).parent('.accordion').toggleClass('is-active');
    $(this).next('.accordion-content').slideToggle();
  });

  // フォーム送信ボタン
  $('.p-form .p-form-submit input').prop("disabled", true);
  $('#p-form-confilm').on('click', function() {
    if ( $(this).prop('checked') == false ) {
      $(this).parent().next('.p-form-submit').children('input').prop('disabled', true);
    } else {
      $(this).parent().next('.p-form-submit').children('input').prop('disabled', false);
    }
  });

  // フォームプラポリ
  $('#p-form-confilm-open').on('click', function() {
    $('#p-form-confilm-content').slideToggle();
  });

  // バーガー
  let winPos;
  $('#gNav-open').on('click', function() {
    $(this).parent('.gNav').toggleClass('is-open');
    $('.l-header').toggleClass('is-open');
    let flg = $('body').hasClass('is-open');

    if (!flg) {
      // open
      winPos = $(window).scrollTop();
      $('body').css('position', 'fixed').css('top', -winPos).css('width', '100%');
      $('body').addClass('is-open');
    } else {
      // close
      $('body').css('position', 'static').css('top', 0);
      window.scrollTo( 0 , winPos );
      $('body').removeClass('is-open');
    }
  });
  // リンク押下時はナビ閉じる（ページ内リンク対策）
  $('.gNav a').on('click', function() {
    $('.gNav').removeClass('is-open');
    $('body').css('position', 'static');
    $('body').removeClass('is-open');
  });

  // アニメーション
  let showPosi;
  if (winWidth > 768) {
    showPosi = 200;
  } else {
    showPosi = 50;
  }
  $(window).scroll(function() {
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();

    // フェードアップ
    $(".fadeIn_up").each(function() {
      var blockPosition = $(this).offset().top;
      if (scroll > blockPosition - windowHeight + showPosi) {
        $(this).addClass("is-show");
      }
    });

    // トップヘッダー
    const headerHeight = $('.l-header-top').height();

    if (winWidth <= 768) {
      windowHeight -= 116; //ナビとニュース分、引く
    }
    if (scroll >= windowHeight - headerHeight) {
      $('.l-header-top').addClass('is-fixed');

    } else {
      $('.l-header-top').removeClass('is-fixed')
    }

  });

  // ヌルッと動く
  $('a[href^="#"]').on('click', function() {
    console.log('fds')
		var href = $(this).attr("href"),
			speed = 500,
			target = $(href === "#" || href === "" ? 'html' : href),
			position = target.offset().top;
		$('body,html').animate({scrollTop : position}, speed, 'swing');
		return false;
	});

});

const setFillHeight = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}

let vw = window.innerWidth;

window.addEventListener('resize', () => {
  if (vw === window.innerWidth) {
  　// 画面の横幅にサイズ変動がないので処理を終える
    return;
  }

  // 画面の横幅のサイズ変動があった時のみ高さを再計算する
  vw = window.innerWidth;
  setFillHeight();
});

// 初期化
setFillHeight();