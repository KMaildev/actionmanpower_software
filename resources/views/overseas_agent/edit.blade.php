@extends('layouts.main')
@section('content')
    <div class="row d-flex justify-content-center py-5">
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
                                        <form autocomplete="off"
                                            action="{{ route('overseas_agent.update', $overseas_agency->id) }}"
                                            method="POST" id="create-form" class="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <h5 class="card-title">
                                                Employer/Company Info
                                            </h5>
                                            <hr>

                                            <div class="form-group mt-4 row @error('company_name') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Employer/Company
                                                </label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('company_name') form-control-danger @enderror"
                                                        name="company_name" value="{{ $overseas_agency->company_name }}">
                                                    @error('company_name')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group mt-4 row @error('logo') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Logo
                                                </label>
                                                <div class="col-9">
                                                    <input type="file"
                                                        class="form-control @error('logo') form-control-danger @enderror"
                                                        name="logo" value="{{ $overseas_agency->logo }}"
                                                        accept="image/jpeg, image/jpg, image/png">
                                                    @error('logo')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                    <div class="preview_img my-2">
                                                        @if ($overseas_agency->logo)
                                                            <img src="{{ Storage::url($overseas_agency->logo) }}"
                                                                alt=""
                                                                style="width: 20%; height: auto; background-position: center; background-size: contain, cover;">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="form-group form-group mt-4 row @error('type_of_company') has-danger @enderror">
                                                <label class="col-3 col-form-label">Type of Company</label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('type_of_company') form-control-danger @enderror"
                                                        name="type_of_company"
                                                        value="{{ $overseas_agency->type_of_company }}">
                                                    @error('type_of_company')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div
                                                class="form-group form-group mt-4 row @error('type_of_company') has-danger @enderror">
                                                <label class="col-3 col-form-label">Company Phone</label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('company_phone') form-control-danger @enderror"
                                                        name="company_phone"
                                                        value="{{ $overseas_agency->company_phone }}">
                                                    @error('type_of_company')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div
                                                class="form-group form-group mt-4 row @error('company_email') has-danger @enderror">
                                                <label class="col-3 col-form-label">Company Email</label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('company_email') form-control-danger @enderror"
                                                        name="company_email"
                                                        value="{{ $overseas_agency->company_email }}">
                                                    @error('company_email')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div
                                                class="form-group form-group mt-4 row @error('company_address') has-danger @enderror">
                                                <label class="col-3 col-form-label">Company Address</label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('company_address') form-control-danger @enderror"
                                                        name="company_address"
                                                        value="{{ $overseas_agency->company_address }}">
                                                    @error('company_address')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div
                                                class="form-group form-group mt-4 row @error('website') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Website
                                                </label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('website') form-control-danger @enderror"
                                                        name="website" value="{{ $overseas_agency->website }}">
                                                    @error('website')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div
                                                class="form-group form-group mt-4 row @error('countrie_id') has-danger @enderror">
                                                <label class="col-3 col-form-label">Country</label>
                                                <div class="col-9">
                                                    <select class="form-control form-select" name="countrie_id">
                                                        @foreach ($countryies as $country)
                                                            <option value="{{ $country->id }}"
                                                                @if ($country->id == $overseas_agency->countrie_id) selected @endif>
                                                                {{ $country->country }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('countrie_id')
                                                    <div class="form-control-feedback" style="color: red;">
                                                        {{ $message }} </div>
                                                @enderror
                                            </div>


                                            <h5 class="card-title">
                                                Person Info
                                            </h5>
                                            <hr>

                                            <div class="form-group mt-4 row @error('contact') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Contact Person
                                                </label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('contact') form-control-danger @enderror"
                                                        name="contact" value="{{ $overseas_agency->contact }}">
                                                    @error('contact')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mt-4 row @error('position') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Position
                                                </label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('position') form-control-danger @enderror"
                                                        name="position" value="{{ $overseas_agency->position }}">
                                                    @error('position')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mt-4 row @error('phone') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Phone
                                                </label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('phone') form-control-danger @enderror"
                                                        name="phone" value="{{ $overseas_agency->phone }}">
                                                    @error('phone')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mt-4 row @error('email') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Email
                                                </label>
                                                <div class="col-9">
                                                    <input type="text"
                                                        class="form-control @error('email') form-control-danger @enderror"
                                                        name="email" value="{{ $overseas_agency->email }}">
                                                    @error('email')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="form-group mt-4 row @error('remark') has-danger @enderror">
                                                <label class="col-3 col-form-label">
                                                    Remark
                                                </label>
                                                <div class="col-9">
                                                    <textarea name="remark" class="form-control" rows="5">{{ $overseas_agency->remark }}</textarea>
                                                    @error('remark')
                                                        <div class="form-control-feedback" style="color: red;">
                                                            {{ $message }} </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <hr>
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
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateOverseaAgency', '#create-form') !!}
@endsection
