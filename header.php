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
          <li <?php if( is_page('about') ) echo ' class="is-current"'; ?>>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">会社案内</a>
          </li>
          <li <?php if( is_page('business') ) echo ' class="is-current"'; ?>>
            <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">事業内容</a>
          </li>
          <li <?php if( is_page('construction') ) echo ' class="is-current"'; ?>>
            <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">施工事例</a>
          </li>
          <li <?php if( is_page('item') ) echo ' class="is-current"'; ?>>
            <a href="<?php echo esc_url( home_url( '/item/' ) ); ?>">取扱商品</a>
          </li>
          <li <?php if( is_page('news') ) echo ' class="is-current"'; ?>>
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a>
          </li>
        </ul>
        <ul class="gNav-list02">
          <li class="-contact">
            <a href="<?php echo esc_url( home_url( '/contact-form/' ) ); ?>">
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
          <li id="gNav-open">
            <span></span>
            <span></span>
          </li>
        </ul>
      </nav>
      <div id="sideNav-open-btn" class="sideNav-open-btn">
        <span></span>
        <span></span>
      </div>
      <nav id="sideNav" class="sideNav">
        <div class="sideNav-inner">
          <ul class="first">
            <li>
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">会社案内</a>
              <ul class="second">
                <li>
                  <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>#greeting">社長あいさつ</a>
                </li>
                <li>
                  <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>#about">会社概要</a>
                </li>
                <li>
                  <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>#history">会社沿革</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">事業内容</a>
              <ul class="second">
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
          <ul class="first">
            <li>
              <a href="<?php echo esc_url( home_url( '/qa/' ) ); ?>">よくあるご質問</a>
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
        </div>
      </nav>

      <div id="overlay" class="overlay"></div>
    </header>

    <main>