<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        if (has_post_thumbnail()) {
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
                <div class="text-container">
                    <p><?php the_content(); ?></p>
                </div>
            </section>

        </main>
<?php


    }
}
?>

<?php get_footer(); ?>