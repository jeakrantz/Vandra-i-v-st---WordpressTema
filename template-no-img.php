<?php 
/* 
Template Name: Undersida utan header-bild.
*/
?>

<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

?>
        <main style="margin-top: 5em;">
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