<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>{{ config('app.name', 'Admin') }}</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Fonts -->

	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="{{ getMediaUrl('admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles -->



	<!--begin:: Global Mandatory Vendors -->
	<link href="{{ getMediaUrl('admin/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<link href="{{ getMediaUrl('admin/assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />--}}
	<link href="{{ getMediaUrl('admin/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />--}}
	<link href="{{ getMediaUrl('admin/assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />--}}
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />--}}
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />--}}
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />--}}
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />--}}
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />--}}
{{--	<link href="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />--}}
	<link href="{{ getMediaUrl('admin/assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/vendors/custom/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" />

	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{ getMediaUrl('admin/assets/demo/demo6/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ getMediaUrl('admin/assets/demo/demo6/base/custom.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.css">
	<!--end::Global Theme Styles -->
	
	<!--begin::Layout Skins(used by all pages) -->

	<!--end::Layout Skins -->
	<link rel="shortcut icon" type="image/png" href="{{ getMediaUrl('admin/assets/media/logos/favicon.png')}}" />

	<style type="text/css">

		.datepicker{
			width:inherit !important;
		}

		.buttons-excel{
			background: transparent;
			border: 2px solid #1d95d4;
			border-radius: 2px;
			padding: 4px 15px;
			font-size: 14px;
			position: absolute;
			right: 107px;
    		top: -71px;
		}
		.dataTables_length{
			position:absolute;
		}
		#kt_subheader{
			background-color: transparent !important;
		}
		.kt-subheader__title, .kt-subheader__breadcrumbs-link--active {
			color: #000!important;
		}
		.kt-subheader-search {
		    background: #f4f4f5 !important;
		    padding: 0.7rem 25px;
		}
		.table-sm td {
		    padding: 0.2rem 0.6rem;
		}
		.designation.table-sm td {
		    padding: 0.7rem 0.6rem !important;
		}
		.pac-container {
		    background-color: #FFF;
		    z-index: 20;
		    position: fixed;
		    display: inline-block;
		    float: left;
		}
		.modal{
		    z-index: 20;   
		}
		.modal-backdrop{
		    z-index: 10;        
		}​
		

       
	</style>

	@yield('style')
</head>

	<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="index.html">
				<img alt="Logo" src="{{ getImageUrl('admin/assets/media/logos/logo-6-sm.png')}}" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
			<div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
			<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>
		</div>
	</div>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!-- begin:: Aside -->
			<button class="kt-aside-close " id="kt_aside_close_btn">
				<i class="la la-close"></i>
			</button>

			@include('layouts.sidebar')

			<!-- end:: Aside -->
			
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

					<!-- begin:: Aside -->
					<div class="kt-header__brand kt-grid__item  " id="kt_header_brand" style="background: white">
						<div class="kt-header__brand-logo">
							<a href="{{ route('admin.dashboard') }}">
								<img alt="Logo" src="{{ getImageUrl('admin/assets/media/logos/logo-6.png')}}" style="width: 100%;" />
							</a>
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Title -->
					<h3 class="kt-header__title kt-grid__item">
						SMAS
					</h3>

					<!-- end:: Title -->

					<!-- begin: Header Menu -->
					<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
					<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
						<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true">
									<a href="{{ route('admin.dashboard') }}" class="kt-menu__link ">
										<span class="kt-menu__link-text">Dashboard</span>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="kt-header__topbar">

						<div class="kt-header__topbar-item ">
							<div class="kt-header__topbar-wrapper">
								<span class="kt-header__topbar-icon"></span>
							</div>
						</div>
						<div class="kt-header__topbar-item kt-header__topbar-item--user">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
								<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
								<span class="kt-hidden kt-header__topbar-username">Nick</span>
								<img class="kt-hidden" alt="Pic" src="{{ getImageUrl('admin/assets/media/users/300_21.jpg')}}" />
								<span class="kt-header__topbar-icon kt-hidden-"><i class="flaticon2-user-outline-symbol"></i></span>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

								<!--begin: Head -->
								{{-- <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ getImageUrl('admin/assets/media/misc/bg-1.jpg')}})">
									<div class="kt-user-card__avatar">
										<img class="kt-hidden" alt="Pic" src="{{ getImageUrl('admin/assets/media/users/300_25.jpg')}}" />

										
										<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
									</div>
									<div class="kt-user-card__name">
										Sean Stone
									</div>
									<div class="kt-user-card__badge">
										<span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
									</div>
								</div> --}}

								<!--end: Head -->

								<!--begin: Navigation -->
								<div class="kt-notification">
									
									<div class="kt-notification__custom">
										<a href="javascript:void(0);" target="_blank" class="btn btn-label-brand btn-sm btn-bold" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">Sign Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</div>
								</div>

								<!--end: Navigation -->
							</div>
						</div>

						<!--end: User bar -->

						<!--begin: Quick panel toggler -->
						

						<!--end: Quick panel toggler -->
					</div>

					<!-- end:: Header Topbar -->
				</div>
