<header>
    <div class="container">
      <div class="header">
          
          
          <div class="header-logo">
            <?php (the_custom_logo( $blog_id )); ?>
          </div>
          <nav class="header-nav-primary">
            <?php if(has_nav_menu('primary_navigation')): ?>
              <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

            <?php endif; ?>
          </nav>
    </div>
  </div>
</header>
