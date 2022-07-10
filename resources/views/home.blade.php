@extends('layouts.main')
@section('content')
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
        </div>

        <div class="row g-0">
            <div class="col-lg-3 col-md-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3>
                                            <i class="icon-screen-desktop"></i>
                                        </h3>
                                        <p class="text-muted">
                                            Total Passport
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <h2 class="counter text-primary">
                                            {{ $passport_total ?? 0 }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3>
                                            <i class="icon-doc"></i>
                                        </h3>
                                        <p class="text-muted">
                                            Demand
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <h2 class="counter text-purple">
                                            {{ $new_demands_total ?? 0 }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3>
                                            <i class="icon-bag"></i>
                                        </h3>
                                        <p class="text-muted">
                                            Contract
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <h2 class="counter text-success">
                                            {{ $contracts_total ?? 0 }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3>
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </h3>
                                        <p class="text-muted">Sending</p>
                                    </div>
                                    <div class="ms-auto">
                                        <h2 class="counter text-cyan">
                                            {{ $sendings_total ?? 0 }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-cyan" role="progressbar" style="width: 100%; height: 6px;"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Demand
                        </h5>

                        <table class="table browser m-t-30 no-border">
                            <tbody>
                                @foreach ($countryies as $country)
                                    <tr>
                                        <td style="width:40px">
                                            <img src="{{ asset('data/icon1.png') }}" alt="logo" style="width: 300%;">
                                        </td>
                                        <td>
                                            {{ $country->country ?? '' }}
                                        </td>
                                        <td align="right">
                                            <span class="badge rounded-pill bg-info">
                                                @php
                                                    $demand_country_total = [];
                                                @endphp
                                                @foreach ($country->demands_table as $key => $demands)
                                                    @php
                                                        $demand_country_total[] = 1;
                                                    @endphp
                                                @endforeach
                                                @php
                                                    echo array_sum($demand_country_total);
                                                @endphp
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Sending Worker (Demo Data)
                        </h5>
                        <canvas id="myChart" height="90px"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title header-elements">
                            <h5 class="m-0 me-2">
                                login history
                            </h5>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-sm">
                            <thead class="tbbg">
                                <tr>
                                    <th style="color: black; background-color: #59c1c9; text-align: center; width: 1%;">#
                                    </th>
                                    <th style="color: black; background-color: #59c1c9; text-align: center;">Name</th>
                                    <th style="color: black; background-color: #59c1c9; text-align: center;">Email</th>
                                    <th style="color: black; background-color: #59c1c9; text-align: center;">Last Login At
                                    </th>
                                    <th style="color: black; background-color: #59c1c9; text-align: center;">Last Login IP
                                    </th>
                                    <th style="color: black; background-color: #59c1c9; text-align: center;">Devices</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($employees as $key => $value)
                                    <tr>
                                        <td style="text-align: center;">
                                            {{ $key + 1 }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $value->name }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $value->email }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $value->last_login_at }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $value->last_login_ip }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $value->devices }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script type="text/javascript">
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Japan', 'Singapore', 'Thailand', 'Malaysia'],
                datasets: [{
                    label: '# Sending Worker',
                    data: [1000, 900, 1500, 1200],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
