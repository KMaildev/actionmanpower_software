@extends('layouts.main')
@section('content')
    <div class="row d-flex justify-content-center py-5">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                        <span class="hidden-sm-up">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="hidden-xs-down">
                                            Manual
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                        <span class="hidden-sm-up">
                                            <i class="ti-user"></i>
                                        </span>
                                        <span class="hidden-xs-down">
                                            Import Excel
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h4 class="m-b-0 text-white">Create</h4>
                                            </div>
                                            <div class="card-body">
                                                @include('passport.form.create_form')
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="p-20">
                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h4 class="m-b-0 text-white">Import Excel</h4>
                                            </div>
                                            <div class="card-body">
                                                @include('passport.form.excel_import')
                                            </div>
                                        </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StorePassport', '#create-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\StoreImportPassport', '#import-form') !!}
@endsection
