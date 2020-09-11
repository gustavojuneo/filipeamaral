<?php get_header() ?>

    <!-- MAIN CONTENT -->
    <main class="main-404">
        <div class="container">
          <div class="content">
            <h1><?php wp_title('') ?></h1>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/broken-camera.png" alt="Imagem de Câmera quebrada">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'inicio' ) ) ); ?>">
              <i class="fas fa-arrow-left"></i>
              Voltar para a Página Inicial
            </a>
          </div>
        </div>
    </main>

<?php get_footer() ?>