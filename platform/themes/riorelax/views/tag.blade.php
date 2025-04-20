@php
    Theme::set('pageTitle', $tag->name)
@endphp

<section class="inner-blog pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @include(Theme::getThemeNamespace('views.loop'))
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar-widget">
                    {!! dynamic_sidebar('blog_sidebar') !!}
                </aside>
            </div>
        </div>
    </div>
</section>
