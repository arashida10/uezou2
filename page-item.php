<?php
/**
 * Template Name:取扱商品
 */

get_header(); ?>

<div id="item" class="contents">
  <div class="c-page-mv">
    <h1 class="c-page-mv__ttl">ITEM<span>取扱商品</span></h1>
  </div>

  <div class="l-container">
    <ul class="c-tab">
      <li><a href="#">すべて</a></li>
      <li><a href="#">造園アイテム</a></li>
      <li><a href="#">人工芝</a></li>
      <li><a href="#">雪囲いアイテム</a></li>
      <li><a href="#">その他</a></li>
    </ul>

    <p class="c-lead03">取り扱い商品についての各種お問い合わせは<br>
    お問い合わせフォームまたはお電話よりお気軽にお問い合わせください。</p>

    <ul class="c-listItem -row4">
      <li class="c-post c-listItem__item">
        <a href="" class="img-zoom">
          <div class="img-box">
            <img src="http://localhost:8888/wp_uezou/wp-content/themes/uezou2022/assets/images/construction/mv_pc.jpg" alt="">
            <span class="c-category">庭園管理</span>
          </div>
          <p class="c-post__ttl">花物各種</p>
          <p class="c-post__txt">ラベンダー・シバザクラ・スズラン・アルメリア・アルケミラモリス・ゲラニウム・パンジーなど</p>
          <p class="c-post__price">300円<span>税込〜</span></p>
          <p class="c-post__desc">3号pot～</p>
        </a>
        <ul class="c-listItem -row2 item-contacts">
          <li class="c-listItem__item item-contacts__mail">
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/common/icon_mail.svg" alt="お問い合わせ">
            </a>
          </li>
          <li class="c-listItem__item item-contacts__tel">
            <a href="tel:0238-49-9788">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/common/icon_tel.svg" alt="電話">
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- pagenation -->
    <div class="c-pagenation">
      <ul class="page-numbers">
        <li><span aria-current="page" class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="https://tiarise.com/blog/page/2/">2</a></li>
        <li><span class="page-numbers dots">…</span></li>
        <li><a class="page-numbers" href="https://tiarise.com/blog/page/13/">13</a></li>
      </ul>
    </div>

  </div>

</div><!-- /#item -->


<?php get_footer(); ?>