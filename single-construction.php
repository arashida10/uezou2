<?php get_header(); ?>

<div id="single-construction" class="contents">
<?php if (have_posts()) : while (have_posts()) :
  the_post();
  // カテゴリー情報を取得
  $taxonomy_name = 'construction_cat';
  $taxonomy_object = get_taxonomy($taxonomy_name);
  if($taxonomy_object) {
    $terms = get_the_terms(get_the_ID(), $taxonomy_name);
  }
  ?>
  <div class="l-container">

    <?php
    // スライダー
      $images = get_field('cpt_construction_images');
      if ($images) : ?>
      <div class="construction-slider">
        <?php foreach ($images as $key => $image) :
          if ($image["url"]) :
          ?>
          <div class="construction-slider__image"><img src="<?php echo $image["url"]; ?>" ></div>
        <?php
          endif;
        endforeach; ?>
      </div>
      <div class="construction-slider-thumb">
        <?php foreach ($images as $key => $image) :
          if ($image["url"]) :
          ?>
          <div class="construction-slider-thumb__image"><img src="<?php echo $image["url"]; ?>" ></div>
        <?php
          endif;
        endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="construction-content">
      <div class="construction-content__left">
        <h1><?php the_title(); ?></h1>
        <?php
          if($terms || is_wp_error($terms)) {
            echo '<p class="c-category">';
            foreach($terms as $term) {
              echo $term->name;
              // 1件目のみ
              break;
            }
            echo '</p>';
          }
        ?>
      </div>
      <div class="construction-content__right">
        <?php if ( get_field('cpt_construction_day') ):
          $construction_day = get_field_object('cpt_construction_day');
          ?>
          <dl class="construction-content__line">
            <dt><?php echo $construction_day['label']; ?></dt>
            <dd><?php echo $construction_day['value']; ?></dd>
          </dl>
        <?php endif; ?>
      </div>
    </div>

    <?php
    $cpt_construction_before_after = get_field('cpt_construction_before_after');
    if ($cpt_construction_before_after["before_image"]["url"] && $cpt_construction_before_after["after_image"]["url"]) :
    ?>
    <div class="c-before-after">
      <div class="c-before-after-box">
        <div class="c-before">
          <p class="c-before-after__ttl">BEFORE<span>施工前</span></p>
          <img src="<?php echo $cpt_construction_before_after["before_image"]["url"]; ?>" alt="施工前">
        </div>
        <div class="c-after">
          <p class="c-before-after__ttl">AFTER<span>施工後</span></p>
          <img src="<?php echo $cpt_construction_before_after["after_image"]["url"]; ?>" alt="施工後">
        </div>
      </div>
    </div>

    <?php endif; ?>

    <!-- pagenation -->
    <?php
      $prev_post = get_previous_post(); // 前の投稿を取得
      $next_post = get_next_post(); // 次の投稿を取得
      $prev_txt = get_the_title( $prev_post->ID );
      $next_txt = get_the_title( $next_post->ID );
    ?>
    <div class="c-pagenation-02">
      <ul>
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
