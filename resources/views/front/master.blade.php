@include('front.includes.assets.css')

<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('/') }}front-assets/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    @include('front.includes.header-top')

    <!-- nav bar -->
    <div class="navigation">

        @include('front.includes.menu')
    </div>
</header>

<!-- Search Form -->
@include('front.includes.search')
<!-- /navigation -->



@yield('body')


<!-- footer -->
@include('front.includes.footer')
<!-- /footer -->

@include('front.includes.assets.script')
