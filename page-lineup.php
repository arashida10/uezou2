<?php
/**
 * Template Name: ラインナップ
 */

get_header(); ?>

<div id="lineup">
  <div class="c-page-mv-wrapper">
    <div class="p-flexBox">
      <div class="p-flexBox-title-wrapper">
        <h1 class="p-flexBox-title">LINEUP<span class="p-flexBox-title__sub">ラインナップ</span></h1>
      </div>
      <div class="p-flexBox__conetnt">
        <div class="c-page-mv">
          <div class="c-page-mv-img"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="catalog">
    <a href="<?php echo home_url("/");?>#catalog">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/icon_catalog.svg" alt="カタログ">
      <p>カタログをもらう</p>
    </a>
  </div>

  <div class="l-container">
    <section class="l-sec">
      <h2 class="l-sec-title">定額制だから安心!<br class="sp-visible">自由に家づくりを<br class="sp-visible">楽しめるプラン</h2>
      <p class="l-sec-lead">エスエー工房の家づくりは、<br class="sp-visible">決まった金額から好きなものを選んでいくだけ。<br>家づくりで一番不安なお金のことを気にせず、楽しく家づくりを!</p>
      <ul class="c-pageInLink -row4 c-spacer">
        <li><a href="#lineup-ex">ラインナップ</a></li>
        <li><a href="#lineup-price">価格表</a></li>
        <li><a href="#lineup-siyou">選べる標準仕様</a></li>
        <li><a href="#lineup-spec">構造・性能</a></li>
      </ul>

      <!-- Lapuanka 〜ラプアンカ〜 -->
      <section id="lineup-ex" class="l-sec lineup-ex-wrapper c-spacer fadeIn_up u-navAdjust">
        <div class="lineup-ex-title-wrapper">
          <p class="lineup-ex-concept">天然素材のこだわり、職⼈の⼿作業製品</p>
          <h2 class="lineup-ex-title">Lapuanka<span class="lineup-ex-title__sub">〜ラプアンカ〜</span></h2>
        </div>
        <ul class="lineup-ex-slider c-slider">
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide01_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide01_pc@2x.webp" >
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide02_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide02_pc@2x.webp" >
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide03_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide03_pc@2x.webp" >
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide04_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide04_pc@2x.webp" >
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide05_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide05_pc@2x.webp" >
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide06_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide06_pc@2x.webp" >
            </picture>
          </li>
        </ul>

        <ul class="listItem -row6">
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide01_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide01_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide01_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide02_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide02_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide02_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide03_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide03_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide03_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide04_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide04_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide04_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide05_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide05_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide05_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide06_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide06_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/lapuanka_slide06_pc@2x.webp" >
              </picture>
            </div>
          </li>
        </ul>

        <div class="lineup-ex-comment">
          <div class="inner">
            <p>自然素材に包まれながら<br>経年変化を楽しんで。</p>
          </div>
        </div>

        <div class="lineup-ex-madoriplan">
          <div class="image">
            <p class="title">間取りプラン</p>
            <ul class="listItem -row2">
              <li class="listItem__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/madori_lapuanka01@2x.webp" >
              </li>
              <li class="listItem__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/madori_lapuanka02@2x.webp" >
              </li>
            </ul>
          </div>
          <p class="txt">裸足で歩きたくなる無垢材フローリング、珊瑚や和紙から生まれた壁材。<br>
          自然素材をふんだんに使った空間は、陽だまりの中にいるようなホッと心が休まる空間をつくりだします。<br class="pc-visible">
          自然素材は使えば使うほど、味わいが増していくもの。<br class="pc-visible">
          床についた傷も、劣化ではなく経年美化と思える…。<br>
          自然素材の良さを存分に楽しめる家を、手の届く価格でご案内。</p>
        </div>
      </section>
      <!-- /Lapuanka 〜ラプアンカ〜 -->

      <!-- Pehmea 〜ペフメア〜 -->
      <section class="l-sec lineup-ex-wrapper c-spacer -pehmea fadeIn_up">
        <div class="lineup-ex-title-wrapper">
          <p class="lineup-ex-concept">無⾻で男前なインダストリアルスタイル</p>
          <h2 class="lineup-ex-title">Pehmea<span class="lineup-ex-title__sub">〜ペフメア〜</span></h2>
        </div>
        <ul class="lineup-ex-slider c-slider">
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide01_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide01_pc@2x.webp">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide02_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide02_pc@2x.webp">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide03_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide03_pc@2x.webp">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide04_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide04_pc@2x.webp">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide05_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide05_pc@2x.webp">
            </picture>
          </li>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide06_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide06_pc@2x.webp">
            </picture>
          </li>
        </ul>

        <ul class="listItem -row6">
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide01_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide01_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide01_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide02_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide02_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide02_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide03_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide03_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide03_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide04_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide04_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide04_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide05_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide05_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide05_pc@2x.webp" >
              </picture>
            </div>
          </li>
          <li class="c-popup listItem__item">
            <div class="c-popup-open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide06_sp@2x.webp" ></div>
            <div class="c-popup-content">
              <button class="c-popup-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/btn-close.svg" ></button>
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide06_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/modern_slide06_pc@2x.webp" >
              </picture>
            </div>
          </li>
        </ul>

        <div class="lineup-ex-comment">
          <div class="inner">
            <p>あえて古さを感じさせる、<br>どこか懐かしく愛おしい家</p>
          </div>
        </div>

        <div class="lineup-ex-madoriplan">
          <div class="image">
            <p class="title">間取りプラン</p>
            <ul class="listItem -row2">
              <li class="listItem__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/madori_pehmea01@2x.webp" >
              </li>
              <li class="listItem__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/madori_pehmea02@2x.webp" >
              </li>
            </ul>
          </div>
          <p class="txt">ヴィンテージ感のある、無骨なデザインがお好みの方にオススメ。<br>
          温かみのある無垢材×色むらや凸凹のある壁×アイアン。<br>
          厳選された素材を組み合わせることで、<br class="pc-visible">
          インダストリアル風のデザインを叶えます。<br>
          隠れ家カフェに行く時のようなワクワク感と心地よさ。<br>
          デザインで日常をもっと楽しくしてみませんか？</p>
        </div>
      </section>
      <!-- /Modern style 〜モダンスタイル〜 -->

      <section class="l-sec l-sec-price c-spacer fadeIn_up">
        <h2 id="lineup-price" class="l-sec-title02 u-navAdjust">PRICE<span class="l-sec-title02__sub">価格表</span></h2>
        <p class="l-sec-lead">「家づくりっていくらかかるの？」<br class="sp-visible">という不安を払拭するため私たちは事前に価格をお出ししています。<br>標準仕様の素材から、自由にカスタマイズ!</p>
        <div class="price-table-wrapper">
        <table>
          <thead>
            <tr>
              <th>延床面積（㎡）</th>
              <th>坪数</th>
              <th>建物本体価格</th>
              <th>諸費用込・総額（税込）</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>82.65</td>
              <td>25</td>
              <td>13,988,200</td>
              <td>17,917,020</td>
            </tr>
            <tr>
              <td>85.96</td>
              <td>26</td>
              <td>14,478,200</td>
              <td>18,456,020</td>
            </tr>
            <tr>
              <td>89.26</td>
              <td>27</td>
              <td>14,968,200</td>
              <td>18,995,020</td>
            </tr>
            <tr>
              <td>92.57</td>
              <td>28</td>
              <td>15,458,200</td>
              <td>19,534,020</td>
            </tr>
            <tr>
              <td>95.87</td>
              <td>29</td>
              <td>15,948,200</td>
              <td>20,073,020</td>
            </tr>
            <tr>
              <td>99.18</td>
              <td>30</td>
              <td>16,438,200</td>
              <td>20,612,020</td>
            </tr>
            <tr>
              <td>102.49</td>
              <td>31</td>
              <td>16,928,200</td>
              <td>21,151,020</td>
            </tr>
            <tr>
              <td>105.79</td>
              <td>32</td>
              <td>17,418,200</td>
              <td>21,690,020</td>
            </tr>
            <tr>
              <td>109.10</td>
              <td>33</td>
              <td>17,908,200</td>
              <td>22,229,020</td>
            </tr>
            <tr>
              <td>112.40</td>
              <td>34</td>
              <td>18,398,200</td>
              <td>22,768,020</td>
            </tr>
            <tr>
              <td>115.71</td>
              <td>35</td>
              <td>18,888,200</td>
              <td>23,307,020</td>
            </tr>
            <tr>
              <td>119.02</td>
              <td>36</td>
              <td>19,378,200</td>
              <td>23,846,020</td>
            </tr>
            <tr>
              <td>122.32</td>
              <td>37</td>
              <td>19,868,200</td>
              <td>24,385,020</td>
            </tr>
            <tr>
              <td>125.63</td>
              <td>38</td>
              <td>20,358,200</td>
              <td>24,924,020</td>
            </tr>
            <tr>
              <td>128.93</td>
              <td>39</td>
              <td>20,848,200</td>
              <td>25,463,020</td>
            </tr>
            <tr>
              <td>132.24</td>
              <td>40</td>
              <td>21,338,200</td>
              <td>26,002,020</td>
            </tr>
          </tbody>
        </table>
        </div>
        <ul class="price-table-txt">
          <li>〈諸費用込・総額とは建物に関して殆ど追加のない直に住める価格です〉</li>
          <li>■諸費用込総額には「土地建物瑕疵保険・設計確認費・宅地内給排水工事・諸経費等」すべて含まれます。</li>
          <li>■延床面積（建築基準法面積）には、吹き抜け・バルコニー・ポーチ等含まれません。（別途見積もり）</li>
          <li>■土地代・外構費用・浄化槽設置・井戸掘削・地盤改良工事・整地・擁壁等 土地に関する項目別途</li>
        </ul>
      </section>

      <section id="lineup-siyou" class="l-sec l-sec-siyou c-spacer fadeIn_up u-navAdjust">
        <div class="title-wrapper">
          <h2>定額制で選び放題！標準仕様</h2>
          <p>金額表の価格内で、自由に標準仕様をカスタマイズ。<br class="sp-visible">自分の「好き」を選んでいくだけで、<br class="sp-visible">高性能住宅が手に入ります。<br>
          あなたのオリジナルデザインをつくっていきましょう。 <small>※一分別途料金必要になります。</small></p>
        </div>

        <section class="l-subsec">
          <h3 class="l-subsec-title">外装</h3>
          <div class="p-flexBox">
            <div class="p-flexBox-title-wrapper">
              <h4 class="p-flexBox-title">屋根</h4>
            </div>
            <div class="p-flexBox__conetnt">
              <ul class="listItem -row3">
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_01@2x.webp" alt="陶器⽡">
                  <p class="listItem__name">陶器⽡</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_02@2x.webp" alt="ファイバーグラスシングル">
                  <p class="listItem__name">ファイバーグラスシングル</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_03@2x.webp" alt="ガルバリウム鋼板">
                  <p class="listItem__name">ガルバリウム鋼板</p>
                </li>
              </ul>
            </div>
          </div><!-- /外装 -->

          <div class="p-flexBox">
            <div class="p-flexBox-title-wrapper">
              <h4 class="p-flexBox-title">外壁</h4>
            </div>
            <div class="p-flexBox__conetnt">
              <ul class="listItem -row3">
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_04@2x.webp" alt="サイディング16mm">
                  <p class="listItem__name">サイディング16mm</p>
                </li>
              </ul>
            </div>
          </div><!-- /外壁 -->

        </section><!-- /外装 -->

        <section class="l-subsec">
          <h3 class="l-subsec-title">内装</h3>

          <div class="p-flexBox">
            <div class="p-flexBox-title-wrapper">
              <h4 class="p-flexBox-title">床材</h4>
            </div>
            <div class="p-flexBox__conetnt">
              <ul class="listItem -row3">
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_05@2x.webp" alt="ネイトビーツ">
                  <p class="listItem__name">ネイトビーツ</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_06@2x.webp" alt="ブラッシュナット">
                  <p class="listItem__name">ブラッシュナット</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_07@2x.webp" alt="レッドパイン">
                  <p class="listItem__name">レッドパイン</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_08@2x.webp" alt="杉板">
                  <p class="listItem__name">杉板</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_09@2x.webp" alt="ウレタン床材">
                  <p class="listItem__name">ウレタン床材</p>
                </li>
              </ul>
            </div>
          </div><!-- /床材 -->

          <div class="p-flexBox">
            <div class="p-flexBox-title-wrapper">
              <h4 class="p-flexBox-title">壁・天井材</h4>
            </div>
            <div class="p-flexBox__conetnt">
              <ul class="listItem -row3">
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_10@2x.webp" alt="新琉球漆喰（沖縄珊瑚使⽤）">
                  <p class="listItem__name">新琉球漆喰<br class="sp-visible">（沖縄珊瑚使⽤）</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_11@2x.webp" alt="ヘルシーカラー（⾊を選べるミネラル系天然塗り壁材）">
                  <p class="listItem__name">ヘルシーカラー<br>（⾊を選べるミネラル系天然塗り壁材）</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_12@2x.webp" alt="節あり杉板">
                  <p class="listItem__name">節あり杉板</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_13@2x.webp" alt="杉板リブ加⼯">
                  <p class="listItem__name">杉板リブ加⼯</p>
                </li>
                <li class="listItem__item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_14@2x.webp" alt="⽣地クロス">
                  <p class="listItem__name">⽣地クロス</p>
                </li>
              </ul>
            </div>
          </div><!-- /壁・天井材 -->

        </section><!-- /内装 -->

        <section class="l-subsec">
          <h3 class="l-subsec-title">押⼊</h3>

          <div class="p-flexBox-wrapper">

            <div class="p-flexBox -row1">
              <div class="p-flexBox-title-wrapper">
                <h4 class="p-flexBox-title">床・棚板</h4>
              </div>
              <div class="p-flexBox__conetnt">
                <ul class="listItem -row1">
                  <li class="listItem__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_15@2x.webp" alt="無垢材">
                    <p class="listItem__name">無垢材</p>
                  </li>
                </ul>
              </div>
            </div><!-- /床・棚板 -->

            <div class="p-flexBox -row2">
              <div class="p-flexBox-title-wrapper">
                <h4 class="p-flexBox-title">壁・天井</h4>
              </div>
              <div class="p-flexBox__conetnt">
                <ul class="listItem -row2">
                  <li class="listItem__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_16@2x.webp" alt="⽣地クロス">
                    <p class="listItem__name">⽣地クロス</p>
                  </li>
                  <li class="listItem__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_17@2x.webp" alt="節あり杉板">
                    <p class="listItem__name">節あり杉板</p>
                  </li>
                </ul>
              </div>
            </div><!-- /壁・天井 -->
          </div>

        </section><!-- /押⼊ -->

        <section class="l-subsec">
          <h3 class="l-subsec-title">建具</h3>

          <div class="p-flexBox-wrapper">

            <div class="p-flexBox -row2">
              <div class="p-flexBox-title-wrapper">
                <h4 class="p-flexBox-title">室内建具</h4>
              </div>
              <div class="p-flexBox__conetnt">
                <ul class="listItem -row2">
                  <li class="listItem__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_18@2x.webp" alt="NODAビノイエ">
                    <p class="listItem__name">NODAビノイエ</p>
                  </li>
                  <li class="listItem__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_19@2x.webp" alt="DAIKENハピア">
                    <p class="listItem__name">DAIKENハピア</p>
                  </li>
                </ul>
              </div>
            </div><!-- /室内建具 -->

            <div class="p-flexBox -row1">
              <div class="p-flexBox-title-wrapper">
                <h4 class="p-flexBox-title">⽞関ドア</h4>
              </div>
              <div class="p-flexBox__conetnt">
                <ul class="listItem -row1">
                  <li class="listItem__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/siyou_20@2x.webp" alt="LIXILジエスタ">
                    <p class="listItem__name">LIXILジエスタ</p>
                  </li>
                </ul>
              </div>
            </div><!-- /⽞関ドア -->

          </div>

        </section><!-- /建具 -->

        <section class="l-subsec">
          <h3 class="l-subsec-title">サッシ・設備機器</h3>
          <ul class="c-list">
            <li>
              <dl>
                <dt>サッシ</dt>
                <dd>LIXILサーモスⅡ-H / LIXILシンフォニーウッディ</dd>
              </dl>
              <li>
                <dl>
                  <dt>システムキッチン</dt>
                  <dd>トクラス バリュープラン / LIXIL アレスタ</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>ユニットバス</dt>
                  <dd>トクラス バリュープラン / LIXIL リディア</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>洗⾯台</dt>
                  <dd>LIXIL ピアラ（W750 3⾯鏡） / アサヒ衛陶 アール（W750 1⾯鏡） / TOTO Vシリーズ</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>トイレ</dt>
                  <dd>LIXILアメージュZ / TOTO ZJシリーズ</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>給湯器</dt>
                  <dd>エコキュート（370L フルオート）</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>換気システム</dt>
                  <dd>第三種換気システム</dd>
                </dl>
              </li>
            </li>
          </ul>
        </section><!-- /サッシ・設備機器 -->

      </section><!-- /標準仕様 -->

      <section class="l-sec c-spacer fadeIn_up">
        <h2 id="lineup-spec" class="l-sec-title02 u-navAdjust">SPEC<span class="l-sec-title02__sub">性能</span></h2>
        <p class="l-sec-lead">安心の住宅性能が標準仕様。<br class="sp-visible">別途申請で、長期優良住宅も対応可能。</p>

        <section class="l-subsec l-subsec-spechouse">
          <h3 class="l-subsec-title">住宅性能</h3>
          <p class="txt"><span>長期優良住宅</span>対応可能 <br class="sp-visible">※別途申請費⽤が必要となります。</p>
        </section><!-- /住宅性能 -->

        <section class="l-subsec l-subsec-spechouse">
          <h3 class="l-subsec-title">構造</h3>
          <ul class="c-list">
            <li>
              <dl>
                <dt>基礎</dt>
                <dd>べた基礎</dd>
              </dl>
              <li>
                <dl>
                  <dt>⼟台</dt>
                  <dd>標準（3.5⼨⾓）</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>柱</dt>
                  <dd>標準（3.5⼨⾓）</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>床下地・剛床</dt>
                  <dd>24mm構造⽤合板</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>耐⼒壁</dt>
                  <dd>構造用合板貼</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>防蟻処理</dt>
                  <dd>基礎パッキン⼯法 / 防蟻散布</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>耐熱仕様</dt>
                  <dd>ハウスロンZERO</dd>
                </dl>
              </li>
            </li>
          </ul>
        </section><!-- /構造 -->

      </section><!-- /SPEC -->

      <!-- 平屋で暮らす -->
      <section class="l-sec lineup-ex-wrapper -hiraya fadeIn_up">
        <div class="lineup-ex-title-wrapper">
          <p class="lineup-ex-concept">Lapuanka&Pehmeaから、<br class="sp-visible">人気の平屋プランも登場!</p>
          <h2 class="lineup-ex-title">平屋で暮らす</h2>
        </div>
        <ul class="lineup-ex-slider c-slider">
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/hiraya_slide01_sp@2x.webp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/hiraya_slide01_pc@2x.webp" >
            </picture>
          </li>
        </ul>
        <div class="lineup-ex-comment">
          <div class="inner">
            <p>平屋のここがいい！</p>
            <ul>
              <li>ワンフロアで暮らしやすい動線</li>
              <li>⾃然と繋がる</li>
              <li>家族を⾝近に感じられる</li>
            </ul>
          </div>
        </div>
        <div class="lineup-ex-madoriplan">
          <div class="with-image-plan">
            <div class="image">
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/hiraya_madoriplan_sp@2x.webp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lineup/hiraya_madoriplan_pc@2x.webp" >
              </picture>
            </div>
            <div class="plan">
              <p class="plan-title">参考プラン</p>
              <table>
                <tr>
                  <th>建物種別</th>
                  <td>新築</td>
                </tr>
                <tr>
                  <th>施⼯内容</th>
                  <td>平屋</td>
                </tr>
                <tr>
                  <th>家族構成</th>
                  <td>夫婦＋お⼦様2⼈</td>
                </tr>
                <tr>
                  <th>間取り</th>
                  <td>2LDK</td>
                </tr>
                <tr>
                  <th>延べ床⾯積</th>
                  <td>22坪</td>
                </tr>
                <tr>
                  <th>敷地⾯積</th>
                  <td>35.5坪</td>
                </tr>
                <tr>
                  <th>本体価格</th>
                  <td>800万円〜</td>
                </tr>
              </table>
            </div>
          </div>
          <p class="txt">平屋は中と外がフラットにつながり、⾃然をそばに感じらるのが特徴です。<br>
          ウッドデッキで、BBQや読書を楽しんだりと、アウトドア家族におすすめ。<br>
          １階だけで⽣活ができ、家事も⼦育ても楽ちんなのはもちろん、⽼後も安⼼して過ごせます。</p>
        </div>
      </section>
      <!-- /平屋で暮らす -->

    </section>
  </div>

</div><!-- /#lineup  -->


<?php get_footer(); ?>