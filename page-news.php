<?php
/**
 * Template Name:お知らせ
 */

get_header(); ?>

<div id="news" class="contents">
  <div class="c-page-mv">
    <h1 class="c-page-mv__ttl">NEWS<span>お知らせ</span></h1>
  </div>

  <div class="l-container">
    <ul class="c-news-list">
      <li>
        <span class="c-news-list__date">2022/01/01</span>
        <span class="c-category">新着情報</span>
        <a href="#">お知らせタイトルが入ります。お知らせタイトルが入ります。</a>
      </li>
    </ul>

    <!-- pagenation -->
    <div class="c-pagenation">
      <ul class="page-numbers">
        <li><span aria-current="page" class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="https://tiarise.com/blog/page/2/">2</a></li>
        <li><span class="page-numbers dots">…</span></li>
        <li><a class="page-numbers" href="https://tiarise.com/blog/page/13/">13</a></li>
      </ul>
    </div>

  </div>

</div><!-- /#news -->


<?php get_footer(); ?>