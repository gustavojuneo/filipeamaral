<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo('name'); ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170605319-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-170605319-1');
    </script>

    <?php wp_head( ); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <div class="container default-navbar">
        <div class="content">
          <div class="logo-content">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'inicio' ) ) ); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo Filipe Amaral">
            </a>
          </div>

          <nav class="navbar">
            <ul>
              <?php 
                wp_nav_menu( 
                  array( 
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                  ) 
                ); 
              ?>
              <li>
                <a href="https://www.instagram.com/filipeamaralph/" target="_blank" class="social-link">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      
      <input type="checkbox" id="check-menustate">
      <nav class="mobile-navbar" >
          <div class="navbar">
            <div class="logo-content">
              <a href="/">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
              </a>
            </div>
            
            <button id="toggle-mobile">
              <div class="toggle">
                <label for="check-menustate">
                  <div></div>
                  <div></div>
                  <div></div>
                </label>
              </div>
            </button>
          </div>

          <ul>
            <?php 
              wp_nav_menu( 
                array( 
                  'theme_location' => 'main_menu',
                  'container' => false,
                  'items_wrap' => '%3$s'
                ) 
              ); 
            ?>
            <li>
              <a href="https://www.instagram.com/filipeamaralph/" class="social-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
      </nav>
    </header>
