<?php  
/*
* Template Name: Page With Sidebar
*/
get_header(); ?>

    <section class="container content">
        <div class="row">
            <?php 
                while (have_posts()) {
                    the_post();?>
                    
                    <div class="col-sm-8 content-page">
                        <?php the_content(); ?>
                    </div>

                <?php }
            ?>

            <div class="col-sm-4 content-page">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>


<?php  get_footer();?>