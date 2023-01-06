jQuery(function($) {
  const winWidth = $(window).width(); //グローバル

  // ヌルッと動く
  $('a[href^="#"]').on('click', function() {
    // サイドナビ閉じる
    $("#sideNav-open-btn, #gNav-open, #sideNav, body").removeClass("is-open");
    $("#overlay").fadeOut();
    $("body").css('position', 'static').css('top', 0);

    var href = $(this).attr("href"),
      speed = 500,
      target = $(href === "#" || href === "" ? 'html' : href),
      position = target.offset().top;
    $('body,html').animate({scrollTop : position}, speed, 'swing');
    return false;
  });

  // ナビオープン
  let winPos;
  $("#sideNav-open-btn, #gNav-open").on("click", function() {
    $(this).toggleClass("is-open");
    $("#sideNav").toggleClass("is-open");
    $("#overlay").fadeToggle();

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

  $("#overlay").on("click", function() {
    $("#sideNav-open-btn").removeClass("is-open");
    $("#sideNav").removeClass("is-open");
    $("#overlay").fadeOut();

    $('body').css('position', 'static').css('top', 0);
      window.scrollTo( 0 , winPos );
      $('body').removeClass('is-open');
  });

  // トップMVスライダー
  const mk_bk_wrap = $('.mv-bk-wrap');
  if(mk_bk_wrap.length > 0) {
    let top_mv_pc_images = [
      'top_slide01_pc.jpg',
      'top_slide02_pc.jpg',
      'top_slide03_pc.jpg',
      'top_slide04_pc.jpg',
      'top_slide05_pc.jpg',
    ];
    const top_mv_bks_cnt = top_mv_pc_images.length;

    // 合計数出力
    $('.mv-paging .page-cnt p').text(getZeroPadding(top_mv_bks_cnt, 2));

    var timer = false;
    let top_mv_images = top_mv_pc_images;

    const ua = navigator.userAgent;
    // 画像pc,sp切り替え
    if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1) || ua.indexOf('iPad') > -1 || ua.indexOf('Android') > -1) {
      top_mv_images = top_mv_images.map((image) => {
        return image.replace("pc", "sp");
      });
    } else {
        // PC
        top_mv_images = top_mv_pc_images;
    }

    let top_mv_bks_index = 1;
    let top_mv_bks_interval = 6000;

    const top_mv_bks = top_mv_images.map((image, index) => {
      return(
        `<div class="mv-bk">
          <div class="core-wrap">
            <div class="core" style="background-image: url(${path}/assets/images/top/${image}); transform: scale(1.1);"></div>
          </div>
        </div>`
      );
    });

    // 最初の一枚目
    $('.mv-bk-wrap').append(top_mv_bks);
    $('.mv-bk-wrap .mv-bk:first-child').css('z-index', '1');
    TweenMax.to('.mv-bk-wrap .mv-bk:first-child .core-wrap',
      0.7,{
        width: '100%',
        x: 0,
        ease:"Power3.easeOut",
        startAt: {
          width: 0,
          x:-100,
        }
      });
      TweenMax.to('.mv-bk-wrap .mv-bk:first-child .core-wrap',
      3,{
        scale: 1,
        ease:"Power3.easeOut",
        startAt: {
          scale:1.1
        }
      });
      TweenMax.to('.line-wrap .line',
      top_mv_bks_interval / 1000,{
        width:"100%",
        ease:"Power0.easeNone",
        startAt: {
          width:"0%"
        }
      });

    // 残りループ
    let top_mv_bks_z_index = top_mv_bks_index;
    setInterval(function(){
      top_mv_bks_index++;
      top_mv_bks_z_index++;

      $('.mv-bk-wrap .mv-bk:nth-child(' + top_mv_bks_index + ')').css('z-index', top_mv_bks_z_index);
      TweenMax.to('.mv-bk-wrap .mv-bk:nth-child(' + top_mv_bks_index + ') .core-wrap',
      0.7,{
        width: '100%',
        x: 0,
        ease:"Power3.easeOut",
        startAt: {
          width: 0,
          x:-100,
        }
      });
      TweenMax.to('.mv-bk-wrap .mv-bk:nth-child(' + top_mv_bks_index + ') .core-wrap',
      3,{
        scale: 1,
        ease:"Power3.easeOut",
        startAt: {
          scale:1.1
        }
      });

      // ページング処理
      TweenMax.to('.line-wrap .line',
      top_mv_bks_interval / 1000,{
        width:"100%",
        ease:"Power0.easeNone",
        startAt: {
          width:"0%"
        }
      });
      // ページング数字プラス
      $('.mv-paging .page-current p').text(getZeroPadding(top_mv_bks_index, 2));


      // ループ
      if (top_mv_bks_index === top_mv_bks_cnt) {
        // リセット
        top_mv_bks_index = 0;
      }
    },top_mv_bks_interval);
  }

  // トップ施工事例
  $('#construction-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "30%",
    autoplay: true, // 自動でスクロール
    autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
    speed: 25000, // スライドが流れる速度を設定
    cssEase: "linear", // スライドの流れ方を等速に設定
    swipe: false, // 操作による切り替えはさせない
    arrows: false, // 矢印非表示
    pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
    responsive: [
      {
        breakpoint: 769, // 768px以下のサイズに適用
        settings: {
        slidesToShow: 1,
        centerPadding: "12.5px"
        },
      },
    ]
  });

  // Q&Aアコーディオン
  $(".qa-wrap-q").on("click", function() {
    $(this).next(".qa-wrap-a").slideToggle();
    $(this).toggleClass("is-open");
  });

  // 施工事例スライダー
  $('.construction-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false, // 矢印非表示
    asNav: ".construction-slider-thumb",
  });
  $('.construction-slider-thumb').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false, // 矢印非表示
    asNavFor: ".construction-slider",
    focusOnSelect: true,
  });

  // コンタクトフォームラジオボタン
  $('label input[type="radio"]').on('click', function() {
    $(this).parent('label').find('.input-radio-replace').add
  })



  // 0埋め
  function getZeroPadding(number, decimals)
  {
    var number = String(number);

    // 0埋め指定数より桁数が大きい場合は処理を中止
    if (number.length > decimals) {
      return number;
    }

    // 値の前に10を乗算し0を追加、その後指定桁数へ切り出し
    return (Math.pow(10, decimals) + number).slice(decimals * -1);
  }

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