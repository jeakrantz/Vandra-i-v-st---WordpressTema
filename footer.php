<footer>
    <nav>
        <ul id="foot-nav-left">
            <?php wp_nav_menu(array('theme_location' => 'foot-nav-left')) ?>
        </ul>
        <ul id="foot-nav-right">
            <?php wp_nav_menu(array('theme_location' => 'foot-nav-right')) ?>
        </ul>
    </nav>
    <div>
        <div>

            <?php
            if (is_active_sidebar('search-bar')) : ?>
                <div id="search-bar">
                    <?php dynamic_sidebar('search-bar'); ?>
                </div>
            <?php endif; ?>
        </div>
        <a class="bottomlogo" href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri() ?>/images/VVloggaWhite.png" alt=""></a>
    </div>
    <div>
        <?php
        if (is_active_sidebar('socialmedia')) : ?>
            <div id="socialmedia">
                <?php dynamic_sidebar('socialmedia'); ?>
            </div>
        <?php endif; ?>
    </div>
</footer>
<script src="<?= get_template_directory_uri() ?>/js/navbar.js"></script>
<?php wp_footer(); ?>
</body>

</html>