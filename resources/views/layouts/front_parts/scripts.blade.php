<!-- Scripts
================================================== -->
<script data-cfasync="false" src="{{ asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="{{ asset('admin/scripts/mmenu.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/chosen.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/slick.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/rangeslider.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/magnific-popup.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/waypoints.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/counterup.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/jquery-ui.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/tooltips.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('admin/scripts/custom.js')}} "></script>


<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("هیچ اطلاعاتی برای ورودی موجود نیست: '" + place.name + "'");
        return;
      }
    });

	if ($('.main-search-input-item')[0]) {
	    setTimeout(function(){
	        $(".pac-container").prependTo("#autocomplete-container");
	    }, 300);
	}
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>


<!-- Style Switcher
================================================== -->
<script src="{{ asset('admin/scripts/switcher.js') }}"></script>

<div id="style-switcher">
	<h2>تغییر رنگ <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="اصلی"></a></li>
			<li><a href="#" class="blue" title="آبی"></a></li>
			<li><a href="#" class="green" title="سبز"></a></li>
			<li><a href="#" class="orange" title="نارنجی"></a></li>
			<li><a href="#" class="navy" title="آبی پررنگ"></a></li>
			<li><a href="#" class="yellow" title="زرد"></a></li>
			<li><a href="#" class="peach" title="هلویی"></a></li>
			<li><a href="#" class="beige" title="بژ"></a></li>
			<li><a href="#" class="purple" title="بنفش"></a></li>
			<li><a href="#" class="celadon" title="سبز کم رنگ"></a></li>
			<li><a href="#" class="red" title="قرمز"></a></li>
			<li><a href="#" class="brown" title="قهوه ای"></a></li>
			<li><a href="#" class="cherry" title="گیلاسی"></a></li>
			<li><a href="#" class="cyan" title="فیروزه ای"></a></li>
			<li><a href="#" class="gray" title="خاکستری"></a></li>
			<li><a href="#" class="olive" title="زیتونی"></a></li>
		</ul>
	</div>

</div>
<!-- Style Switcher / End -->

