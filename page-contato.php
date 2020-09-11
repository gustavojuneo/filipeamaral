<?php get_header() ?>

    <!-- MAIN CONTENT -->
    <main class="main-contact">
      <div class="container">
        <h1>Entre em contato comigo!</h1>
        <div class="content">
        <?php 
          the_post();
          the_content(); 
        ?>
        </div>
      </div>
    </main>

<?php get_footer() ?>