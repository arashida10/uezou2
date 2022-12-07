<?php get_header(); ?>

<div id="single-normal">
<?php if (have_posts()) : while (have_posts()) :
  the_post();
  $cat = get_the_category();
  $cat = $cat[0];
  $cat_name = $cat->cat_name;
  $cat_slug = $cat->slug;
  ?>
  <div class="single-content l-container">
    <div class="c-post">
      <div class="c-post__meta">
        <span class="c-category"><?php echo $cat_name; ?></span>
        <span class="c-post__meta-date"><?php the_date('Y年m月d日'); ?></span>
      </div>
      <h1 class="c-post__title"><?php the_title(); ?></h1>
    </div><!-- /.c-post -->
    <div class="main-content-wapper">
      <?php the_content(); ?>
    </div>
    <div class="c-pagenation">
      <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">＜ 一覧へ</a>
    </div>

    <!-- イベント記事の場合はフォームの表示 -->
    <?php if ($cat_slug === 'event'): ?>
      <section class="l-sec l-sec-form fadeIn_up">
        <h2 id="contact-form" class="l-sec-title02">⾒学会の<br class="sp-visible">ご予約はこちら</h2>
        <p class="l-sec-lead">⾒学会・イベントへの予約をご希望の⽅は、下記フォームからご予約ください。</p>
        <?php echo do_shortcode('[contact-form-7 id="105" title="⾒学会のご予約はこちら"]'); ?>
      </section><!-- /l-sec-form -->
    <?php endif; ?>
  </div><!-- /.l-container -->

  <div class="p-post-reco">
    <div class="l-container">
      <div class="p-flexBox">
        <div class="p-flexBox-title-wrapper">
          <h2 class="p-flexBox-title">よく読まれている記事</h2>
        </div>
        <div class="p-flexBox__conetnt">
          <ul class="listItem -row3">
          <?php
            // views post metaで記事のPV情報を取得する
            setPostViews(get_the_ID());
            $args = array(
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 3,
                'post_type' => 'post',
            );
            // WP_Queryによるループ
            $query = new WP_Query($args);
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
                        <span class="c-post__meta-date"><?php the_time('Y年m月d日') ?></time></span>
                      </a>
                    </div>
                  </li>
            <?php
            endwhile;
            endif;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
      </div>
    </div><!-- /.l-container -->
  </div>
<?php endwhile;
endif; ?>
</div><!-- /#single-normal -->
<?php get_footer();
