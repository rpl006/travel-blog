<?php  get_header();?>

    <section class="container content">
        <div class="row">
            <?php 
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            ?>
        </div>
    </section>


<?php  get_footer();?>