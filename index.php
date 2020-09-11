<?php get_header() ?>

    <!-- MAIN CONTENT -->
    <main class="main-jobs">
        <h1><?php wp_title(''); ?></h1>

        <section class="jobs">
            
            <ul id="filters">
              <li><span class="filter active" data-filter=".all">Todos</span></li>
              <li><span class="filter" data-filter=".casal">Casal</span></li>
              <li><span class="filter" data-filter=".masculino">Masculino</span></li>
              <li><span class="filter" data-filter=".feminino">Feminino</span></li>
            </ul>

            <div id="jobs-list">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article class="job all <?php foreach((get_the_category()) as $category) {
                        echo $category->slug . ' ';} ?>" data-cat="<?php foreach((get_the_category()) as $category) {
                        echo $category->slug . ' ';} ?>">
                        <a 
                            href="<?php the_post_thumbnail_url(); ?>" 
                            data-lightbox="<?php the_title(); ?>"
                            data-title="<?php the_title(); ?>"
                        >
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </article>
                <?php endwhile; else: ?>

                <p>There's nothing yet to be displayed...</p>

                <?php endif; ?>
            </div>
        </section>
    </main>

<?php get_footer() ?>