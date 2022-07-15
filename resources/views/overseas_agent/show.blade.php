@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Overseas Agent</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('overseas_agent.index') }}">Overseas Agent</a>
                    </li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
                <a href="{{ route('overseas_agent.edit', $overseas_agency->id) }}"
                    class="btn btn-success d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-edit"></i>
                    Edit Data
                </a>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center py-5">
        <div class="col-md-9 col-lg-9 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">

                                <div class="card">

                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">
                                            Employer/Company Info
                                        </h4>
                                    </div>
                                    <table class="table color-bordered-table inverse-bordered-table">
                                        <tr>
                                            <th style="width: 40%">
                                                Employer/Company
                                            </th>
                                            <td>
                                                {{ $overseas_agency->company_name }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Logo
                                            </th>
                                            <td>
                                                @if ($overseas_agency->logo)
                                                    <img src="{{ Storage::url($overseas_agency->logo) }}" alt=""
                                                        style="width: 13%; height: auto; background-position: center; background-size: contain, cover;">
                                                @endif
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Type of Company
                                            </th>
                                            <td>
                                                {{ $overseas_agency->type_of_company }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Company Phone
                                            </th>
                                            <td>
                                                {{ $overseas_agency->company_phone }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Company Email
                                            </th>
                                            <td>
                                                <a href="mailto:{{ $overseas_agency->company_email ?? '#' }}">
                                                    {{ $overseas_agency->company_email }}
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Company Address
                                            </th>
                                            <td>
                                                {{ $overseas_agency->company_address }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Website
                                            </th>
                                            <td>
                                                <a href="{{ $overseas_agency->website ?? '#' }}">
                                                    {{ $overseas_agency->website }}
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Country
                                            </th>
                                            <td>
                                                {{ $overseas_agency->countries_table->country }}
                                            </td>
                                        <tr>
                                    </table>

                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">
                                            Person Info
                                        </h4>
                                    </div>
                                    <table class="table color-bordered-table inverse-bordered-table">
                                        <tr>
                                            <th style="width: 40%">
                                                Contact Person
                                            </th>
                                            <td>
                                                {{ $overseas_agency->contact }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Position
                                            </th>
                                            <td>
                                                {{ $overseas_agency->position }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Phone
                                            </th>
                                            <td>
                                                {{ $overseas_agency->phone }}
                                            </td>
                                        <tr>
                                        <tr>
                                            <th style="width: 40%">
                                                Email
                                            </th>
                                            <td>
                                                <a href="mailto:{{ $overseas_agency->email ?? '#' }}">
                                                    {{ $overseas_agency->email }}
                                                </a>
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
                                            <th style="width: 40%">
                                                Remark
                                            </th>
                                            <td>
                                                {{ $overseas_agency->remark ?? '' }}
                                            </td>
                                        <tr>
                                    </table>
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
@endsection
