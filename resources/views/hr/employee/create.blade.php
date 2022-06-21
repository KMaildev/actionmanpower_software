@extends('layouts.main')
@section('content')
    <div class="page py-5">
        <div class="page-content container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employee</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('employee.store') }}" method="POST" autocomplete="off" id="create-form"
                                role="form">
                                <h6 class="mb-b fw-normal">1. Account Details</h6>
                                <hr>
                                @csrf

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Employee
                                        ID</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('employee_id') is-invalid @enderror"
                                            type="text" name="employee_id" value="{{ old('employee_id') }}" />
                                        @error('employee_id')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ old('name') }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" value="{{ old('email') }}" />
                                        @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Phone</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" value="{{ old('phone') }}" />
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">NRC Number</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('nrc_number') is-invalid @enderror" type="text"
                                            name="nrc_number" value="{{ old('nrc_number') }}" />
                                        @error('nrc_number')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Gender</label>
                                    <div class="col-md-9">
                                        <select name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                            name="address" value="{{ old('address') }}" />
                                        @error('address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Department</label>
                                    <div class="col-md-9">
                                        <select name="department_id" class="form-control">
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}">
                                                    {{ $department->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('department_id')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                                            name="password" value="{{ old('password') }}" />
                                        @error('password')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-4 row">
                                    <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreUsers', '#create-form') !!}
@endsection
