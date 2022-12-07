<?php

get_header(); ?>

<div id="works">
  <div class="c-page-mv-wrapper">
    <div class="p-flexBox">
      <div class="p-flexBox-title-wrapper">
        <h1 class="p-flexBox-title">WORKS<span class="p-flexBox-title__sub">施工事例</span></h1>
      </div>
      <div class="p-flexBox__conetnt">
        <div class="c-page-mv">
          <div class="c-page-mv-img"></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $terms = get_terms('works_categories','hide_empty=0');
  $tags = get_terms('works_tags','hide_empty=0');

  $term_slugs = [];
  foreach ($terms as $term) {
    array_push($term_slugs,$term->slug);
  }
  if(isset($_GET['category'])) {
    $term_slugs = [];
    array_push($term_slugs,$_GET['category']);
  }

  $tag_slugs = [];
  foreach ($tags as $tag) {
    array_push($tag_slugs,$tag->slug);
  }
  if(isset($_GET['tag'])) {
    $tag_slugs = [];
    array_push($tag_slugs,$_GET['tag']);
  }
  ?>

  <ul class="c-pageInLink -type02">
    <?php foreach ( $terms as $term ) : ?>
        <li <?php if( $_GET['category'] == urldecode($term->slug)) { echo 'class="is-active"'; }?>><a href="<?php echo esc_url( home_url( '/works/?category=' . $term->slug ) ); ?>"><?php echo $term->name; ?></a></li>
    <?php endforeach; ?>
  </ul>

  <ul class="listItem category-list">
    <?php foreach ( $tags as $tag ) : ?>
        <li><a class="c-category" href="<?php echo esc_url( home_url( '/works/?tag=' . $tag->slug ) ); ?>"><?php echo $tag->name; ?></a></li>
    <?php endforeach; ?>
  </ul>

  <div class="l-container">
    <ul class="works-list listItem -row2 fadeIn_up">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'posts_per_page' => 10, // 表示する投稿数
          'orderby' => 'date', // 日付で並び替え
          'order' => 'DESC', // 降順 or 昇順
          'post_type' => 'work',
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'works_categories',
              'terms' => $term_slugs,
              'field' => 'slug'
            ),
            array(
              'taxonomy' => 'works_tags',
              'terms' => $tag_slugs,
              'field' => 'slug'
            ),
          )
        );
        // WP_Queryによるループ
        $query = new WP_Query($args);
        $count = $query->post_count;
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
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
                    <?php
                      if ($terms = get_the_terms(get_the_ID(), 'works_categories')) {
                        foreach ( $terms as $term ) {
                          echo ('<span class="c-category">');
                          echo esc_html($term->name);
                          echo ('</span>');
                        }
                      }
                    ?>
                    <?php
                      if ($terms = get_the_terms(get_the_ID(), 'works_tags')) {
                        foreach ( $terms as $term ) {
                          echo ('<span class="c-category">');
                          echo esc_html($term->name);
                          echo ('</span>');
                        }
                      }
                    ?>
                    </div>
                    <p class="c-post__title"><?php the_title();?></p>
                    <span class="c-post__meta-target"><?php echo get_field('building-name') ?></span>
                  </a>
                </div>
              </li>
        <?php endwhile; ?>
        <?php else: ?>
          <li>投稿がありません</li>
        <?php endif;
      ?>
    </ul>

    <?php
        // pagenation
        if ($count == 10) {
          echo '<div class="c-pagenation">';
          $p_bace = preg_replace('/\?.*/', '/', get_pagenum_link(1)).'%_%';
          echo paginate_links(array(
            'format' => 'page/%#%/',
                'current' => max(1, $paged),
                'mid_size' => 1,
                'total' => $query->max_num_pages,
                'type' => 'list',
                'prev_text' => '< PREV',
                'next_text' => 'NEXT >',
          ));
          echo '</div>';
        }
        wp_reset_postdata();
        ?>

  </div>

</div><!-- /#works -->


<?php get_footer(); ?>