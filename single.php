<?php if(is_singular('construction')): ?>
  <?php get_template_part('single', 'construction'); ?>
<?php else: ?>
  <?php get_template_part('single', 'news'); ?>
<?php endif; ?>