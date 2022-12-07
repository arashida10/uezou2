<?php
/**
 * Template Name:お問い合わせありがとうございます
 */

get_header();

// パラメータからメッセージ切り替え
$title = "お問い合わせありがとうございました。";
if(isset($_GET['content'])) {
  $content = $_GET['content'];
  switch ($content) {
    case 'イベント':
      $title = "イベント予約ありがとうございました。";
      break;
    case 'カタログ請求':
    case '資料が欲しい':
      $title = "資料請求ありがとうございました。";
  }
}
?>

<div id="send-complete">
  <div class="l-container">
    <div class="message">
      <p class="title"><?php echo $title; ?></p>
      <p class="txt">ご記入いただいた情報は無事送信されました。<br>
      確認のためお客様へ自動返信メールをお送りさせていただきました。<br>
      弊社担当者よりご連絡させていただきます。</p>
    </div>
    <?php
      $h = $_SERVER['HTTP_HOST'];
      if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'],$h) !== false)) {
        echo '<div class="c-button"><a href="' . $_SERVER['HTTP_REFERER'] . '">BACK</a></div>';
      }
    ?>
  </div>
</div><!-- /#wpcf7mailthanks -->


<?php get_footer(); ?>