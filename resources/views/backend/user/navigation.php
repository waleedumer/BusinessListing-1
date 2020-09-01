<div class="sidebar-menu">
	<header class="logo-env" >

		<!-- logo collapse icon -->
		<div class="sidebar-collapse" style="margin-top: 0px;">
			<a href="#" class="sidebar-collapse-icon" onclick="hide_brand()">
				<i class="entypo-menu"></i>
			</a>
		</div>
		<script type="text/javascript">
		function hide_brand() {
			$('#branding_element').toggle();
		}
		</script>

		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation">
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>

	<div style=""></div>
	<ul id="main-menu" class="">
		<div style="text-align: -webkit-center;" id="branding_element">
			<img src="<?php echo base_url('assets/global/light_logo.png'); ?>"  style="max-height:30px;"/>
		</div>
		<br>
		<!-- Home -->
		<li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> " style="border-top:1px solid #232540;">
			<a href="<?php echo site_url('user/dashboard'); ?>">
				<i class="fa fa-home"></i>
				<span><?php echo get_phrase('dashboard'); ?></span>
			</a>
		</li>



		<!-- Listings -->
		<li class="<?php if ($page_name == 'listings' || $page_name == 'listing_add_wiz' || $page_name == 'listing_edit_wiz') echo 'opened active has-sub'; ?>">
			<a href="#">
				<i class="fa fa-sitemap"></i>
				<span><?php echo get_phrase('directory'); ?></span>
			</a>
			<ul>
				<li class="<?php if ($page_name == 'listings') echo 'active'; ?> ">
					<a href="<?php echo site_url('user/listings'); ?>">
						<span><i class="entypo-dot"></i> <?php echo get_phrase('all_directories'); ?></span>
					</a>
				</li>

				<li class="<?php if ($page_name == 'listing_add_wiz') echo 'active'; ?> ">
					<a href="<?php echo site_url('user/listing_form/add'); ?>">
						<span><i class="entypo-dot"></i> <?php echo get_phrase('add_new_directory'); ?></span>
					</a>
				</li>
			</ul>
		</li>
		<!-- Bookings -->
		<li class="<?php if ($page_name == 'booking_request_hotel' || $page_name == 'booking_request_restaurant' || $page_name == 'booking_request_beauty') echo 'opened active has-sub'; ?>">
			<a href="#">
				<i class="fa fa-tasks"></i>
				<span><?php echo get_phrase('booking_requests'); ?></span>
			</a>
			<ul>
				<li class="<?php if ($page_name == 'booking_request_hotel') echo 'active'; ?> ">
					<a href="<?php echo site_url('user/booking_request_hotel'); ?>">
						<span><i class="entypo-dot"></i> <?php echo get_phrase('hotel'); ?></span>
					</a>
				</li>

				<li class="<?php if ($page_name == 'booking_request_restaurant') echo 'active'; ?> ">
					<a href="<?php echo site_url('user/booking_request_restaurant'); ?>">
						<span><i class="entypo-dot"></i> <?php echo get_phrase('restaurant'); ?></span>
					</a>
				</li>
				<li class="<?php if ($page_name == 'booking_request_beauty') echo 'active'; ?> ">
					<a href="<?php echo site_url('user/booking_request_beauty'); ?>">
						<span><i class="entypo-dot"></i> <?php echo get_phrase('beauty'); ?></span>
					</a>
				</li>
			</ul>
		</li>

		<!-- Pricing -->
		<li class="<?php if ($page_name == 'packages' || $page_name == 'purchase_history' || $page_name == 'package_invoice') echo 'opened active has-sub'; ?>">
			<a href="#">
				<i class="fa fa-credit-card"></i>
				<span><?php echo get_phrase('pricings'); ?></span>
			</a>
			<ul>
				<li class="<?php if ($page_name == 'packages') echo 'active'; ?> ">
					<a href="<?php echo site_url('user/packages'); ?>">
						<span><i class="entypo-dot"></i> <?php echo get_phrase('all_packages'); ?></span>
					</a>
				</li>
				<?php if (has_package() > 0): ?>
					<li class = "<?php if($page_name == 'purchase_history' || $page_name == 'package_invoice') echo 'active'; ?>">
						<a href="<?php echo site_url('user/purchase_history'); ?>">
							<span><i class="entypo-dot"></i><?php echo get_phrase('purchase_history'); ?>
							</a>
					</li>
				<?php endif; ?>
				</ul>
			</li>

			<!-- Wishlist -->
			<li class="<?php if ($page_name == 'wishlists') echo 'active'; ?>">
				<a href="<?php echo site_url('user/wishlists'); ?>">
					<i class="fa fa-heart"></i>
					<span><?php echo get_phrase('wishlist'); ?></span>
				</a>
			</li>

			<!-- Manage Profile -->
			<li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?>">
				<a href="<?php echo site_url('user/manage_profile'); ?>">
					<i class="fa fa-user"></i>
					<span><?php echo get_phrase('account'); ?></span>
				</a>
			</li>
	</ul>
</div>
