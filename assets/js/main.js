jQuery(function($) {
  const winWidth = $(window).width(); //グローバル

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

  //  共通スライダー
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
  });

  // ナビオープン
  let winPos;
  $("#sideNav-open-btn").on("click", function() {
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
  $("#top-mv").bgswitcher({
    images: ["pic1.jpg", "pic2.jpg", "pic3.jpg"],

  });

  // Q&Aアコーディオン
  $(".qa-wrap-q").on("click", function() {
    $(this).next(".qa-wrap-a").slideToggle();
    $(this).toggleClass("is-open");
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