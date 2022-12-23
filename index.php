<?php get_header(); ?>

<div id="top" class="contents">
  <div id="top-mv" class="mv">
    <div class="mv-txt">
      <h2>GREEN IMPROVES<br>YOUR QUALITY OF LIFE</h2>
      <p>緑を活かし、クオリティ・オブ・ライフの向上を目指します</p>
    </div>
    <div class="mv-paging">
      <div class="page">
        <p>01</p>
      </div>
      <div class="line-wrap">
        <div class="line"></div>
      </div>
      <div class="page">
        <p>06</p>
      </div>
    </div>
  </div>

  <section class="l-sec about">
    <div class="about-box">
      <div class="about-box__left">
        <picture>
          <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/about_gaikan_pc.jpg">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/top/about_gaikan_sp.jpg" alt="建物外観">
        </picture>
      </div>
      <div class="about-box__right">
        <div class="inner">
          <h2 class="l-sec-ttl">ABOUT<span>会社案内</span></h2>
          <p>私たち植杉造園は、日々お客様に寄り添った質が高い仕事の提供を心掛けております。<br>
          庭木の剪定、草刈り、芝刈り、施肥、消毒、雪囲いなどの造園業を中心に事業を展開しております。お庭のことならお気軽にお問い合わせください。</p>
          <div class="c-btn-view-more -wht">
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">VIEW MORE</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.about -->

  <section class="l-sec business">
    <div class="l-container">
      <h2 class="l-sec-ttl">BUSINESS<span>事業内容</span></h2>
      <ul class="c-listItem -row2 business-list">
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#garden-management" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_garden_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_garden_sp.jpg" alt="GARDEN MANAGEMENT 庭園管理">
              </picture>
            </div>
            <h3>GARDEN MANAGEMENT<span>庭園管理</span></h3>
          </a>
        </li>
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#tree-management" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_tree_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_tree_sp.jpg" alt="TREE MANAGEMENT 樹木管理">
              </picture>
            </div>
            <h3>TREE MANAGEMENT<span>樹木管理</span></h3>
          </a>
        </li>
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#pruning-planting" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_pruning_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_pruning_sp.jpg" alt="PRUNING & PLANTING 剪定・植樹作業">
              </picture>
            </div>
            <h3>PRUNING & PLANTING<span>剪定・植樹作業</span></h3>
          </a>
        </li>
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#snow-fence" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_snow_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/bk_business_snow_sp.jpg" alt="SNOW FENCE 雪囲い">
              </picture>
            </div>
            <h3>SNOW FENCE<span>雪囲い</span></h3>
          </a>
        </li>
      </ul>

      <ul class="c-listItem -row3 other-list">
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#cost" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/business_price_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/business_price_sp.jpg" alt="PRICE 工事費用の目安">
              </picture>
            </div>
            <p class="c-listItem__name">PRICE</p>
            <p class="c-listItem__txt">工事費用の目安</p>
          </a>
        </li>
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/item/' ) ); ?>" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/business_item_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/business_item_sp.jpg" alt="ITEM 取扱商品">
              </picture>
            </div>
            <p class="c-listItem__name">ITEM</p>
            <p class="c-listItem__txt">取扱商品</p>
          </a>
        </li>
        <li class="c-listItem__item">
          <a href="<?php echo esc_url( home_url( '/q-a/' ) ); ?>" class="img-zoom">
            <div class="img-box">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/business_qa_pc.jpg">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/top/business_qa_sp.jpg" alt="Q&A よくあるご質問">
              </picture>
            </div>
            <p class="c-listItem__name">Q&A</p>
            <p class="c-listItem__txt">よくあるご質問</p>
          </a>
        </li>
      </ul>
      <div class="c-btn-view-more02">
        <a href="#">VIEW MORE</a>
      </div>
    </div>
  </section>
  <!-- /.business -->

  <section class="l-sec construction">
    <div class="l-container">
      <h2 class="l-sec-ttl">CONSTRUCTION<span>施工事例</span></h2>
    </div>
    <div id="construction-slide" class="construction-list">
      <div class="c-construction-card">
        <a href="" class="img-zoom">
          <div class="img-box">
            <picture>
              <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/construction_prunning_pc.jpg">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/top/construction_prunning_sp.jpg" alt="剪定・植樹">
            </picture>
          </div>
          <p class="c-construction-card__category">PRUNING & PLANTING</p>
          <h3 class="c-construction-card__ttl">剪定・植樹</h3>
          <p class="c-construction-card__desc">お手入れが行き届いたお庭は、見る人に落ち着きと安らぎを与えてくれます。 美しいお庭は適切な管理があるからこそ。私たちはお庭や地域それぞれの特性を活かし、 樹木の将来を見据えたお手入れを心掛けています。</p>
        </a>
      </div>
      <div class="c-construction-card">
        <a href="" class="img-zoom">
          <div class="img-box">
            <picture>
              <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/construction_garden_pc.jpg">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/top/construction_garden_sp.jpg" alt="庭園管理">
            </picture>
          </div>
          <p class="c-construction-card__category">GARDEN MANAGEMENT</p>
          <h3 class="c-construction-card__ttl">庭園管理</h3>
          <p class="c-construction-card__desc">植杉造園では、庭園や樹木が健全な状態で維持できるように、薬剤散布・樹々の手入れ・施肥などのあらゆる業務を、細心の注意を払って幅広く行います。</p>
        </a>
      </div>
      <div class="c-construction-card">
        <a href="" class="img-zoom">
          <div class="img-box">
            <picture>
              <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/construction_tree_pc.jpg">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/top/construction_tree_sp.jpg" alt="樹木管理">
            </picture>
          </div>
          <p class="c-construction-card__category">TREE MANAGEMENT</p>
          <h3 class="c-construction-card__ttl">樹木管理</h3>
          <p class="c-construction-card__desc">樹木の健康状態を保つためには、周期的なお手入れを施す必要があります。専門的な知識を持った職人が、伐採・施肥・養生・樹木消毒・病害虫対策など、地域や季節に合わせて、その都度適切な処置を施します。</p>
        </a>
      </div>
      <div class="c-construction-card">
        <a href="" class="img-zoom">
          <div class="img-box">
            <picture>
              <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/top/construction_other_pc.jpg">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/top/construction_other_sp.jpg" alt="その他">
            </picture>
          </div>
          <p class="c-construction-card__category">OTHER</p>
          <h3 class="c-construction-card__ttl">その他</h3>
          <p class="c-construction-card__desc">外構工事・生垣設置・砕石敷均しなど、様々なお悩みやご要望にお応えいたします。</p>
        </a>
      </div>
    </div>
    <div class="l-container">
      <div class="c-btn-view-more02">
        <a href="">VIEW MORE</a>
      </div>
    </div>
  </section>
  <!-- /.construction -->

  <section class="l-sec news">
    <div class="l-container">
      <div class="news-box">
        <div class="news-box__left">
          <h2 class="l-sec-ttl">NEWS<span>お知らせ</span></h2>
        </div>
        <div class="news-box__right">
          <ul class="c-news-list">
            <li>
              <span class="c-news-list__date">2022/01/01</span>
              <span class="c-category">新着情報</span>
              <a href="#">お知らせタイトルが入ります。お知らせタイトルが入ります。</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="c-btn-view-more">
        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">VIEW MORE</a>
      </div>
    </div>
  </section>
  <!-- /.news -->

</div>
<!-- /#top -->

<?php get_footer(); ?>