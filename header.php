<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <!-- テーマファイルまでのパス -->
    <script>
      var path = "<?php echo get_template_directory_uri();?>";
    </script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="l-header">
      <?php if ( is_home() || is_front_page() ) : ?>
        <h1 class="l-header-logo">
          <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/common/logo.svg" alt="植杉造園"></a>
        </h1>
      <?php else : ?>
        <div class="l-header-logo">
          <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/common/logo.svg" alt="植杉造園"></a>
        </div>
      <?php endif; ?>
      <nav class="gNav">
        <ul class="gNav-list">
          <li>
            <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社案内</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">事業内容</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/jirei/' ) ); ?>">施工事例</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/item/' ) ); ?>">取扱商品</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">お知らせ</a>
          </li>
        </ul>
        <ul class="gNav-list02">
          <li class="-contact">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/common/icon_contact.svg" alt="CONTACT">
              <p>CONTACT</p>
            </a>
          </li>
          <li class="-recruit">
            <a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/common/icon_recruit.svg" alt="採用情報">
              <p>採用情報</p>
            </a>
          </li>
          <li id="gNav-open" class="c-toggleHandle">
            <span></span>
            <span></span>
            <span></span>
          </li>
        </ul>
      </nav>
      <div class="sideNav-button">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="sideNav">
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社案内</a>
            <ul>
              <li>
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>#greeting">社長あいさつ</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>#about">会社概要</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>#history">会社沿革</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">事業内容</a>
            <ul>
              <li>
                <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#jumoku">樹木管理</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#teien">庭園管理</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#sentei">剪定作業</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#yukigakoi">雪囲い</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#price">工事費用の目安</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/qa/' ) ); ?>">よくあるご質問</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/jirei/' ) ); ?>">よくあるご質問</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/item/' ) ); ?>">取扱商品</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">お知らせ</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">プライバシーポリシー</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>