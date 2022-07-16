<table class="table">
    <thead>
        <tr>
            <th style="width: 1%;">#</th>
            <th style="width: 3vh; text-align: center;">
                Labour of Card No
            </th>
            <th style="width: 3vh; text-align: center;">
                Issue of Labour Date
            </th>
            <th style="width: 3vh; text-align: center;">
                Name
            </th>
            <th style="width: 3vh; text-align: center;">
                M/F
            </th>
            <th style="width: 3vh; text-align: center;">
                N.R.C No
            </th>
            <th style="width: 3vh; text-align: center;">
                Father's Name
            </th>
            <th style="width: 3vh; text-align: center;">
                Qualification
            </th>
            <th style="width: 3vh; text-align: center;">
                Date of Birth
            </th>
            <th style="width: 3vh; text-align: center;">
                Address in Myanmar
            </th>
            <th style="width: 3vh; text-align: center;">
                Phone
            </th>
            <th style="width: 3vh; text-align: center;">
                Job
            </th>
            <th style="width: 3vh; text-align: center;">
                Factory's Name
            </th>
            <th style="width: 3vh; text-align: center;">
                Passport No
            </th>
            <th style="width: 3vh; text-align: center;">
                Issue Date of Passport
            </th>
            <th style="width: 3vh; text-align: center;">
                Identification Card
            </th>
            <th style="width: 3vh; text-align: center;">
                Issue Date of ID Card
            </th>
            <th style="width: 3vh; text-align: center;">
                Place of Passport
            </th>
            <th style="width: 3vh; text-align: center;">
                Salary
            </th>
            <th style="width: 3vh; text-align: center;">
                OWIC
            </th>
            <th style="width: 3vh; text-align: center;">
                Issue Date of ID OWIC
            </th>
            <th style="width: 3vh; text-align: center;">
                Covid Vaccination Dose
            </th>
            <th style="width: 3vh; text-align: center;">
                Vaccine Name
            </th>
            <th style="width: 3vh; text-align: center;">
                Number
            </th>
            <th style="width: 3vh; text-align: center;">
                Contact Person
            </th>
            <th style="width: 3vh; text-align: center;">
                Phone
            </th>
            <th style="width: 3vh; text-align: center;">
                Relative
            </th>
            <th style="width: 3vh; text-align: center;">
                Local Agent Name
            </th>
            <th style="width: 3vh; text-align: center;">
                Local Agent Phone
            </th>
            <th style="width: 3vh; text-align: center;">
                Local Agent Email
            </th>
            <th style="width: 3vh; text-align: center;">
                Remark
            </th>
            <th style="width: 3vh; text-align: center;">
                Reject Status
            </th>
            <th style="width: 3vh; text-align: center;">
                Reject Date
            </th>
            <th style="width: 3vh; text-align: center;">
                Reject Reason
            </th>
            <th style="width: 3vh; text-align: center;">
                Contract Date
            </th>
            <th style="width: 3vh; text-align: center;">
                Sending Date
            </th>
            <th style="width: 3vh; text-align: center;">
                Leave
            </th>
            <th style="width: 3vh; text-align: center;">
                Leave Date
            </th>
            <th style="width: 3vh; text-align: center;">
                Leave Remark
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($passports as $key => $passport)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $passport->labour_card_no }}</td>
                <td>{{ $passport->issue_labour_date }}</td>
                <td>{{ $passport->name }}</td>
                <td>{{ ucfirst($passport->gender ?? '-') }}</td>
                <td>{{ $passport->nrc ?? '-' }}</td>
                <td>{{ $passport->father_name ?? '-' }}</td>
                <td>{{ $passport->qualification ?? '-' }}</td>
                <td>{{ $passport->date_of_birth ?? '-' }}</td>
                <td>{{ $passport->address ?? '-' }}</td>
                <td>{{ $passport->phone ?? '-' }}</td>
                <td>{{ $passport->job ?? '-' }}</td>
                <td>
                    {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
                </td>
                <td>{{ $passport->passport ?? '-' }}</td>
                <td>{{ $passport->passport_date ?? '-' }}</td>
                <td>{{ $passport->identification_card ?? '-' }}</td>
                <td>{{ $passport->issue_date_id_card ?? '-' }}</td>
                <td>{{ $passport->place_of_passport ?? '-' }}</td>
                <td>{{ $passport->salary ?? '-' }}</td>
                <td>{{ $passport->owic ?? '-' }}</td>
                <td>{{ $passport->owic_date ?? '-' }}</td>
                <td>{{ $passport->covid_status ?? '-' }}</td>
                <td>{{ $passport->vaccine_name ?? '-' }}</td>
                <td>{{ $passport->covid_number ?? '-' }}</td>
                <td>{{ $passport->contact_person ?? '-' }}</td>
                <td>{{ $passport->phone_number ?? '-' }}</td>
                <td>{{ $passport->relative ?? '-' }}</td>
                <td>{{ $passport->local_agent_name ?? '-' }}</td>
                <td>{{ $passport->local_agent_phone ?? '-' }}</td>
                <td>{{ $passport->local_agent_email ?? '-' }}</td>
                <td>{{ $passport->remark ?? '-' }}</td>
                <td style="background-color: {{ $passport->reject_status ? 'red' : '#3c9e76' }};">
                    {{ $passport->reject_status ?? '-' }}
                </td>
                <td>{{ $passport->reject_date ?? '-' }}</td>
                <td>{{ $passport->reject_reason ?? '-' }}</td>
                <td>
                    {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
                </td>
                <td>
                    {{ $passport->labour_management_table->sendings_table->sending_date ?? '' }}
                </td>
                <td>
                    {{ $passport->leave_status ?? '' }}
                </td>
                <td>
                    {{ $passport->leave_date ?? '' }}
                </td>
                <td>
                    {{ $passport->leave_remark ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
