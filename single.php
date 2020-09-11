<?php get_header() ?>

    <!-- MAIN CONTENT -->
    <main class="main-single">

        <div class="container">
          <div class="content">
            <?php 
              if(have_posts() ) :

                while(have_posts()) : the_post();
            ?>

            <section class="job">
              <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
              <h3><?php the_title(); ?> - <?php the_date(); ?></h3>

              <div class="job-content">
                <?php the_content(); ?>
              </div>
            </section>

            <?php 
              endwhile; endif;
            ?>
          </div>
        </div>
    </main>

<?php get_footer() ?>