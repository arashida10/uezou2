<?php
/**
 * Template Name:ブログ
 */

get_header(); ?>

<div id="blog">
  <div class="c-page-mv-wrapper">
    <div class="p-flexBox">
      <div class="p-flexBox-title-wrapper">
        <h1 class="p-flexBox-title">BLOG<span class="p-flexBox-title__sub">ブログ</span></h1>
      </div>
      <div class="p-flexBox__conetnt">
        <div class="c-page-mv">
          <div class="c-page-mv-img"></div>
        </div>
      </div>
    </div>
  </div>

  <ul class="c-pageInLink -type02">
    <?php
      $categories = get_categories("hide_empty=0");
      foreach($categories as $category) {
      echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
      }
    ?>
  </ul>

  <div class="l-container">
    <div class="blog-container listItem fadeIn_up">
      <div class="blog-container-left">
        <ul class="blog-list listItem -row3">
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'posts_per_page' => 12, // 表示する投稿数
              'orderby' => 'date', // 日付で並び替え
              'order' => 'DESC', // 降順 or 昇順
              'post_type' => 'post',
              'paged' => $paged
            );
            // WP_Queryによるループ
            $query = new WP_Query($args);
            $count = $query->post_count;
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
                    $cat = get_the_category();
                    $cat = $cat[0];
                    $cat_name = $cat->cat_name;
                    $post_count = $the_query->post_count;
                ?>
                  <li class="listItem__item">
                    <div class="c-post">
                      <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                          <div class="c-post__thumb">
                            <?php the_post_thumbnail('medium'); ?>
                          </div>
                        <?php endif; ?>
                        <div class="c-post__meta">
                          <span class="c-category"><?php echo $cat_name; ?></span>
                        </div>
                        <p class="c-post__title"><?php the_title();?></p>
                        <span class="c-post__meta-date"><?php the_time('Y年m月d日') ?></span>
                      </a>
                    </div>
                  </li>
            <?php
            endwhile;
            endif;
          ?>
        </ul>
        <?php
        // pagenation
        if ($count == 12) {
          echo '<div class="c-pagenation">';
          $p_bace = preg_replace('/\?.*/', '/', get_pagenum_link(1)).'%_%';
          echo paginate_links(array(
            'format' => 'page/%#%/',
                'current' => max(1, $paged),
                'mid_size' => 1,
                'total' => $query->max_num_pages,
                'type' => 'list',
                'prev_text' => '',
                'next_text' => '',
          ));
          echo '</div>';
        }

        wp_reset_postdata();
        ?>
      </div>

      <div class="blog-container-right">
        <?php get_template_part('sidebar', 'post'); ?>
      </div>
    </div>

  </div>

</div><!-- /#blog -->


<?php get_footer(); ?>