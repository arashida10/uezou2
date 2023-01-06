<?php
/**
 * Template Name:お問い合わせフォーム
 */

get_header(); ?>

<div id="contact-form" class="contents">
  <div class="l-container">
    <div class="c-page-mv c-page-mv--bkNone">
      <h1 class="c-page-mv__ttl">CONTACT FORM<span>お問い合わせフォーム</span></h1>
    </div>

    <p class="c-lead03">樹木管理・庭園管理・剪定作業・雪囲いを始め、各種お問い合わせは<br>
    下記フォームまたはお電話よりお気軽にお問い合わせください。</p>

    <div class="p-contact">
      <div class="p-contact-batch">
        <p class="p-contact-batch__tel">
          <span>TEL.</span>
          <a href="tel:0238-49-9788">0238-49-9788</a>
        </p>
        <p class="p-contact-batch__txt">受付時間：月～土曜日　7:45～17:15</p>
      </div>

      <div class="p-contact-form">
      <?php echo do_shortcode('[contact-form-7 id="109" title="お問い合わせフォーム"]'); ?>
      </div>
    </div>

  </div>

</div><!-- /#product-contact -->


<?php get_footer(); ?>