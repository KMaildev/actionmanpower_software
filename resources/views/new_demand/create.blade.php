@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content tabcontent-border">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">Create</h4>
                                    </div>
                                    <div class="card-body">
                                        <form autocomplete="off" action="{{ route('new_demand.store') }}" method="POST"
                                            id="create-form">
                                            @csrf
                                            <input type="hidden" value="new_demand" name="demand_status">
                                            <div class="form-body">
                                                <h3 class="card-title">Demand Info</h3>
                                                <hr>
                                                <div class="row p-t-20">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div
                                                                class="form-group @error('countrie_id') has-danger @enderror">
                                                                <label class="form-label">Country</label>
                                                                <select class="select2 form-control form-select"
                                                                    name="countrie_id">
                                                                    <option value="">--Select Country--</option>
                                                                    @foreach ($countryies as $country)
                                                                        <option value="{{ $country->id }}">
                                                                            {{ $country->country }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('countrie_id')
                                                                    <div class="form-control-feedback"> {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div
                                                                class="form-group @error('overseas_agencie_id') has-danger @enderror">
                                                                <label class="form-label">
                                                                    Overseas Company Name
                                                                </label>
                                                                <select class="select2 form-control form-select"
                                                                    name="overseas_agencie_id">

                                                                </select>
                                                                @error('overseas_agencie_id')
                                                                    <div class="form-control-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group @error('male') has-danger @enderror">
                                                            <label class="form-label">Male</label>
                                                            <input type="text"
                                                                class="form-control @error('male') form-control-danger @enderror"
                                                                name="male" oninput="MaleFemaleTotalCalc()"
                                                                id="male" value="0">
                                                            @error('male')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group @error('female') has-danger @enderror">
                                                            <label class="form-label">Female</label>
                                                            <input type="text"
                                                                class="form-control @error('female') form-control-danger @enderror"
                                                                name="female" oninput="MaleFemaleTotalCalc()"
                                                                id="female" value="0">
                                                            @error('female')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group @error('total') has-danger @enderror">
                                                            <label class="form-label">Total</label>
                                                            <input type="text"
                                                                class="form-control @error('total') form-control-danger @enderror"
                                                                id="total" readonly>
                                                            @error('total')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group @error('demand_date') has-danger @enderror">
                                                            <label class="form-label">Demand Date</label>
                                                            <input type="text"
                                                                class="form-control @error('demand_date') form-control-danger @enderror"
                                                                name="demand_date">
                                                            @error('demand_date')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div
                                                            class="form-group @error('cabinet_date') has-danger @enderror">
                                                            <label class="form-label">Cabinet Date</label>
                                                            <input type="text"
                                                                class="form-control @error('cabinet_date') form-control-danger @enderror"
                                                                name="cabinet_date">
                                                            @error('cabinet_date')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group @error('issue_date') has-danger @enderror">
                                                            <label class="form-label">Issue Date</label>
                                                            <input type="text"
                                                                class="form-control @error('issue_date') form-control-danger @enderror"
                                                                name="issue_date">
                                                            @error('issue_date')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div
                                                            class="form-group @error('issue_number') has-danger @enderror">
                                                            <label class="form-label">Issue Number</label>
                                                            <input type="text"
                                                                class="form-control @error('issue_number') form-control-danger @enderror"
                                                                name="issue_number">
                                                            @error('issue_number')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>




                                                    <div class="col-md-6">
                                                        <div class="form-group @error('coe_date') has-danger @enderror">
                                                            <label class="form-label">COE Date</label>
                                                            <input type="text"
                                                                class="form-control @error('coe_date') form-control-danger @enderror"
                                                                name="coe_date">
                                                            @error('coe_date')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group @error('coe_number') has-danger @enderror">
                                                            <label class="form-label">COE Number</label>
                                                            <input type="text"
                                                                class="form-control @error('coe_number') form-control-danger @enderror"
                                                                name="coe_number">
                                                            @error('coe_number')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success text-white">
                                                    <i class="fa fa-check"></i>
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreDemand', '#create-form') !!}
    <script>
        var total = document.getElementById("total");

        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var t = parseInt(female) + parseInt(male);
            total.value = t;
        }
    </script>
@endsection
