<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> ناوبری داشبورد</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="اصلی">
				<li class="active"><a href="dashboard.html"><i class="sl sl-icon-settings"></i> داشبورد</a></li>
				<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> پیام ها <span class="nav-tag messages">2</span></a></li>
				<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> رزرو ها</a></li>
				<li><a href="dashboard-wallet.html"><i class="sl sl-icon-wallet"></i> کیف پول</a></li>
			</ul>

			<ul data-submenu-title="محصولات">
				<li><a><i class="sl sl-icon-layers"></i> محصولات</a>
					<ul>
						<li><a href="{{ route('product-attributes.index') }}">ویژگی ها</a></li>
						<li><a href="{{ route('categories.index') }}">دسته بندی ها</a></li>
						<li><a href="{{ route('products.index') }}">محصولات</a></li>
					</ul>
				</li>
				<li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> نظرات</a></li>
				<li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> نشانکها</a></li>
				<li><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> افزودن آگهی</a></li>
			</ul>
			<ul data-submenu-title="تنظیمات">
				<li><a><i class="sl sl-icon-layers"></i> تنظیمات</a>
					<ul>
						{{-- <li><a href="{{ route('settings.edit', 1) }}">نوار بالا</a></li> --}}
					</ul>
				</li>
				<li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> نظرات</a></li>
				<li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> نشانکها</a></li>
				<li><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> افزودن آگهی</a></li>
			</ul>

			<ul data-submenu-title="اکانت">
				<li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> پروفایل من</a></li>
				<li><a href="index.html"><i class="sl sl-icon-power"></i> خروج</a></li>
			</ul>

		</div>
	</div>
