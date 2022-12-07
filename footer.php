    </main>
    <footer class="l-footer">
      <div id="page-top"><a href="#"><span>PAGE TOP</span></a></div>
      <div class="l-footer-nav">
        <div class="l-container">
          <ul>
            <li>
              <a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報<span>RECRUIT</span></a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ<span>CONTACT</span></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="l-footer-contents">
        <div class="l-container">
          <div class="l-footer-contents-left">
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/common/logo02.svg" alt="植杉造園">
            </a>
            <p class="address">〒992-0021 山形県米沢市花沢3119-11<br>
            TEL.0238-49-9788／FAX.0238-49-9789</p>
            <div class="c-btn -wht">
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
            </div>
          </div>
          <div class="l-footer-contents-right">
            <div class="l-footer-nav02-wrapper">
              <ul class="l-footer-nav02">
                <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社案内</a></li>
                <li>
                  <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">事業内容</a>
                  <ul>
                    <li><a href="<?php echo esc_url( home_url( '/security/' ) ); ?>">安心の保障体制</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/price/' ) ); ?>">工事費用の目安</a></li>
                  </ul>
                </li>
                <!-- SP用 -->
                <li class="sp"><a href="<?php echo esc_url( home_url( '/jirei/' ) ); ?>">施工事例</a></li>
              </ul>
              <ul class="l-footer-nav02">
                <li class="pc"><a href="<?php echo esc_url( home_url( '/jirei/' ) ); ?>">施工事例</a></li>
                <li><a href="<?php echo esc_url( home_url( '/item/' ) ); ?>">取扱商品</a></li>
                <li><a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">お知らせ</a></li>
                <li><a href="<?php echo esc_url( home_url( '/qa/' ) ); ?>">よくあるご質問</a></li>
                <!-- SP用 -->
                <li class="sp"><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
                <li class="sp"><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">プライバシーポリシー</a></li>
                <li class="sp"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
              </ul>
              <ul class="l-footer-nav02 pc">
                <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
                <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">プライバシーポリシー</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="copyright">© UESUGI ZOUEN All rights reserved.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>