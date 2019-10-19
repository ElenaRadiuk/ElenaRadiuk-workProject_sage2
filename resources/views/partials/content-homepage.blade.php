{{--@php(the_content())--}}

<section class="our-promise">
    <div class="container">
        {{--@if (get_field('promise_title'))--}}
            {{--{!! get_field('promise_title') !!}--}}
        {{--@endif--}}
        @if (CFS()->get( 'promise_title_2' ))
            <div class="our-promise_bg-text">
            {{ CFS()->get( 'promise_bigtext' ) }}
            </div>
            <h4 class="our-promise_title">
                <span>{{ CFS()->get( 'promise_title_1' ) }}</span>
                {{ CFS()->get( 'promise_title_2' ) }}
            </h4>
            <div class="our-promise_text">
                {{ CFS()->get( 'promise_text' ) }}
            </div>
        @endif
{{--            @php(echo CFS()->get( 'promise_title' ))--}}
            {{--@php--}}
                {{--echo CFS()->get( 'promise_title' )--}}
            {{--@endphp--}}

    </div>
</section>

<section class="work-width">
    <div class="container">
        @if (CFS()->get( 'promise_title_2' ))
            <div class="work-width_bg-text">
                {{ CFS()->get( 'workwith_bigtext' ) }}
            </div>
            <h3 class="work-width_title">
                {{ CFS()->get( 'workwith_title' ) }}
            </h3>
            <div class="work-width_images">
                @php($images = CFS()->get( 'workwith_images' ))
                @foreach ($images as $img)
                    <a href="#">
                    {!! wp_get_attachment_image( $img['workwith_img'], 'full') !!}
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</section>