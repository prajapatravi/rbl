@extends('layouts.master')

@section('title', '| Agency')

@section('sh-detail')
Edit New
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit Agency</strong> form
            </div>
            <div class="card-body card-block">
                {!! Form::model($data, [
                    'method' => 'PATCH',
                    'url' => 'agency/' . Crypt::encrypt($data->id),
                    'class' => 'kt-form',
                    'data-toggle' => "validator"
                ]) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="text-input" class="form-control-label">Name</label>
                            <input type="text" id="text-input" name="name" placeholder="Yard Name" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="location" class="form-control-label">Location</label>
                            <input type="text" id="location" name="location" placeholder="Location" class="form-control"
                                value="{{ old('location', $data->location) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control"
                                value="{{ old('email', $data->email) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile_number" class="form-control-label">Mobile Number</label>
                            <input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile Number"
                                class="form-control" value="{{ old('mobile_number', $data->mobile_number) }}">
                        </div>
                    </div>

                    <!-- Branch Name is commented out; remove if not needed -->
                    <!-- 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="text-input" class="form-control-label">Branch Name</label>
                            <select name="branch_name" data-placeholder="Choose a Branch..." class="standardSelect form-control" tabindex="1">
                                <option value="" label="Branch Name"></option>
                                @foreach($branch as $k=>$item)
                                    <option value="{{ $item->id }}" {{ ($data->branch_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="agency_id" class="form-control-label">Agency ID</label>
                            <input type="text" id="agency_id" name="agency_id" placeholder="Agency ID"
                                class="form-control" value="{{ $data->agency_id }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="agency_manager" class="form-control-label">Agency Manager</label>
                            <select name="agency_manager" data-placeholder="Choose an Agency Manager..."
                                class="standardSelect form-control" tabindex="3">
                                <option value="" label="Agency Manager"></option>
                                @foreach($user as $k=>$item)
                                <option value="{{ $item->id }}" {{ ($data->agency_manager == $item->id) ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="multiple-select" class="form-control-label">Regions</label>
                            <select class="form-control" name="region_id" id="country">
                                <option value="">Choose Region</option>
                                @foreach ($regions as $country)
                                <option @if($region == $country->id) selected @endif value="{{ $country->id }}">
                                    {{ $country->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="multiple-select" class="form-control-label">State</label>
                            <select class="form-control" name="state" id="state">
                                <!-- States will be populated dynamically -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="multiple-select" class="form-control-label">City</label>
                            <select class="form-control" name="city_id" id="city">
                                <!-- Cities will be populated dynamically -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class=" form-group">
                        <label for="location" class=" form-control-label">Location</label>
                        <input type="text" id="location" name="location" placeholder="Location" class="form-control" value="{{$data->location}}">
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address" class="form-control-label">Address</label>
                            <input type="text" id="address" name="address" placeholder="Address" class="form-control"
                                value="{{ $data->address }}">
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
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>

@endsection

@section('js')

<script>
    $(function () {
        $(".sizes").select2();
    });
    jQuery(document).ready(function () {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

<script>
    jQuery(document).ready(function () {
        var stateId = {{ $data->city->state->id ?? '' }};
        var cityId = {{ $data->city->id ?? ''}};

        jQuery('#country').change(function () {
            var countryId = jQuery(this).val();
            if (countryId) {
                jQuery.ajax({
                    type: "GET",
                    url: "{{ url('/getStates') }}/" + countryId,
                    success: function (res) {
                        if (res) {
                            jQuery("#state").empty().append('<option>Select State</option>');
                            jQuery("#city").empty().append('<option>Select City</option>'); // Clear city dropdown
                            jQuery.each(res, function (key, value) {
                                jQuery("#state").append('<option value="' + key + '"' + (stateId == key ? ' selected' : '') + '>' + value + '</option>');
                            });
                            jQuery('#state').trigger('change');
                        }
                    }
                });
            }
        });

        jQuery('#state').change(function () {
            var stateId = jQuery(this).val();
            if (stateId) {
                jQuery.ajax({
                    type: "GET",
                    url: "{{ url('/getCities') }}/" + stateId,
                    success: function (res) {
                        if (res) {
                            jQuery("#city").empty().append('<option>Select City</option>');
                            jQuery.each(res, function (key, value) {
                                jQuery("#city").append('<option value="' + key + '"' + (cityId == key ? ' selected' : '') + '>' + value + '</option>');
                            });
                        }
                    }
                });
            }
        });

        // Trigger country change to populate states and cities initially
        jQuery('#country').trigger('change');
    });
</script>
@endsection
