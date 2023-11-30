<?php get_header(); ?>

<main style="margin-top: 5em;">
    <h1>Sökresultat</h1>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

    ?>
            <article>
                <div class="text-container">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <button><a href="<?php the_permalink(); ?>">Gå till sidan</a></button>
                </div>
            </article>

            <?php


}
}
?>
</main>

<?php get_footer(); ?>