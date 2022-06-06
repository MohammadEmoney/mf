<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
@include('layouts.admin_parts.head')

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Content
================================================== -->

<!-- Coming Soon Page -->
<div class="coming-soon-page" style="background-image: url(images/main-search-background-01.jpg)">
	<div class="container">
		<!-- Search -->
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<img src="{{ asset('admin/images/logo2.png') }}" alt="">

				<h3>به بخش ادمین گالری باران خوش آمدید!</h3>

				<!-- Countdown -->
                @yield('content')
				<!-- Countdown / End -->

				<br>
			</div>
		</div>
		<!-- Search Section / End -->
	</div>
</div>
<!-- Coming Soon Page / End -->

</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
@include('layouts.admin_parts.scripts')


</body>

</html>
