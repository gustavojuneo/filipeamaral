<?php get_header() ?>

    <main class="main-frontpage">
        <section 
            class="banner <?php if (is_admin_bar_showing()):?> admin-bar <?php endif; ?>"
        >
            <img 
                class="img-fluid" 
                src="<?php header_image(); ?>"
                alt="Banner do Site">
        </section>
        
        <?php 
            $args = array(
                'posts_per_page' => 4,
                'post__in' => get_option( 'sticky_posts' )
            );
            query_posts($args);
        ?>
            <section id="jobs-list">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article class="job">
                        <a 
                            href="<?php the_post_thumbnail_url(); ?>" 
                            data-lightbox="<?php the_title(); ?>"
                            data-title="<?php the_title(); ?>"
                        >
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </article>
                <?php endwhile; endif; ?>
            </section>
        <?php wp_reset_query(); ?>

        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'portfolio' ) ) ); ?>" class="see-gallery">Acesse o portfólio <i class="fas fa-images"></i></a>

        <section id="about">
            <div class="container">
                <div class="content">
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>

    <script>
        
    </script>

<?php get_footer() ?>