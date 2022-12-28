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
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'paged' => $paged
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        $count = $the_query->post_count;
      ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
        // カテゴリー情報を取得
        $cat = get_the_category();
        $cat = $cat[0];
        $cat_name = $cat->cat_name;
        ?>
          <li itemscope>
              <span class="c-news-list__date"><time datetime="<?php the_time('c');?>" itemprop="datePublished"><?php echo get_the_date('Y/m/d'); ?></time></span>
              <span class="c-category"><?php echo $cat_name; ?></span>
              <a href="<?php the_permalink(); ?>" itemprop="link" href="http://carava.co/"><?php the_title(); ?></a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>

    <?php
    // pagenation
    if ($the_query->max_num_pages > 1) {
      echo '<div class="c-pagenation">';
      $p_bace = preg_replace('/\?.*/', '/', get_pagenum_link(1)).'%_%';
      echo paginate_links(array(
        'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'mid_size' => 1,
            'total' => $the_query->max_num_pages,
            'type' => 'list',
            'prev_text' => '',
            'next_text' => '',
      ));
      echo '</div>';
    }

    wp_reset_postdata();
    ?>

  </div>

</div><!-- /#news -->


<?php get_footer(); ?>