<?php get_header(); ?>

<div id="single-news" class="contents">
<?php if (have_posts()) : while (have_posts()) :
  the_post();
  ?>
  <div class="l-container">

    <div class="single-news-content">
      <p class="single-news-date">
      <i class="fa-solid fa-calendar-days"></i><time datetime="<?php the_time('c');?>" itemprop="datePublished"><?php echo get_the_date('Y.m.d'); ?></time>
      </p>
      <h1 class="single-news-ttl"><?php the_title(); ?></h1>
      <div class="single-news-contents"><?php the_content(); ?></div>
    </div>


    <!-- pagenation -->
    <?php
      $prev_post = get_previous_post(); // 前の投稿を取得
      $next_post = get_next_post(); // 次のzw投稿を取得
      $prev_txt = get_the_title( $prev_post->ID );
      $next_txt = get_the_title( $next_post->ID );
    ?>
    <div class="c-pagenation-02">
      <ul class="<?php if (!$prev_post) echo 'first'; ?>">
        <?php if ($prev_post): ?>
          <li class="prev c-btn -arrow">
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">前へ</a>
          </li>
        <?php endif; ?>
        <li class="back c-btn">
          <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">一覧にもどる</a>
        </li>
        <?php if ($next_post): ?>
          <li class="next c-btn -arrow">
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">次へ</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
    <!-- /.pagenation -->

  </div><!-- /.l-container -->

<?php endwhile;
endif; ?>
</div><!-- /#single-construction -->
<?php get_footer();
