@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">Edit Contract</h4>
                </div>
                <form action="{{ route('contract.update', $contract->id) }}" method="POST" autocomplete="off"
                    id="edit-form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h4 class="card-title">Demand Information</h4>
                    </div>
                    <hr>
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Oversea Company Name</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->overseas_agencies_table->company_name ?? '' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Date</label>
                                        <input type="text" class="form-control" value="{{ $demand->demand_date }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Cabinet Date</label>
                                        <input type="text" class="form-control" value="{{ $demand->cabinet_date }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Male</label>
                                        <input type="text" class="form-control" value="{{ $demand->male }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Female</label>
                                        <input type="text" class="form-control" value="{{ $demand->female }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Total</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->male + $demand->female }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <h4 class="card-title mt-5">Contract Information</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Date</label>
                                        <input type="text"
                                            class="form-control @error('contract_date') form-control-danger @enderror"
                                            name="contract_date" value="{{ $contract->contract_date }}">
                                        @error('contract_date')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Male</label>
                                        <input type="text"
                                            class="form-control @error('contract_male') form-control-danger @enderror"
                                            name="contract_male" oninput="MaleFemaleTotalCalc()" id="male"
                                            value="{{ $contract->contract_male }}">
                                        @error('contract_male')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Female</label>
                                        <input type="text"
                                            class="form-control @error('contract_female') form-control-danger @enderror"
                                            name="contract_female" oninput="MaleFemaleTotalCalc()" id="female"
                                            value="{{ $contract->contract_female }}">
                                        @error('contract_female')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Total</label>
                                        <input type="text" class="form-control" id="total" readonly>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Remark</label>
                                        <input type="text"
                                            class="form-control @error('remark') form-control-danger @enderror"
                                            name="remark" value="{{ $contract->remark }}">
                                        @error('remark')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success text-white">
                                    <i class="fa fa-check"></i>
                                    Save
                                </button>
                                <a href="{{ route('contract.index') }}" class="btn btn-dark">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateContracts', '#edit-form') !!}
    <script type="text/javascript">
        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var t = parseInt(female) + parseInt(male);
            document.getElementById('total').value = t;
        }


        function MaleFemaleTotalAutoCalc() {
            var male = '{{ $contract->contract_male }}';
            var female = '{{ $contract->contract_female }}';
            var t = parseInt(female) + parseInt(male);
            document.getElementById('total').value = t;
        }
        MaleFemaleTotalAutoCalc();
    </script>
@endsection
