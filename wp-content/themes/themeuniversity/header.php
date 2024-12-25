<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left">
        <?php
        $sitename = get_bloginfo('name');
        $fictional = explode(" ", $sitename);
        // Ensure there's more than one word
        if (count($fictional) > 1) {
          echo '<a href="/university"><strong>' . $fictional[0] . '</strong> ' . $fictional[1] . '</a>';
        } else {
          echo '<a href="#"><strong>' . $sitename . '</strong></a>';
        }
        ?>
      </h1>

      <!-- Search and Menu Icons -->
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>

      <!-- Main Navigation Menu -->
      <div class="site-header__menu group menu-container">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary_menu',
          'container'      => 'nav',
          'container_class'=> 'main-navigation',
        ));
        ?>
        
        <!-- Utility Links -->
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>

    <!-- Background Overlay -->
    <div class="overlay"></div>

    <!-- Mobile Menu Script -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const menuTrigger = document.querySelector('.site-header__menu-trigger');
        const body = document.querySelector('body');
        const menuContainer = document.querySelector('.menu-container');
        
        menuTrigger.addEventListener('click', function() {
          // Toggle scroll and menu active classes
          body.classList.toggle('no-scroll');
          menuContainer.classList.toggle('mobile-menu-active');
        });
      });
    </script>
  </header>
</body>

</html>
