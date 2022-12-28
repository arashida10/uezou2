<?php
global $the_query;
if ($the_query->max_num_pages > 1) {
  echo '<div class="c-pagenation">';
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
?>