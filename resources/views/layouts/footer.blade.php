<!-- begin:: Footer -->
			<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
				<div class="kt-footer__copyright">
					{{ date('Y') }}&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">smas</a>
				</div>
				<div class="kt-footer__menu">
					
				</div>
			</div>

			<!-- end:: Footer -->
		</div>
	</div>
</div>

<!-- end:: Page -->

<div id="kt_quick_panel_toggler_btn"></div>
<!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
    <div class="kt-quick-panel__nav">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Search</a>
            </li>
        </ul>
    </div>
    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                <div class="kt-notification">
                    @yield('searchBar')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Panel -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
	<i class="fa fa-arrow-up"></i>
</div>
<div aria-labelledby="dataModel" class="modal fade" id="dataModel" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top:15%;">
            <div class="modal-header">
                <h5 class="modal-title" id="dataModelTitle">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Close
                </button>
                <button class="btn btn-primary dataModelSubmit" type="button">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-modal-sm" id="data-import-model" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="margin-top:30%;">
            <div class="modal-header">
                
                <h5 class="modal-title">Import Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['id' => 'data-import-form', 'method' => 'post', 'files' => true ]) !!}
                {!! HTML::vfile('file', ['label' => 'Choose File', 'data-validation' => 'required']) !!}
                <input type="submit" value="Import" class="btn btn-sm btn-success btn-block">
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-inverse" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
	var KTAppOptions = {
		"colors": {
			"state": {
				"brand": "#22b9ff",
				"light": "#ffffff",
				"dark": "#282a3c",
				"primary": "#5867dd",
				"success": "#34bfa3",
				"info": "#36a3f7",
				"warning": "#ffb822",
				"danger": "#dc3545"
			},
			"base": {
				"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
				"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
			}
		}
	};
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/wnumb/wNumb.js')}}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/bootstrap-switch/init.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/bootstrap-markdown/init.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/bootstrap-notify/init.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/jquery-validation/init.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{ getMediaUrl('admin/assets/vendors/custom/components/vendors/sweetalert2/init.js')}}" type="text/javascript"></script>
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ getMediaUrl('admin/assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>--}}

<script src="{{ getMediaUrl('admin/assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ getMediaUrl('admin/assets/demo/demo6/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
{{--<script src="{{ getMediaUrl('admin/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>--}}

<script src="{{ getMediaUrl('admin/assets/vendors/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ getMediaUrl('admin/assets/app/custom/general/dashboard.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Global App Bundle(used by all pages) -->
<script src="{{ getMediaUrl('admin/assets/app/bundle/app.bundle.js')}}" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.20/jquery.form-validator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.js"></script>
<!--end::Global App Bundle -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDC6FU6iM6b6JyG_gHPWjGPfZXWoc1rlLc"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>



<script>
	function showErrorMsg(msg) {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "1500",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.error(msg, "Errors");
    }

    function showSuccessMsg(msg) {

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "1500",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.success(msg, "Success");


    }

	function pageLoader() {
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: 'Please wait...'
        });
    }

    function removePageLoader() {
        KTApp.unblockPage();
    }

    function initFancyBox() {
        $(".light-image").fancybox();
    }

    function changeTableContent(data,  contentId) {
        var $response=$(data);
        //query the jq object for the values
        var dataToday = $response.find(contentId).html();
        $(contentId).html(dataToday);
        removePageLoader();
    }

    function init() {

    	$('.datepicker').attr('readonly', 'readonly');
        $('.datepicker').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: 'dd-mm-yyyy',
            startDate : new Date()
        });

        $('.datepicker2').attr('readonly', 'readonly');
        $('.datepicker2').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: 'dd-mm-yyyy'
        });

    	initFancyBox();

    	// $('.editor').summernote({
        //     height: 70
        // });
    	
    	$(".phone-10-digit").inputmask({mask:"9",repeat:10,greedy:!1});

        $('.select2-select').select2();

        // select 2 ajax
        $('.select2-ajaxselect').select2({
            width: "off",
            ajax: {
                url: $('.select2-ajaxselect').data('url'),
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            }
        });
        
        $('#city').select2({
            width: "off",
            ajax: {
                url: $('#city').data('url'),
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            }
        });
        
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')), {
            componentRestrictions: {country: "in"}
        });

        $.validate();
        
        
        $('.data-table-export').DataTable({
            responsive: true,
            "dom": 'lBfrtip',
            "order": [[ 0, "desc" ]],
            "oLanguage": {
                "sEmptyTable": "No records found"
            }, buttons: [
                {
                    extend: 'excelHtml5',
                    title : 'SMASCP-ExportData',
                    exportOptions: {
                        orthogonal: 'export',
                        columns: "th:not(.noExport)"
                    },
                    text : 'Export'
                },

            ]
        });

        // $('.buttons-excel').html('Export');
        

	}
    // function geolocate() {
    //     // if (navigator.geolocation) {
    //     //     navigator.geolocation.getCurrentPosition(function(position) {
    //             // var geolocation = {
    //             //     lat: position.coords.latitude,
    //             //     lng: position.coords.longitude
    //             // };
    //             var circle = new google.maps.places.Autocomplete((document.getElementById('address')), {
    //                 componentRestrictions: {country: "in"}
    //             });
    //             // autocomplete.setBounds(circle.getBounds());
    //     //     });
    //     // }
    // }


	$(document).ready(function(){
		
		init();

        // $('.data-table').parent('div').css('overflow-x', 'auto');
    
        // $('.data-table').DataTable({
        //     "order": [[ 0, "desc" ]],
        //     "oLanguage": {
        //         "sEmptyTable": "No records found"
        //     },
        //     responsive: true
        // });
      
        $(".dataTable").wrap( "<div class='table-responsive'></div>" );
        
		$('body').on('click', '.dataModel', function(e) {
			
			var url = $(this).data('href');
            var title = $(this).data('title');

			pageLoader();

            $.get(url, function(res){
                $('#dataModelTitle').text(title);
                $('#dataModel .modal-body').html(res);
                // $('.editor').summernote({
                //     height: 70
                // });

                removePageLoader();
                $('#dataModel').modal('show');
                
                init();

            });
		});

		$('body').on('click', '.dataModelSubmit', function () {

            var s = $(this).parent().parent().find('form').submit();
        });

        $('body').on('click', '.delete', function (e) {

            var that = this;
            e.preventDefault();
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result){
                if (result.value) {
                    window.location.href = $(that).closest('a').attr('href');
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } 
            });

        });
        
		@if (count($errors) > 0)
            var msg = '';
            @foreach ($errors->all() as $error)
            msg += '{{ $error }} <br />';
            @endforeach

            showErrorMsg(msg);
        @endif

        @if(\Session::has('success'))
            var msg1 = '{{ \Session::get('success') }}';
            {{ Session::forget('success') }}
            showSuccessMsg(msg1);

        @endif

        $('body').on('click', '.data-import', function() {

            $('#data-import-form').attr('action', $(this).data('url'));
            $('#data-import-model').modal('show');
        });

        // pagination
        $('body').on('click', '.ajax-collection .pagination a', function (e) {

            e.preventDefault();
            var url = $(this).attr('href');
            var table = $(this).closest('.ajax-collection');
            pageLoader();
            $.get(url, function(data){

                //create jquery object from the response html
                var $response=$(data);
                //query the jq object for the values
                var dataToday = $response.find('.ajax-collection').html();
                $(table).html(dataToday);
                initFancyBox();
                $('[data-toggle="tooltip"]').tooltip();
                removePageLoader();

            });

        });
        // ./ pagination

        // search form // data-content

        $('body').on('click', '#kt_quick_panel_toggler_search_btn', function(e){
            $('#kt_quick_panel_toggler_btn').trigger('click');
        });

        $('body').on('submit', '#search-form', function (e) {
            e.preventDefault();

            var url = $(this).attr('href');
            var contentId = $(this).attr('data-content');
            pageLoader();
            $.get(url, $('#search-form').serialize(), function(data){
                changeTableContent(data, contentId);
                initFancyBox();
                init();
            });
        });

        $('body').on('click', '.sidebarSearchClear', function (e) {
            e.preventDefault();

            var url = $('#search-form').attr('href');
            var contentId = $(this).attr('data-content');
            pageLoader();
            $.get(url, {}, function(data){
                changeTableContent(data, contentId);
                $('#m_quick_sidebar_toggle').click();
                $('#search-form').resetForm();
                initFancyBox();
                init();
            });

        });
        // ./ search form

	});
	
</script>

@yield('script')
</body>

<!-- end::Body -->
</html>
