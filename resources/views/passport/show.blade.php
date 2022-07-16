@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Passport</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('passport.index') }}">Passport</a>
                    </li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
                <a href="{{ route('passport.edit', $passport->id) }}"
                    class="btn btn-success d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-edit"></i>
                    Edit Data
                </a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center py-5">
        <div class="col-lg-8 py-3">
            <a href="{{ route('passport_detail_export', $passport->id) }}"
                class="btn waves-effect waves-light btn-success">
                Export to Excel
            </a>
            <br><br>
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Person Info
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">
                            Labour of Card No
                        </th>
                        <td>
                            {{ $passport->labour_card_no ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Issue of Labour Date
                        </th>
                        <td>
                            {{ $passport->issue_labour_date }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Name</th>
                        <td>
                            {{ $passport->name }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Photo
                        </th>
                        <td>
                            @if ($passport->photo)
                                <img src="{{ Storage::url($passport->photo) }}" alt=""
                                    style="width: 20%; height: 20%; background-position: center; background-size: contain, cover;">
                            @endif
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Gender</th>
                        <td>
                            {{ ucfirst(trans($passport->gender)) }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">N.R.C No</th>
                        <td>
                            {{ $passport->nrc }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Father Name</th>
                        <td>
                            {{ $passport->father_name }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Qualification</th>
                        <td>
                            {{ $passport->qualification }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Date of Birth</th>
                        <td>
                            {{ $passport->date_of_birth }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Address In Myanmar
                        </th>
                        <td>
                            {{ $passport->address }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Phone</th>
                        <td>
                            {{ $passport->phone }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Job</th>
                        <td>
                            {{ $passport->job }}
                        </td>
                    <tr>


                    <tr>
                        <th style="width: 50%">Passport No</th>
                        <td>
                            {{ $passport->passport }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Issue Date of Passport
                        </th>
                        <td>
                            {{ $passport->passport_date }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Identification Card
                        </th>
                        <td>
                            {{ $passport->identification_card ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Issue Date of ID Card
                        </th>
                        <td>
                            {{ $passport->issue_date_id_card ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">OWIC</th>
                        <td>
                            {{ $passport->owic }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">OWIC Date</th>
                        <td>
                            {{ $passport->owic_date }}
                        </td>
                    <tr>


                    <tr>
                        <th style="width: 50%">Place of Passport</th>
                        <td>
                            {{ $passport->place_of_passport }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Salary
                        </th>
                        <td>
                            {{ $passport->salary ?? '' }}
                        </td>
                    <tr>
                </table>


                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Covid Info
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">
                            Covid Vaccination Dose
                        </th>
                        <td>
                            {{ $passport->covid_status ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Vaccine Name
                        </th>
                        <td>
                            {{ $passport->vaccine_name ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Number
                        </th>
                        <td>
                            {{ $passport->covid_number ?? '' }}
                        </td>
                    <tr>
                </table>

                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Additional Contact Info
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">
                            Contact Person
                        </th>
                        <td>
                            {{ $passport->contact_person ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Phone
                        </th>
                        <td>
                            {{ $passport->phone_number ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Relative
                        </th>
                        <td>
                            {{ $passport->relative ?? '' }}
                        </td>
                    <tr>
                </table>

                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Local Agent Info
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">Local Agent Name</th>
                        <td>
                            {{ $passport->local_agent_name }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Local Agent Phone</th>
                        <td>
                            {{ $passport->local_agent_phone }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Local Agent Email</th>
                        <td>
                            {{ $passport->local_agent_email }}
                        </td>
                    <tr>
                </table>


                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Remark
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">Remark</th>
                        <td>
                            {{ $passport->remark }}
                        </td>
                    <tr>
                </table>


                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Operation Status
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">Reject Status</th>
                        <td style="background-color: {{ $passport->reject_status ? 'red' : '#3c9e76' }}; color: white;">
                            {{ $passport->reject_status ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Reject Date</th>
                        <td>
                            {{ $passport->reject_date ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Reject Reason</th>
                        <td>
                            {{ $passport->reject_reason ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Factory's Name</th>
                        <td>
                            {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Contract Date</th>
                        <td>
                            {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">Sending Date</th>
                        <td>
                            {{ $passport->labour_management_table->sendings_table->sending_date ?? '' }}
                        </td>
                    <tr>
                </table>

                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        Leave
                    </h4>
                </div>
                <table class="table color-bordered-table inverse-bordered-table">
                    <tr>
                        <th style="width: 50%">
                            Status
                        </th>
                        <td>
                            {{ $passport->leave_status }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Leave Date
                        </th>
                        <td>
                            {{ $passport->leave_date }}
                        </td>
                    <tr>

                    <tr>
                        <th style="width: 50%">
                            Leave Date
                        </th>
                        <td>
                            {{ $passport->leave_remark }}
                        </td>
                    <tr>
                </table>
            </div>
        </div>
    </div>
@endsection
