<!DOCTYPE html>

<head>

@include('layouts.front_parts.head')

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layouts.front_parts.header')

<!-- NAVIGATION -->
@include('layouts.front_parts.nav')
<!-- /NAVIGATION -->

<!-- Header Container / End -->

@yield('content')

<!-- NEWSLETTER -->
@include('layouts.front_parts.newsletter')
<!-- /NEWSLETTER -->

<!-- Footer
================================================== -->
@include('layouts.front_parts.footer')
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->

@include('layouts.front_parts.scripts')

</body>

</html>
