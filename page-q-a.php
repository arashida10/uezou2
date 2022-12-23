<?php
/**
 * Template Name:Q&A
 */

get_header(); ?>

<div id="q-a" class="contents">
  <div class="l-container">
    <div class="c-page-mv c-page-mv--bkNone">
      <h1 class="c-page-mv__ttl">Q&A<span>よくあるご質問</span></h1>
    </div>

    <?php
    $qa_list = array(
      array("電話で費用は教えてもらえますか？", "お電話での費用のご説明はしておりません。<br>
      植杉造園では、必ず現地にお伺いした上で、お客様のご要望をお聞きし見積もりをさせて頂いております。<br>
      その上でお客様とご相談し予算を組んでおります。"),
      array("元々ある庭木を使って欲しいのですが？", "使わせて頂くことは可能です。<br>
      思い入れのある庭木は、お金では表せない気持ちの問題ですから、全力を尽くさせて頂きます。庭の改修工事の実績も豊富にございますので、経験を活かしお客様のご要望にお応えできるように努めます。"),
      array("工事の前に手付金を払うのですか？", "基本的には手付金は頂いておりません。<br>
      工事完了後、当社指定口座へお振込頂くか、現金にてお支払い頂く形となっております。"),
      array("木の手入れをお願いしたいのですが？", "毎年ご依頼を頂いているお施主さんだけで、６月末からお盆まではご予約が埋まっております。<br>
      ６月中旬並びにお盆過ぎの作業で良ければ若干余裕がありますのでお引き受けいたしますので、ご相談くださいませ。"),
      array("手入れ（剪定）の料金体系はどうなっていますか？", "毎年庭木の状況によって作業量が増減する、と判断した庭は一人当たりいくら、という形で頂いております。<br>
      古くからお付き合いさせて頂いているお施主さんも、信頼関係の下、この料金で手入れをさせて頂いております。<br>
      毎年作業量の増減があまりない樹種ばかりの庭は、 年間の定額制で戴いております。"),
      array("予算に限りがあるのですが、予算内でお願いするのは可能ですか？", "もちろん可能です。<br>
      通常、設計作業での減額は、レイアウトを簡素化して減額する方法と使用材料のグレードを落として減額する方法があります。<br>
      打ち合わせ時にお申し出ください。"),
      array("お見積もりは無料ですか？", "はい、原則として無料で、図面と見積をお出ししています。"),
      array("現在家を建築中ですが、これから庭や植木の相談は可能ですか？", "家ができた後に庭を頼まれる方は、最近増えております。<br>
      どの段階でも構いませんので、まずはお気軽にご相談下さい。"),
      array("打ち合わせに必要なものはありますか？", "敷地と建物の位置関係を表した図面があると助かります。<br>
      また、気に入った庭の写真や雑誌をお持ち頂ければ、より充実した打ち合わせが出来るかと思います。"),
      array("雨の日の工事はどうなりますか？", "原則として行いません。<br>
      現場の流れ上、どうしても行わなければいけない時もあります。<br>
      工期短縮のためだけに突貫する事はありませんのでご安心ください。"),
      array("施工中に変更は可能ですか？", "原則として、一度発注したものを変更する事はできませんので、ご了承ください。<br>
      決まった材料内でレイアウト等の工夫は大歓迎です。<br>
      そちらはお気軽におっしゃってください。"),
      array("植木の水はどのくらいペースであげればいいですか？", "春～秋の期間、特に夏場は気をつけてください。<br>
      毎日少しずつよりも、数日に１回たっぷりと水をあげてあげるのがコツです。"),
      array("造った後の庭木は自分で手入れできますか？", "もちろん出来ます。<br>
      各種書籍が数多く発行されていますので、それを参考にしながらお手入れをしてみてください。<br>
      実際に毎年試行錯誤を繰り返し、庭に情熱を注いで頂ければ、きっと満足の行く庭が出来ると思います。<br>
      もちろん悩みなどがありましたら、お気軽にご相談くださいませ。"),
      array("料金のお支払い方法や、お支払い時期は？", "工事完成後に請求書を発行しますので、弊社の指定口座（請求書に記載しています）にお振込み頂くか、現金にてお支払い頂くかのどちらかとなっております。")
    );

    for ($i=0; $i < count($qa_list); $i++) : ?>

      <dl class="qa-wrap">
        <dt class="qa-wrap-q"><?php echo $qa_list[$i][0]; ?></dt>
        <dd class="qa-wrap-a">
          <div class="qa-wrap-a__content"><?php echo $qa_list[$i][1]; ?></div>
        </dd>
      </dl>

    <?php endfor; ?>

  </div>

</div><!-- /#q-a -->


<?php get_footer(); ?>