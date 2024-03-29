<?php

get_header();
pageBanner([
  'title' => 'All Events',
  'subtitle' => 'See whats going on in our world'
]);
?>



  <div class="container container--narrow page-section">
    <?php
    while(have_posts()) {
      the_post();
      get_template_part('template-parts/content-event');
    }
    echo paginate_links();
    ?>
    <hr class="section-break">
    <p> <a href="<?php echo site_url('/past-events')?>">Looking for a recap of past events check out our archive of past events</a></p>
  </div>
<?php get_footer();
?>