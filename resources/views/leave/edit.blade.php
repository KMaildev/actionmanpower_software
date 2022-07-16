@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Leave</h4>
                </div>

                <div class="card-body">
                    <form autocomplete="off" action="{{ route('passport_leave.update', $passport->id) }}" method="POST"
                        id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Person Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="form-label">Name</label>
                                        <input type="text"
                                            class="form-control @error('name') form-control-danger @enderror" name="name"
                                            value="{{ $passport->name }}">
                                        @error('name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('father_name') has-danger @enderror">
                                        <label class="form-label">Father Name</label>
                                        <input type="text" class="form-control" name="father_name"
                                            value="{{ $passport->father_name }}">
                                        @error('father_name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('nrc') has-danger @enderror">
                                        <label class="form-label">NRC</label>
                                        <input type="text" class="form-control" name="nrc"
                                            value="{{ $passport->nrc }}">
                                        @error('nrc')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('passport') has-danger @enderror">
                                        <label class="form-label">Passport</label>
                                        <input type="text" class="form-control" name="passport"
                                            value="{{ $passport->passport }}">
                                        @error('passport')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <h3 class="box-title m-t-40">Leave</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Leave Date</label>
                                        <input type="text"
                                            class="form-control @error('leave_date') form-control-danger @enderror"
                                            name="leave_date" value="{{ old('leave_date') }}">
                                        @error('leave_date')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Remark</label>
                                        <input type="text"
                                            class="form-control @error('leave_remark') form-control-danger @enderror"
                                            name="leave_remark" value="{{ old('leave_remark') }}">
                                        @error('leave_remark')
                                            <div class="form-control-feedback"> {{ $message }} </div>
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
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateLeave', '#edit-form') !!}
@endsection
