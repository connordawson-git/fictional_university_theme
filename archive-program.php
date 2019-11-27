<?php

get_header();
pageBanner([
  'title' => 'All Programs',
  'subtitle' => 'List of our programs'
]);
?>

  <div class="container container--narrow page-section">
    <ul class="link-list min-list">
    <?php
    while(have_posts()) {
      the_post();
      ?>
      <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
    <?php }
    echo paginate_links();
    ?>
    </ul>
    <hr class="section-break">
  </div>
<?php get_footer();
?>