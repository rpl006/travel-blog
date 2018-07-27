
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <?php dynamic_sidebar('footer_widget')?>
                        
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Follow Us</h3>
                <?php
                    wp_nav_menu( array(
                       'theme_location' => 'socialMenu',
                       'container'=>'div',
                       'container_id'=> 'menu-social',
                       'container_class'=> 'menu',
                       'menu_id'=>'social',
                       'menu_class' => 'menu-items' ,
                       'depth' => 1,
                       'link_before'=>'<span class="sr-only">',
                       'link_after'=> '</span>',
                       'fallback_cb' => '',
                       'items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                ?>
            </div>
        </div>
    </div>
    <p class="text-center site-info">
        The Travel Blog <br>
        <a href="mailto: ram.lamichhane@aol.com">© Ram Lamichhane <?php echo date('Y');?></a>
    </p>

</footer>
<?php wp_footer(); ?>
</body>
</html>