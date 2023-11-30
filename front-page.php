<?php get_header(); ?>
<div class="hero-img">
    <div class="hero-text-container">
        <h1 class="hero-title"><?php the_title() ?></h1>
    </div>
    <picture>
        <img src=" <?= header_image(); ?>">
    </picture>
</div>
<h1 class="page-title"><?php the_title() ?></h1>
<aside>
    <a href="<?= get_home_url(); ?>/category/aktivitet/" class="puff-startsida">
        <img src="<?= get_template_directory_uri() ?>/images/canoe(1).png" alt="">
        <h2 class="center">Aktiviteter</h2>
    </a>
    <a href="<?= get_home_url(); ?>/category/sevardhet/" class="puff-startsida">
        <img src="<?= get_template_directory_uri() ?>/images/photography.png" alt="">
        <h2 class="center">Sevärdheter</h2>
    </a>
    <a href="<?= get_home_url(); ?>/category/boende/" class="puff-startsida">
        <img src="<?= get_template_directory_uri() ?>/images/cabin.png" alt="">
        <h2 class="center">Boende</h2>
    </a>
    <a href="<?= get_home_url(); ?>/om-sida/" class="puff-startsida">
        <img src="<?= get_template_directory_uri() ?>/images/information.png" alt="">
        <h2 class="center">Om oss</h2>
    </a>
</aside>
<main>

    <section>
        <h2>Sevärdheter</h2>
        <div class="galleri-sevardhet">
            <?php
            query_posts('category_name=front-page_sevardhet&posts_per_page=3');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    if (has_post_thumbnail()) {
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        $image = get_template_directory_uri() . "/images/christian-widell-vrT3Z9UKFEg-unsplash.jpg";
                    }
            ?>
                    <a href="<?php the_permalink(); ?>">
                        <div style="background-image: url('<?= $image ?>');">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </a>
            <?php


                }
            }
            wp_reset_query();
            ?>
        </div>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

        ?>
                <div>
                    <?php the_content(); ?></h2>
                </div>
        <?php


            }
        }
        ?>
    </section>
    <section>
        <?php
        if (is_active_sidebar('puff-front-page')) : ?>
            <div id="puff-front-page">
                <?php dynamic_sidebar('puff-front-page'); ?>
            </div>
        <?php endif; ?>
    </section>
    <section>
        <?php
        query_posts('category_name=front-page_big-text-container&posts_per_page=1');
        if (have_posts()) {
            while (have_posts()) {
                the_post();

        ?>
                <div class="puff-img">
                    <?php the_post_thumbnail('news-thumbnail'); ?>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php


            }
        }
        wp_reset_query();
        ?>
    </section>
    <section>
        <h2>Nyheter</h2>
        <?php
        query_posts('category_name=news&posts_per_page=1');
        if (have_posts()) {
            while (have_posts()) {
                the_post();

        ?>

                <article class="newest-news">
                    <?php the_post_thumbnail('news-thumbnail'); ?>
                    <div class="news-text">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <button><a class="link" href="<?php the_permalink(); ?>">Läs mer ></a></button>
                    </div>

                </article>
        <?php


            }
        }
        wp_reset_query();
        ?>
        <div class="news-start">

            <?php
            query_posts('category_name=news&posts_per_page=3&offset=1');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    if (has_post_thumbnail()) {
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        $image = get_template_directory_uri() . "/images/christian-widell-vrT3Z9UKFEg-unsplash.jpg";
                    }

            ?>


                    <article style="background-image: url('<?= $image ?>');">
                        <h3><?php the_title(); ?></h3>
                        <button><a class="link" href="<?php the_permalink(); ?>">Läs mer ></a></button>
                    </article>
            <?php


                }
            }
            wp_reset_query();
            ?>
        </div>

    </section>
</main>
<?php get_footer(); ?>