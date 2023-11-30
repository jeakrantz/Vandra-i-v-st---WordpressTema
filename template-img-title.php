<?php
/* 
Template Name: Undersida med header-bild och titel.
*/
?>

<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

?>
        <?php if (has_post_thumbnail()) {
        ?>
            <div class="hero-img">
                <div class="hero-text-container">
                    <h1 class="hero-title"><?php the_title() ?></h1>
                </div>
                <picture>
                    <?php the_post_thumbnail('header-img') ?>
                </picture>
            </div>
            <h1 class="page-title"><?php the_title() ?></h1>
        <?php
        } 
        ?>
        <main>
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