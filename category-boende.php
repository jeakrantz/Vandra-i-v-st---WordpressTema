<?php get_header(); ?>
<div class="hero-img">
    <div class="hero-text-container">
        <h1 class="hero-title">Boende</h1>
    </div>
    <picture>
    <img src='<?= get_template_directory_uri() ?>/images/stories-yLJvLbvfrbs-unsplash.jpg' alt=''>

    </picture>
</div>
<h1 class="page-title">Boende</h1>
<main>
    <div class="bold">
        <?php echo category_description(get_category_by_slug('boende')); ?>
    </div>
    <section>
        <h2>Stugor</h2>

        <?php echo category_description(get_category_by_slug('cabin')); ?>

        <div class="puff-container">
        <?php
        query_posts('category_name=cabin&posts_per_page=3');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                if (has_post_thumbnail()) {
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                } else {
                    $image = get_template_directory_uri() . "/images/christian-widell-vrT3Z9UKFEg-unsplash.jpg";
                }
        ?>
                <div class="puff-housing">
                    <img src="<?= $image ?>" alt="">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt() ?>
                    <button><a href="<?php the_permalink(); ?>">Boka</a></button>
                </div>
        <?php


            }
        }
        wp_reset_query();
        ?>
        </div>
    </section>
    <section>
        <h2>Camping</h2>

            <?php echo category_description(get_category_by_slug('camping')); ?>

            <div class="puff-container">
        <?php
        query_posts('category_name=camping&posts_per_page=3');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                if (has_post_thumbnail()) {
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                } else {
                    $image = get_template_directory_uri() . "/images/christian-widell-vrT3Z9UKFEg-unsplash.jpg";
                }
        ?>
                <div class="puff-housing">
                <img src="<?= $image ?>" alt="">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt() ?>
                    <button><a href="<?php the_permalink(); ?>">Boka</a></button>
                </div>
        <?php


            }
        }
        wp_reset_query();
        ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>