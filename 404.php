<?php get_header(); ?>
        <section class="flex-item grow">
            <div class="flex-container">
                <main class="flex-item one-half main-content">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1>Pagina niet gevonden</h1>
                        <h2>
                            <a href="<?php echo home_url(); ?>">Terug naar home?</a>
                        </h2>
                    </article>
                </main>
                <?php get_sidebar(); ?>
            </div>
        </section>
<?php get_footer(); ?>
