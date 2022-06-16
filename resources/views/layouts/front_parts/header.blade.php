<header>
    <!-- TOP HEADER -->
    <div id="top-header"  dir="rtl">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="tel:+989381133408"><i class="fa fa-phone"></i> <span dir="ltr">+98 938 1133 408</span></a></li>
                <li><a href="mailto:mohammadimanikiasaraei@gmail.com?subject=Customer"><i class="fa fa-envelope-o"></i> mohammadimanikiasaraei@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> البرز - کرج - المهدی</a></li>
            </ul>
            <ul class="header-links pull-right">
                {{-- <li><a href="#"><i class="fa fa-telegram"></i> USD</a></li>
                <li><a href="#"><i class="fa fa-instagram"></i> My Account</a></li> --}}
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{ route('front.home') }}" class="logo">
                            <img src="{{ asset('images/img/logo.png') }}" alt="گالری باران">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6 pull-right">
                    <div class="header-search text-right">
                        <form>
                            {{-- <select class="input-select">
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select> --}}
                            <input class="input" placeholder="{{ __('What are you looking for?')}}">
                            <button class="search-btn">{{ __('Search') }}</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->


            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
