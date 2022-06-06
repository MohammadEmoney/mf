@extends('layouts.front')

@section('content')


<!-- Banner
================================================== -->
<div class="main-search-container" data-background-image="{{ asset('admin/images/main-search-background-01.jpg') }}">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>یافتن جاذبه های نزدیک</h2>
					<h4>کشف جاذبه های برتر، فعالیت ها و موارد دیگر</h4>

					<div class="main-search-input">

						<div class="main-search-input-item">
							<input type="text" placeholder="دنبال چی میگردی؟" value="">
						</div>

						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="موقعیت">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="تمام دسته ها" class="chosen-select" >
								<option>تمام دسته ها</option>
								<option>فروشگاه ها</option>
								<option>هتل ها</option>
								<option>رستوران ها</option>
								<option>باشگاه ها</option>
								<option>رویداد ها</option>
							</select>
						</div>

						<button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">جستجو</button>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				دسته های محبوب
				<span>مرور کردن <i>مطلوب ترین</i> دسته بندی ها</span>
			</h3>
		</div>

	</div>
</div>


<!-- Categories Carousel -->
<div class="fullwidth-carousel-container margin-top-25">
	<div class="fullwidth-slick-carousel category-carousel">

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{ asset('admin/images/category-box-01.jpg')}} ">
					<div class="category-box-content">
						<h3>هتل ها</h3>
						<span>64 آگهی</span>
					</div>
					<span class="category-box-btn">مرور کردن</span>
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{ asset('admin/images/category-box-03.jpg')}} ">
					<div class="category-box-content">
						<h3>رویداد ها</h3>
						<span>67 آگهی</span>
					</div>
					<span class="category-box-btn">مرور کردن</span>
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{ asset('admin/images/category-box-04.jpg')}} ">
					<div class="category-box-content">
						<h3>باشگاه ها</h3>
						<span>64 آگهی</span>
					</div>
					<span class="category-box-btn">مرور کردن</span>
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{ asset('admin/images/category-box-05.jpg')}} ">
					<div class="category-box-content">
						<h3>شب زنده داری</h3>
						<span>64 آگهی</span>
					</div>
					<span class="category-box-btn">مرور کردن</span>
				</a>
			</div>
		</div>

		<!-- Item -->
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{ asset('admin/images/category-box-06.jpg')}} ">
					<div class="category-box-content">
						<h3>خوردن و نوشیدن</h3>
						<span>64 آگهی</span>
					</div>
					<span class="category-box-btn">مرور کردن</span>
				</a>
			</div>
		</div>

	</div>
</div>
<!-- Categories Carousel / End -->



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					بیشترین مکانهای بازدید شده
					<span>کشف کسب و کارهای محلی با امتیاز بالا</span>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="{{ asset('admin/images/listing-item-01.jpg')}} " alt="">

							<div class="listing-badge now-open">هم اکنون باز است</div>

							<div class="listing-item-content">
								<span class="tag">خوردن و نوشیدن</span>
								<h3>رستوران تام <i class="verified-icon"></i></h3>
								<span>نیویورک، خیابان بیسکو</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="3.5">
							<div class="rating-counter">(12 نظر)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="{{ asset('admin/images/listing-item-02.jpg')}} " alt="">
							<div class="listing-item-details">
								<ul>
									<li>شنبه، اردیبهشت 10</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<span class="tag">رویداد</span>
								<h3>باند چسبنده</h3>
								<span>نیویورک، خیابان بیسکو</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="5.0">
							<div class="rating-counter">(23 نظر)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="{{ asset('admin/images/listing-item-03.jpg')}} " alt="">
							<div class="listing-item-details">
								<ul>
									<li>شروع از 59 دلار در هر شب</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<span class="tag">هتل ها</span>
								<h3>هتل پیروزی</h3>
								<span>نیویورک، خیابان بیسکو</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="2.0">
							<div class="rating-counter">(17 نظر)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="{{ asset('admin/images/listing-item-04.jpg')}} " alt="">

							<div class="listing-badge now-open">هم اکنون باز است</div>

							<div class="listing-item-content">
								<span class="tag">خوردن و نوشیدن</span>
								<h3>خانه برگر <i class="verified-icon"></i></h3>
								<span>نیویورک، خیابان بیسکو</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="5.0">
							<div class="rating-counter">(31 نظر)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="{{ asset('admin/images/listing-item-05.jpg')}} " alt="">
							<div class="listing-item-content">
								<span class="tag">دیگر</span>
								<h3>فرودگاه</h3>
								<span>نیویورک، خیابان بیسکو</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="3.5">
							<div class="rating-counter">(46 نظر)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="{{ asset('admin/images/listing-item-06.jpg')}} " alt="">

							<div class="listing-badge now-closed">هم اکنون بسته است</div>

							<div class="listing-item-content">
								<span class="tag">خوردن و نوشیدن</span>
								<h3>کافه قهوه</h3>
								<span>نیویورک، خیابان بیسکو</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="4.5">
							<div class="rating-counter">(15 نظر)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->
				</div>

			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->


<!-- Info Section -->
<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="headline centered margin-top-80">
				برنامه ریزی برای تعطیلات رویاهای شما
				<span class="margin-top-25">از همکاران و دوستان ما برخی از بهترین نکات را از سراسر دنیا کاوش کنید. کشف برخی از محبوب ترین آگهی ها در سیدنی.</span>
			</h2>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Map2"></i>
				<h3>مکان جالب پیدا کنید</h3>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Mail-withAtSign"></i>
				<h3>با چند مالک تماس بگیرید</h3>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2">
				<i class="im im-icon-Checked-User"></i>
				<h3>رزرو کنید</h3>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
			</div>
		</div>
	</div>

</div>
<!-- Info Section / End -->


<!-- Recent Blog Posts -->
<section class="fullwidth border-top margin-top-70 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					از وبلاگ
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ asset('admin/images/blog-compact-post-01.jpg')}} " alt="">
						<span class="blog-item-tag">نکات</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>خرداد 1398</li>
							</ul>
							<h3>هتل ها برای همه بودجه</h3>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنانه.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ asset('admin/images/blog-compact-post-02.jpg')}} " alt="">
						<span class="blog-item-tag">نکات</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>خرداد 1398</li>
							</ul>
							<h3>هتل ها برای همه بودجه</h3>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنانه.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ asset('admin/images/blog-compact-post-03.jpg')}} " alt="">
						<span class="blog-item-tag">نکات</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>خرداد 1398</li>
							</ul>
							<h3>ستوران های حرفه ای و مجلل در تالار بهار</h3>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنانه.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<div class="col-md-12 centered-content">
				<a href="pages-blog.html" class="button border margin-top-10">نمایش بلاگ</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->



@endsection
