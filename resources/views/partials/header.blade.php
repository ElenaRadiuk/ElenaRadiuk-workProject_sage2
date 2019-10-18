<header>
    <div class="container">
      <div class="header">
          {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
          {{--<a class="brand" href="{{ home_url('/') }}">{{ the_custom_logo( $blog_id ) }}</a>--}}
          <div class="header-logo">
            @php(the_custom_logo( $blog_id ))
          </div>
          <nav class="header-nav-primary">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
    </div>
  </div>
</header>
