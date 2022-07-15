@extends('layouts.main')
@section('content')
    <div class="row d-flex justify-content-center py-5">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Edit</h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" action="{{ route('passport.update', $passport->id) }}" method="POST"
                        id="edit-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h5 class="card-title">
                            Person Info
                        </h5>
                        <hr>

                        <div class="orm-group mt-4 row @error('labour_card_no') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Labour of Card No
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('labour_card_no') form-control-danger @enderror"
                                    name="labour_card_no" value="{{ $passport->labour_card_no }}">
                                @error('labour_card_no')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('issue_labour_date') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Issue of Labour Date
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('issue_labour_date') form-control-danger @enderror"
                                    value="{{ $passport->issue_labour_date }}" name="issue_labour_date">
                                @error('issue_labour_date')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('name') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('name') form-control-danger @enderror"
                                    name="name" value="{{ $passport->name }}">
                                @error('name')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row">
                            <label class="col-md-3 col-form-label">
                                Photo
                            </label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="photo">
                                @error('photo')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="preview_img my-2">
                                    @if ($passport->photo)
                                        <img src="{{ Storage::url($passport->photo) }}" alt=""
                                            style="width: 20%; height: auto; background-position: center; background-size: contain, cover;">
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="orm-group mt-4 row">
                            <label class="col-md-3 col-form-label">
                                Gender
                            </label>
                            <div class="col-md-9 py-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="male" value="male" name="gender"
                                        class="form-check-input" checked>
                                    <label class="form-check-label" for="male">Male</label>

                                    <input type="radio" id="female" value="female" name="gender"
                                        class="form-check-input">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('nrc') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                N.R.C No
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nrc" value="{{ $passport->nrc }}">
                                @error('nrc')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('father_name') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Father Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="father_name"
                                    value="{{ $passport->father_name }}">
                                @error('father_name')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('qualification') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Qualification
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="qualification"
                                    value="{{ $passport->qualification }}">
                                @error('qualification')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('date_of_birth') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Date of Birth</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="date_of_birth"
                                    value="{{ $passport->date_of_birth }}">
                                @error('date_of_birth')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('address') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Address In Myanmar
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address"
                                    value="{{ $passport->address }}">
                                @error('address')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('phone') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone"
                                    value="{{ $passport->phone }}">
                                @error('phone')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('job') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Job
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="job"
                                    value="{{ $passport->job }}">
                                @error('job')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('passport') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Passport No
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="passport"
                                    value="{{ $passport->passport }}">
                                @error('passport')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('passport_date') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Issue Date of Passport
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="passport_date"
                                    value="{{ $passport->passport_date }}">
                                @error('passport_date')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('identification_card') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Identification Card
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="identification_card"
                                    value="{{ $passport->identification_card }}">
                                @error('identification_card')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('issue_date_id_card') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Issue Date of ID Card
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="issue_date_id_card"
                                    value="{{ $passport->issue_date_id_card }}">
                                @error('issue_date_id_card')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('place_of_passport') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Place of Passport</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="place_of_passport"
                                    value="{{ $passport->place_of_passport }}">
                                @error('place_of_passport')
                                    <div class="form-control-feedback"> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('salary') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Salary
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="salary"
                                    value="{{ $passport->salary }}">
                                @error('salary')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>



                        <br><br>
                        <h5 class="card-title">
                            Covid Info
                        </h5>
                        <hr>

                        <div class="orm-group mt-4 row">
                            <label class="col-md-3 col-form-label">
                                Covid Vaccination Dose
                            </label>
                            <div class="col-md-9 py-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="CovidYes" value="Yes" name="covid_status"
                                        class="form-check-input" checked>
                                    <label class="form-check-label" for="CovidYes">Yes</label>

                                    <input type="radio" id="CovidNo" value="No" name="covid_status"
                                        class="form-check-input">
                                    <label class="form-check-label" for="CovidNo">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('vaccine_name') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Vaccine Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="vaccine_name"
                                    value="{{ $passport->vaccine_name }}">
                                @error('vaccine_name')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('covid_number') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="covid_number"
                                    value="{{ $passport->covid_number }}">
                                @error('covid_number')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <br><br>
                        <h5 class="card-title">
                            Additional Contact Info
                        </h5>
                        <hr>

                        <div class="orm-group mt-4 row @error('contact_person') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Contact Person
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('contact_person') form-control-danger @enderror"
                                    name="contact_person" value="{{ $passport->contact_person }}">
                                @error('contact_person')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('phone_number') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Phone
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('phone_number') form-control-danger @enderror"
                                    name="phone_number" value="{{ $passport->phone_number }}">
                                @error('phone_number')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('relative') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Relative
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('relative') form-control-danger @enderror" name="relative"
                                    value="{{ $passport->relative }}">
                                @error('relative')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <br><br>
                        <h5 class="card-title">
                            Local Agent Info
                        </h5>
                        <hr>
                        <div class="orm-group mt-4 row @error('local_agent_name') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Local Agent Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="local_agent_name"
                                    value="{{ $passport->local_agent_name }}">
                                @error('local_agent_name')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="orm-group mt-4 row @error('local_agent_phone') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Local Agent Phone
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="local_agent_phone"
                                    value="{{ $passport->local_agent_phone }}">
                                @error('local_agent_phone')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="orm-group mt-4 row @error('local_agent_email') has-danger @enderror">
                            <label class="col-md-3 col-form-label">
                                Local Agent Email
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="local_agent_email"
                                    value="{{ $passport->local_agent_email }}">
                                @error('local_agent_email')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <br><br>
                        <h5 class="card-title">
                            Remark
                        </h5>
                        <hr>
                        <div class="orm-group mt-4 row @error('remark') has-danger @enderror">
                            <label class="col-md-3 col-form-label">Remark</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="remark"
                                    value="{{ $passport->remark }}">
                                @error('remark')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
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
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdatePassport', '#edit-form') !!}
@endsection
