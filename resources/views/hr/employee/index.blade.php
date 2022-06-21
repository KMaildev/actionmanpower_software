@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Employees</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('employee.index') }}">Employees</a>
                    </li>
                    <li class="breadcrumb-item active">Table</li>
                </ol>
                <a href="{{ route('employee.create') }}" class="btn btn-success d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">

                <div class="table-responsive py-3">
                    <table class="table color-table success-table color-bordered-table muted-bordered-table">
                        <thead>
                            <tr>
                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                <th style="color: white; text-align: center;">ID</th>
                                <th style="color: white; text-align: center;">Name</th>
                                <th style="color: white; text-align: center;">Email</th>
                                <th style="color: white; text-align: center;">Phone</th>
                                <th style="color: white; text-align: center;">NRC Number</th>
                                <th style="color: white; text-align: center;">Department</th>
                                <th style="color: white; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $key => $value)
                                <tr>
                                    <td style="text-align: center;">
                                        {{ $key + 1 }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $value->employee_id }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $value->name }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $value->email }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $value->phone }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $value->nrc_number }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->department->title ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="{{ route('employee.edit', $value->id) }}" class="btn btn-sm btn-success">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
