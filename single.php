<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

?>

        <?php if (has_post_thumbnail()) {
        ?>
            <div class="hero-img">
                <picture>
                    <?php the_post_thumbnail('header-img') ?>
                </picture>
            </div>
            <main>
        <?php
            } else {
                ?>
                <main style="margin-top: 5em;">
                <?php
            }

        ?>


            <h1><?php the_title() ?></h1>

            <section>
                <?php
                if (in_category('news')) {
                    ?>
                    <p class="bold center">Publicerad: <?php the_date(); ?></p>
                    <?php
                }
                ?>

                <div class="text-container">
                    <p><?php the_content(); ?></p>
                </div>

            </section>

    <?php


    }
}
    ?>
    </section>

        </main>

        <?php get_footer(); ?>