<?php  get_header();?>

<h2 class="text-center">
    Latest entries
</h2>
<section class="container content">
    <div class="row">
        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => '6'
        ));
        while($homepagePosts->have_posts()){
            $homepagePosts->the_post();?>
            <div class="col-xs-12 col-md-6 col-lg-4 entry ">
                <?php the_post_thumbnail( 'homePagePost', array(
                    'class' => 'img-responsive'
                )); ?>
                <div class="entry-content">
                    <h3><?php the_title() ?></h3>
                    <p>
                        Published on:<span> <?php the_time(get_option('date_format')); ?></span>
                    </p>
                    <p>
                        By:<span> <?php the_author(); ?></span>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
                </div>
                

            </div>

            
        <?php } wp_reset_postdata();
        ?>
    </div>
</section>


<?php  get_footer();?>