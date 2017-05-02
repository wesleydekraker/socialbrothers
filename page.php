<?php get_header(); ?>
    <section class="flex-item grow">
        <div class="flex-container">
            <main class="flex-item one-half main-content">
            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php echo style_title(get_the_title()); ?></h1>
                    <?php the_content(); ?>

                    <?php edit_post_link(); ?>
                </article>

            <?php endwhile; ?>
            </main>
            <?php get_sidebar(); ?>
        </div>
    </section>
<?php get_footer(); ?>
