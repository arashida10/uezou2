<?php
/**
 * Template Name:資料請求・お問い合わせ
 */

get_header(); ?>

<div id="contact">
  <div class="c-page-mv-wrapper">
    <div class="p-flexBox">
      <div class="p-flexBox-title-wrapper">
        <h1 class="p-flexBox-title">CONTACT<span class="p-flexBox-title__sub">資料請求・お問い合わせ</span></h1>
      </div>
      <div class="p-flexBox__conetnt">
        <div class="c-page-mv">
          <div class="c-page-mv-img"></div>
        </div>
      </div>
    </div>
  </div>

  <ul class="c-pageInLink -type02">
    <li><a href="#qa">よくある質問</a></li>
    <li><a href="#contact-form">資料請求・お問い合わせ</a></li>
  </ul>

  <div class="l-container">
    <section class="l-sec l-sec-qa c-spacer fadeIn_up">
      <h2 id="qa" class="l-sec-title02 u-navAdjust">QUESTION<span class="l-sec-title02__sub">よくある質問</span></h2>
      <dl class="accordion">
        <dt class="accordion-open">施⼯エリア決まっていますか？</dt>
        <dd class="accordion-content">
          <div>仙台市を中⼼に宮城県全域を対応させていただいております。<br>ご希望の場所がお決まりでしたらご相談ください。 </div>
        </dd>
      </dl>
      <dl class="accordion">
        <dt class="accordion-open">相談を始めてから住み始めるまで、どのくらいの期間がかかりますか？</dt>
        <dd class="accordion-content">
          <div>プランのお打合せの時期によりますが、おおむね８ヶ⽉〜１０ヶ⽉くらいです。<br>いつから住み始めたいかというご希望がある場合は、事前にお知らせいただければ出来る限りお応えいたしますので、 お気軽にご相談ください。 </div>
        </dd>
      </dl>
      <dl class="accordion">
        <dt class="accordion-open">着⼯から完成までどのくらい期間がかかりますか？</dt>
        <dd class="accordion-content">
          <div>建物の⼤きさや仕様によりますが、通常４ヶ⽉間の期間をいただいております。</div>
        </dd>
      </dl>
      <dl class="accordion">
        <dt class="accordion-open">⼟地探しの相談に乗っていただけますか？</dt>
        <dd class="accordion-content">
          <div>⼟地探しからの家づくり相談会を随時受け付けております。<br>
          まずはご希望のエリア、坪数、ご予算をお聞かせください。<br>
          また、具体的にお決まりでない⽅も、新しい住まいのイメージ、どんな建物に住みたいか、どのようなライフスタイルを送りたいか、 などお話をお伺いながらエリアの⼟地の特徴、状況、⼟地を⾒るときのポイントなどアドバイスさせていただきます。 </div>
        </dd>
      </dl>
      <dl class="accordion">
        <dt class="accordion-open">住宅の建築以外の費⽤はいくらかかりますか？</dt>
        <dd class="accordion-content">
          <div>建物本体価格以外に諸費⽤がかかってきますが、弊社には諸費⽤など全て含むコミコミの価格で建てる住宅も準備しております。</div>
        </dd>
      </dl>
    </section><!-- /l-sec-qa -->

    <section class="l-sec l-sec-form fadeIn_up">
      <h2 id="contact-form" class="l-sec-title02  u-navAdjust">CONTACT<span class="l-sec-title02__sub">資料請求・お問い合わせ</span></h2>
      <p class="l-sec-lead">弊社に関するお問い合わせ、資料請求は、<br>以下フォームよりお気軽にお問い合わせください。</p>
      <?php echo do_shortcode('[contact-form-7 id="34" title="資料請求・お問い合わせ" html_class="h-adr"]'); ?>
    </section><!-- /l-sec-form -->
  </div>

</div><!-- /#contact  -->


<?php get_footer(); ?>