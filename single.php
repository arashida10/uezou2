<?php if(is_singular('works')): ?>
  <?php get_template_part('single', 'works'); ?>
<?php else: ?>
  <?php get_template_part('single', 'normal'); ?>
<?php endif; ?>