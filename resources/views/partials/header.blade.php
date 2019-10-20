<header>
    <div class="container-sage">
      <div class="header">
          {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
          {{--<a class="brand" href="{{ home_url('/') }}">{{ the_custom_logo( $blog_id ) }}</a>--}}
          <div class="header-logo">
            @php(the_custom_logo( $blog_id ))
          </div>
          <a id="hamburger-icon" href="#" title="Menu">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </a>
          <nav class="header-nav-primary">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
    </div>
  </div>
</header>
