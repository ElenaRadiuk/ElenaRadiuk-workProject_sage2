{{--@php(the_content())--}}

<section class="ourPromise">
    <div class="container">
        @if (get_field('promise_title'))
            {!! get_field('promise_title') !!}
        @endif
    </div>
</section>