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
                        <a href="{{ route('enquiry.index') }}">Passport</a>
                    </li>
                    <li class="breadcrumb-item active">Table</li>
                </ol>
                <a href="{{ route('enquiry.create') }}" class="btn btn-success d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-5 col-sm-12 col-md-5">
                            <span>Export</span>
                            <div class="button-group">
                                <a href="{{ route('passport_export') }}" class="btn waves-effect waves-light btn-success">
                                    Export to Excel
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12 col-md-3">
                            <span>Search</span>
                            <form action="{{ route('passport.index') }}" method="GET" autocomplete="off">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search: Name or NRC"
                                                name="search">
                                            <button class="btn btn-success" type="submit"
                                                id="button-addon2">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <span>Filter Search (Join Date)</span>
                            <form action="{{ route('passport.index') }}" method="GET" autocomplete="off">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" name="from_date">
                                            <input type="date" class="form-control" name="to_date">
                                            <button class="btn btn-success" type="submit"
                                                id="button-addon2">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive  py-3">
                    <span style="margin: 2px; font-weight: bold;">Total: {{ count($passports) }}</span>
                    <table class="table  muted-bordered-table" style="margin-bottom: 20em">
                        <thead class="table_bg">
                            <tr>
                                <th class="header" scope="col" style="width: 1%;">#</th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Labour of Card No
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Issue of Labour Date
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Name
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    M/F
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    N.R.C No
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Father's Name
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Qualification
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Date of Birth
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Address in Myanmar
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Job
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Factory's Name
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Passport No
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Issue Date of Passport
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Identification Card
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Issue Date of ID Card
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Place of Passport
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    Salary
                                </th>
                                <th class="header" scope="col" style="ext-align: center;">
                                    OWIC
                                </th>
                                <th class="header" scope="col" style="text-align: center;">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($passports as $key => $passport)
                                <tr>
                                    <td style="text-align: center;">
                                        {{ $key + 1 }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->labour_card_no ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->issue_labour_date ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->name }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ ucfirst($passport->gender ?? '') }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->nrc ?? '-' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->father_name ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->qualification ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->date_of_birth ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->address ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->job ?? '' }}
                                    </td>
                                    <td>
                                        {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->passport ?? '-' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->passport_date ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->identification_card ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->issue_date_id_card ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->place_of_passport ?? '-' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->owic ?? '-' }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $passport->phone ?? '-' }}
                                    </td>
                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item"
                                                    href="{{ route('owic.edit', $passport->id) }}">
                                                    OWIC
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('reject.edit', $passport->id) }}">
                                                    Reject
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('passport_leave.edit', $passport->id) }}">
                                                    Leave
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('passport.edit', $passport->id) }}">
                                                    Edit
                                                </a>

                                                <form action="{{ route('passport.destroy', $passport->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">
                                                        Delete
                                                    </button>
                                                </form>

                                                <a class="dropdown-item"
                                                    href="{{ route('passport.show', $passport->id) }}">
                                                    View Detail
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $passports->links() !!}
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
@endsection

@section('script')
@endsection
