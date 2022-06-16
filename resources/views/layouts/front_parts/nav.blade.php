<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav pull-right">
                <li class="active"><a href="{{ route('front.home') }}">خانه</a></li>
                <li><a href="{{ route('front.products.index') }}">محصولات</a></li>
                {{-- <li><a href="#">بلاگ</a></li> --}}
                <li><a href="{{ route('front.about') }}">درباره ما</a></li>
                <li><a href="{{ route('front.contact') }}">تماس با ما</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
