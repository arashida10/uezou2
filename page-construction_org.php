<?php
/**
 * Template Name:施工事例
 */

get_header(); ?>

<div id="construction" class="contents">
  <div class="c-page-mv">
    <h1 class="c-page-mv__ttl">CONSTRUCTION<span>施工事例</span></h1>
  </div>

  <div class="l-container">

    <?php
    // カテゴリー情報を取得
    $taxonomy_name = 'cpt_construction_cate';
    $taxonomy_object = get_terms($taxonomy_name);
    ?>

    <ul class="c-tab">
      <li><a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">すべて</a></li>
      <?php
        foreach ( $taxonomy_object as $term ) {
          echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
        }
      ?>
    </ul>

    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array(
          'post_type' => 'cpt_construction',
          'posts_per_page' => 1,
          'paged' => $paged
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
    ?>

    <ul class="c-listItem -row4">

      <?php while ($the_query->have_posts()) :
      $the_query->the_post();
      $count = $the_query->post_count;

      if($taxonomy_object) {
        $terms = get_the_terms(get_the_ID(), $taxonomy_name);
      }
      ?>
        <li class="c-post c-listItem__item">
          <a href="<?php the_permalink(); ?>" class="img-zoom">
            <div class="img-box">
              <img src="http://localhost:8888/wp_uezou/wp-content/themes/uezou2022/assets/images/construction/mv_pc.jpg" alt="">
              <?php
                if($terms || is_wp_error($terms)) {
                  echo '<span class="c-category">';
                  foreach($terms as $term) {
                    echo $term->name;
                    // 1件目のみ
                    break;
                  }
                  echo '</span>';
                }
              ?>
            </div>
            <p class="c-post__ttl"><?php the_title(); ?></p>
            <?php
            if ( get_field('cpt_construction_day') ) : ?>
              <p class="c-post__date"><?php echo get_field('cpt_construction_day'); ?></p>
            <?php endif; ?>
          </a>
        </li>
      <?php endwhile; ?>
      </ul>
    <?php endif; ?>


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
            'prev_next' => false,
      ));
      echo '</div>';
    }

    wp_reset_postdata();
    ?>

  </div>

</div><!-- /#construction -->


<?php get_footer(); ?>