<?php get_header(); ?>
<div class="hero-img">
    <div class="hero-text-container">
        <h1 class="hero-title">Sevärdheter</h1>
    </div>
    <picture>
        <img src='<?= get_template_directory_uri() ?>/images/drahomir-posteby-mach-akB5GvkMTgE-unsplash.jpg' alt=''>
    </picture>
</div>
<h1 class="page-title">Sevärdheter</h1>
<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

    ?>

            <article>
            <div class="newspuff-img">
                <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('news-thumbnail');
            } else {
                echo "<img src='" . get_template_directory_uri() . "/images/christian-widell-vrT3Z9UKFEg-unsplash.jpg' alt=''>";
            }
            ?>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <p class="center"> <?php the_excerpt(); ?></p>
                        <button><a class="link" href="<?php the_permalink(); ?>">Läs mer ></a></button>
                    </div>
                </div>
            </article>



        <?php


        }
        ?>
        <div>
            <div class="pagelink center"><?php next_posts_link('Äldre >'); ?></div>
            <div class="pagelink center"><?php previous_posts_link('< Nyare'); ?></div>
        </div>
    <?php
    }
    ?>
</main>

    <?php get_footer(); ?>