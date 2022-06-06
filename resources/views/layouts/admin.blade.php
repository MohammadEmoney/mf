<!DOCTYPE html>

<head>

    @include('layouts.admin_parts.head')

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layouts.admin_parts.header')
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	@include('layouts.admin_parts.nav')
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
    <div class="dashboard-content">

        <!-- Titlebar -->


        <!-- Notice -->
        {{-- notice --}}

        <!-- Content -->
        @yield('content')

        <!-- Copyrights -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 1398 لیستئو. تمامی حقوق محفوظ است.</div>
            </div>
        </div>

    </div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
@include('layouts.admin_parts.scripts')

</body>

</html>
