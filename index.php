<?php get_header(); ?>
    <section class="flex-item grow">
        <div class="flex-container">
            <main class="flex-item one-half main-content">
                <h1><?php echo style_title('Laatste Berichten'); ?></h1>

            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <?php the_excerpt(); ?>

                    <?php edit_post_link(); ?>

                </article>
            <?php endwhile; ?>

                <div class="pagination">
                    <?php echo paginate_links(array(
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;'
                    )); ?>
                </div>
            </main>
            <?php get_sidebar(); ?>
        </div>
    </section>
<?php get_footer(); ?>
