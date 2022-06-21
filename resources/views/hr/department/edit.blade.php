@extends('layouts.main')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-9 col-lg-9 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">

                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">Edit</h4>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{ route('department.update', $department->id) }}" method="POST"
                                            autocomplete="off" id="edit-form" role="form">
                                            @csrf
                                            @method('PUT')
                                            @csrf
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-12">
                                                        <div class="form-group @error('title') has-danger @enderror">
                                                            <label class="form-label">Title</label>
                                                            <input class="form-control @error('title') is-invalid @enderror"
                                                                type="text" name="title"
                                                                value="{{ $department->title }}" />
                                                            @error('title')
                                                                <div class="invalid-feedback"> {{ $message }} </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateDepartment', '#create-form') !!}
@endsection
