@extends('layouts.master')

@section('title', '| Users')

@section('sh-detail')
Edit
@endsection

@section('content')

  <div class="card">

    <!--begin::Portlet-->
    <div class="kt-portlet">
      <div class="card-header">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title">
            Details
          </h3>
        </div>
      </div>

      <!--begin::Form-->
      
        {!! Form::model($data,
                  array(
                  'method' => 'PATCH',
                    'url' =>'user/'.Crypt::encrypt($data->id),
                    'class' => 'kt-form',
                    'data-toggle'=>"validator")
                  ) !!}


        <div class="card-body card-block">

          <div class="form-group row">
            <div class="col-lg-6">
            <label>Name*</label>
            <input type="text" name="name" class="form-control" required value="{{$data->name}}">
          </div>
          <div class="col-lg-6">
            <label>Primary Email (as username)*</label>
            <input type="text" readonly name="email" class="form-control" required value="{{$data->email}}">
          </div>
         </div>
          <div class="form-group row">
            <div class="col-lg-6">
            <label>Mobile No.*</label>
            <input type="text" name="mobile" class="form-control" required value="{{$data->mobile}}">
          </div>
          <div class="col-lg-6">
            <label>Employee Id*</label>
            <input type="text" name="employee_id" class="form-control" required value="{{$data->employee_id}}">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-6">
          <label>Select Role*</label>
            <select name="user_role_id"  class="form-control">
              @foreach($roles as $k=>$v)
                  <option value="{{ $v->id }}" {{ $data->user_role_id == $v->id ? 'selected' : '' }}>
                      {{ $v->name }}
                  </option>
              @endforeach
            </select>
          </div>
        </div>   

        


        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Reset
        </button>
      </div>
      </form>

      <!--end::Form-->
    </div>

    <!--end::Portlet-->
  </div>

@endsection
@section('js')
@endsection