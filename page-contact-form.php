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
        <dl class="p-contact-form__line">
          <dt>商品名<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>数量<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>お名前<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>フリガナ<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>会社名</dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>部署名</dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>電話番号<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line p-contact-form__line--address">
          <dt>お届け先のご住所<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line p-contact-form__line--mail">
          <dt>メールアドレス<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>お届け希望日<span class="requied">※必須</span></dt>
          <dd><input type="text"></dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>お届け方法<span class="requied">※必須</span></dt>
          <dd>
            <ul>
              <li>
                <label>
                  <input type="radio">
                  お届け先ご住所にて引き渡し
                </label>
                <span class="msg">※別途運搬費がかかります。</span>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>お支払い方法<span class="requied">※必須</span></dt>
          <dd>
            <ul>
              <li>
                <label>
                  <input type="radio">
                  お届け先ご住所にて引き渡し
                </label>
                <span class="msg">※別途運搬費がかかります。</span>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="p-contact-form__line">
          <dt>備考欄</dt>
          <dd>
            <textarea></textarea>
            <p class="pla-poli"><a href="" target="_blank">プライバシーポリシー</a>をご確認の上、ご同意いただける場合は「個人情報保護方針に同意する」にチェックをいれて送信してください。</p>
            <p class="consent">
              <label>
                <input type="checkbox">
                個人情報保護方針に同意する
              </label>
              <span class="requied">※必須</span>
            </p>
          </dd>
        </dl>

        <div class="c-btn -arrow">
          <input type="text">
        </div>

      </div>
    </div>

  </div>

</div><!-- /#product-contact -->


<?php get_footer(); ?>