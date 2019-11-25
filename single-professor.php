<?php
get_header();
    while(have_posts()) {
        the_post();?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <p style="text-transform: uppercase;">Dont forget to replace this later</p>
            </div>
            </div>  
        </div>
        <div class="container container--narrow page-section">
            <div class="generic-content">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('professor');?>"><i class="fa fa-home" aria-hidden="true"></i>Profesors Home</a> <span class="metabox__main"><?php echo get_field('professor_subject');?> </span></p>
            </div>               
                <?php the_content();?>
            </div>
        </div>    
    <?php }
get_footer();    
?>