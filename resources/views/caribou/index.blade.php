@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">dodo</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/dal</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->

                <div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                                        اضافة
                                    </button>
                                  @include('caribou.create')
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">#</th>
												<th class="wd-15p border-bottom-0">الاسم </th>
												<th class="wd-20p border-bottom-0">العنوان</th>
												<th class="wd-15p border-bottom-0">الملاحظات</th>
												<th class="wd-10p border-bottom-0">العمليات</th>

											</tr>
										</thead>
										<tbody>
                                         @foreach ($gos as $go )


											<tr>
												<td>1</td>
												<td>{{$go->name}}</td>
												<td>{{$go->address}}</td>
												<td>{{$go->notes}}</td>
												<td>
                                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{$go->id}}">تعديل</button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$go->id}}">حذف</button>
                                                </td>

											</tr>
                                            @include('caribou.edit')
                                            @include('caribou.deleted')
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
        @endsection
        @section('js')
        <!-- Internal Data tables -->
        <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
        <!--Internal  Datatable js -->
        <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
        @endsection
