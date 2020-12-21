        <footer>
            <div class="custom-menu-in-footer">
                <?php wp_nav_menu($args);?>
            </div>

            <div id="social-media-sidebar" class="secondary">
                <div id="social-media-sidebar-div">
                    <?php
                        if(is_active_sidebar('social-media-sidebar')){
                            dynamic_sidebar('social-media-sidebar');
                        }
                    ?>
                </div>
            </div>

            <div class="copyright-info">
                <p>
                    <?php  bloginfo('name')?> - &copy; <?php echo date("Y");?>
                </p>
            </div>
        </footer>

        <?php 
            /* Always have wp_footer() just before the closing </body>
            * tag of your theme, or you will break many plugins, which
            * generally use this hook to reference JavaScript files.
            */
            wp_footer()
        ?> 
    </body>
</html>
