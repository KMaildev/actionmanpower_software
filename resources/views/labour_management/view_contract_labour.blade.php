@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-9">
            {{-- Contract Labour List --}}
            <div class="card-header bg-info">
                <h4 class="mb-0 text-white">
                    Contract Labours
                </h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('export_contract_labour', $demand->id) }}" class="btn btn-success btn-sm">
                        Export to Excel
                    </a>
                    <div class="table-responsive m-t-20">
                        <table class="table display table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 1%;">#</th>
                                    <th style="width: 5%; text-align: center;">Name</th>
                                    <th style="width: 1%; text-align: center;">M/F</th>
                                    <th style="width: 3%; text-align: center;">NRC</th>
                                    <th style="width: 5%; text-align: center;">Father Name</th>
                                    <th style="width: 3%; text-align: center;">Passport No</th>
                                    <th style="width: 1%; text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contract_labours as $key => $contract_labour)
                                    <tr>
                                        <td style="text-align: center;">
                                            {{ $key + 1 }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $contract_labour->passports_table->name }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ ucfirst($contract_labour->passports_table->gender ?? '-') }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $contract_labour->passports_table->nrc ?? '-' }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $contract_labour->passports_table->father_name ?? '-' }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $contract_labour->passports_table->passport ?? '-' }}
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('delete_labour', $contract_labour->id) }}">
                                                        Remove
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('passport.edit', $contract_labour->passports_table->id) }}">View
                                                        Detail</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">
                        Information
                    </h4>
                </div>
                <table class="table no-border" style="margin-bottom: 1em !important">
                    <p style="padding-top: 10px; padding-left: 10px; font-weight: bold;">
                        Demand Information
                    </p>
                    <tbody>
                        <tr>
                            <td>Oversea Company</td>
                            <td class="font-medium">
                                {{ $demand->overseas_agencies_table->company_name ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Date</td>
                            <td class="font-medium">
                                {{ $demand->demand_date ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Cabinet Date</td>
                            <td class="font-medium">
                                {{ $demand->cabinet_date ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Male</td>
                            <td class="font-medium">
                                {{ $demand->male ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Female</td>
                            <td class="font-medium">
                                {{ $demand->female ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Total</td>
                            <td class="font-medium">
                                {{ $demand->male + $demand->female }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table no-border">
                    <p style="padding-top: 10px; padding-left: 10px; font-weight: bold;">
                        Contract Information
                    </p>
                    <tbody>
                        <tr>
                            <td>Contract Date</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_date ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Contract Male</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_male ?? '0' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Contract Female</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_female ?? '0' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Contract Total</td>
                            <td class="font-medium">
                                @php
                                    $contract_male = $demand->contracts_table->contract_male ?? 0;
                                    $contract_female = $demand->contracts_table->contract_female ?? 0;
                                    $contract_total = $contract_male + $contract_female;
                                    echo $contract_total;
                                @endphp
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <br><br><br>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreLabourManagement', '#create-form') !!}
@endsection
