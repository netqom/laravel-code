@extends('layouts.admin')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline mr-5">
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('admin.dashboard') }}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#" class="">Tickets</a>
						</li>
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page Heading-->
			</div>
			<!--end::Info-->
			
		</div>
	</div>
	<!--end::Subheader-->
	<div class="dataTables_processing dts_loading"></div>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
			@include('admin.alerts.simple-alert')
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">  List of Tickets
                    </div>
					<div class="card-toolbar">
						<!--begin::Button-->
						<!-- <a href="javascript:;" onclick="addEditUsers(0);" class="btn btn-light-primary btn-sm font-weight-bolder"><i class="la la-plus"></i>Add User</a> -->
						<!--end::Button-->
					</div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
				
					<!--begin::Search Form-->
					<div class="mb-7">
						<div class="row align-items-center">
							<div class="col-lg-9 col-xl-8">
								<div class="row align-items-center">
									<div class="col-md-4 my-2 my-md-0">
										<div class="input-icon">
											<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
											<span>
												<i class="flaticon2-search-1 text-muted"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Search Form-->
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_help_datatable">
                    </div>
                    <!--end: Datatable-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection
@push('scripts')
<script type="text/javascript">
     var data_url = "{{ admin_url('help-center/list-data') }}";
     var url_page_base = "{{ admin_url('help-center') }}";	 
	 var token = '{{ csrf_token() }}';
</script>

<script src="{{ asset('public/admin_assets/js/help_datatable.js') }}"></script>
@endpush