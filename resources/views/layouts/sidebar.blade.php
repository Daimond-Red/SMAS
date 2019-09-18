<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

	<!-- begin:: Aside Menu -->
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
			<ul class="kt-menu__nav ">
				<li class="kt-menu__item  home-menu" aria-haspopup="true">
					<a href="{{ route('admin.dashboard')}}" class="kt-menu__link ">
						<i class="kt-menu__link-icon flaticon2-protection"></i>
						<span class="kt-menu__link-text">Dashboard</span>
					</a>
				</li>

                <li class="kt-menu__item  service-delivery-menu" aria-haspopup="true">
                    <a href="{{ route('service-delivery')}}" class="kt-menu__link ">
                        <i class="kt-menu__link-icon flaticon-rotate"></i>
                        <span class="kt-menu__link-text">Service Delivery TAT</span>
                    </a>
                </li>

                <li class="kt-menu__item  accidental-delivery-menu" aria-haspopup="true">
                    <a href="{{ route('accidental-delivery')}}" class="kt-menu__link ">
                        <i class="kt-menu__link-icon flaticon2-protected"></i>
                        <span class="kt-menu__link-text">Accidental Delivery TAT </span>
                    </a>
				</li>
				
				<li class="kt-menu__item  accidental-history-menu" aria-haspopup="true">
                    <a href="{{ route('accidental-history')}}" class="kt-menu__link ">
                        <i class="kt-menu__link-icon flaticon-layer"></i>
                        <span class="kt-menu__link-text">Accidental History </span>
                    </a>
                </li>

                <li class="kt-menu__item  active-asset-client" aria-haspopup="true">
                    <a href="{{ route('active-asset-client')}}" class="kt-menu__link ">
                        <i class="kt-menu__link-icon flaticon-users"></i>
                        <span class="kt-menu__link-text">Active Asset's Client</span>
                    </a>
                </li>

                
			</ul>
		</div>
	</div>

	<!-- end:: Aside Menu -->
</div>
