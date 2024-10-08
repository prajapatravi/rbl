@extends('layouts.master')

@section('title', '| Yards')

<!-- @section('sh-detail')
Users
@endsection -->

@section('content')
<div class="row">
		<div class="col-lg-12" style="margin-top:10x">
		</div>
</div>
<div class="animated fadeIn">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Yard List</strong>
					<a class="btn btn-primary btn-sm float-right" style="margin-right: 5px" href="{{route('excelDownloadYard')}}" target="_blank">Export Yard</a>
					<a class="btn btn-info btn-sm float-right" style="margin-right: 5px" href="{{route('yardExcelUpload')}}">Import Yard</a>
				</div>
				<div class="card-body">
					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
						<thead>
							<tr>
									<th scope="col">#</th>
									<th scope="col">
										Yard Name
									</th>
									<th scope="col">
										Branch Name
									</th>
									<th scope="col">
										Agency Name
									</th>
									<th scope="col">
										Yard Id
                                    </th>
                                    <th scope="col">
										Agency Manager
									</th>
                                    <th scope="col">
										Location
									</th>
                                    <th scope="col">
										Address
									</th>
                                    
									<th scope="col">
										Actions
									</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $k=>$row)
							<tr scope="row">
								<td>{{$k}}</td>
								<td>
									{{$row->name}}
								</td>
								<td>
									{{ isset($row->branch)?$row->branch->name:''}}
                                </td>
                                <td>
									{{ isset($row->agency)?$row->agency->name:''}}
								</td>
								<td>{{$row->yard_id}}</td>
								<td>{{isset($row->user)?$row->user->name:''}}</td>
								<td>{{ $row->location  }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
								<td>{{ $row->addresss  }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

								<td nowrap>
									<!-- <div style="display: flex;">
										{{Form::open([ 'method'  => 'delete', 'route' => [ 'user.destroy', Crypt::encrypt($row->id) ],'onsubmit'=>"delete_confirm()"])}}
										<button class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
											<i class="la la-trash"></i>
										</button>
									</form> -->
									<a href="{{url('yard/'.Crypt::encrypt($row->id).'/edit')}}" class="btn btn-xs btn-info" title="View">
										<i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('yard/'.Crypt::encrypt($row->id))}}" class="btn btn-xs btn-danger" title="View">
										<i class="fa fa-trash"></i>
									</a>

									<!-- </div> -->
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')

@endsection
@section('js')

@endsection