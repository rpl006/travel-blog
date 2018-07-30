<?php  get_header();?>

    <section class="container content">
        <div class="row">
            <!--check for contact Page-->
            <?php 
                if (is_page( 'contact' )) { ?>
                    <div class="col-sm-8 col-sm-offset-2 contact-page">
                       <?php while (have_posts()) {
                        the_post();
                        the_content();
                        }
                        ?>
                    </div>
                <?php }
            ?>

            <?php 
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            ?>
            

        </div>
    </section>


<?php  get_footer();?>