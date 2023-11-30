<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

?>
        <main>
            <section>
                <div class="text-container">
                    <p>Något verkar ha blivit fel. Denna sidan existerar inte. Testa igen.</p>
                </div>
            </section>

        </main>
<?php


    }
}
?>

<?php get_footer(); ?>