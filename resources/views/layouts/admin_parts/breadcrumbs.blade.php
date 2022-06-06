<div id="titlebar">
    <div class="row">
        <div class="col-md-12">
            {{-- <h2>سلام، جعفر</h2> --}}
            @isset($route)
                افزودن <a href="{{ $route }}"><span class="im im-icon-Add"></span></a>
            @endisset
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="{{ route('dashboard') }}">صفحه اصلی</a></li>
                    <li>داشبورد</li>
                </ul>
            </nav>
        </div>
    </div>
</div>
