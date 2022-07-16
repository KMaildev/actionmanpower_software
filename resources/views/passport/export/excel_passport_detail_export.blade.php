<table>
    <tr>
        <td style="width: 5vh; background-color: #41AAF3;" colspan="2">
            Person Info
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Labour of Card No
        </td>
        <td style="width: 5vh">
            {{ $passport->labour_card_no ?? '' }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Issue of Labour Date
        </td>
        <td style="width: 5vh">
            {{ $passport->issue_labour_date }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">Name</td>
        <td style="width: 5vh">
            {{ $passport->name }}
        </td>
    <tr>


    <tr>
        <td style="width: 5vh">Gender</td>
        <td style="width: 5vh">
            {{ ucfirst(trans($passport->gender)) }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">N.R.C No</td>
        <td style="width: 5vh">
            {{ $passport->nrc }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">Father Name</td>
        <td style="width: 5vh">
            {{ $passport->father_name }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">Qualification</td>
        <td style="width: 5vh">
            {{ $passport->qualification }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">Date of Birth</td>
        <td style="width: 5vh">
            {{ $passport->date_of_birth }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Address In Myanmar
        </td>
        <td style="width: 5vh">
            {{ $passport->address }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">Phone</td>
        <td style="width: 5vh">
            {{ $passport->phone }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">Job</td>
        <td style="width: 5vh">
            {{ $passport->job }}
        </td>
    <tr>


    <tr>
        <td style="width: 5vh">Passport No</td>
        <td style="width: 5vh">
            {{ $passport->passport }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Issue Date of Passport
        </td>
        <td style="width: 5vh">
            {{ $passport->passport_date }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Identification Card
        </td>
        <td style="width: 5vh">
            {{ $passport->identification_card ?? '' }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Issue Date of ID Card
        </td>
        <td style="width: 5vh">
            {{ $passport->issue_date_id_card ?? '' }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">OWIC</td>
        <td style="width: 5vh">
            {{ $passport->owic }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">OWIC Date</td>
        <td style="width: 5vh">
            {{ $passport->owic_date }}
        </td>
    <tr>


    <tr>
        <td style="width: 5vh">Place of Passport</td>
        <td style="width: 5vh">
            {{ $passport->place_of_passport }}
        </td>
    <tr>

    <tr>
        <td style="width: 5vh">
            Salary
        </td>
        <td style="width: 5vh">
            {{ $passport->salary ?? '' }}
        </td>
    <tr>
</table>

<table class="table">
    <tr>
        <td style="width: 5vh; background-color: #41AAF3;" colspan="2">
            Covid Info
        </td>
    <tr>
    <tr>
        <th style="width: 5vh;">
            Covid Vaccination Dose
        </th>
        <td>
            {{ $passport->covid_status ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Vaccine Name
        </th>
        <td>
            {{ $passport->vaccine_name ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Number
        </th>
        <td>
            {{ $passport->covid_number ?? '' }}
        </td>
    <tr>
</table>


<table class="table color-bordered-table inverse-bordered-table">

    <tr>
        <td style="width: 5vh;; background-color: #41AAF3;" colspan="2">
            Additional Contact Info
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Contact Person
        </th>
        <td>
            {{ $passport->contact_person ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Phone
        </th>
        <td>
            {{ $passport->phone_number ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Relative
        </th>
        <td>
            {{ $passport->relative ?? '' }}
        </td>
    <tr>
</table>


<table class="table color-bordered-table inverse-bordered-table">

    <tr>
        <td style="width: 5vh;; background-color: #41AAF3;" colspan="2">
            Local Agent Info
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Local Agent Name</th>
        <td>
            {{ $passport->local_agent_name }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Local Agent Phone</th>
        <td>
            {{ $passport->local_agent_phone }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Local Agent Email</th>
        <td>
            {{ $passport->local_agent_email }}
        </td>
    <tr>
</table>


<table class="table color-bordered-table inverse-bordered-table">
    <tr>
        <td style="width: 5vh;; background-color: #41AAF3;" colspan="2">
            Remark
        </td>
    <tr>
    <tr>
        <th style="width: 5vh;">Remark</th>
        <td>
            {{ $passport->remark }}
        </td>
    <tr>
</table>

<table class="table color-bordered-table inverse-bordered-table">
    <tr>
        <td style="width: 5vh;; background-color: #41AAF3;" colspan="2">
            Operation Status
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Reject Status</th>
        <td style="background-color: {{ $passport->reject_status ? 'red' : '#3c9e76' }}; color: white;">
            {{ $passport->reject_status ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Reject Date</th>
        <td>
            {{ $passport->reject_date ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Reject Reason</th>
        <td>
            {{ $passport->reject_reason ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Factory's Name</th>
        <td>
            {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Contract Date</th>
        <td>
            {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">Sending Date</th>
        <td>
            {{ $passport->labour_management_table->sendings_table->sending_date ?? '' }}
        </td>
    <tr>
</table>

<table class="table">
    <tr>
        <td style="width: 5vh;; background-color: #41AAF3;" colspan="2">
            Leave
        </td>
    <tr>
    <tr>
        <th style="width: 5vh;">
            Status
        </th>
        <td>
            {{ $passport->leave_status }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Leave Date
        </th>
        <td>
            {{ $passport->leave_date }}
        </td>
    <tr>

    <tr>
        <th style="width: 5vh;">
            Leave Date
        </th>
        <td>
            {{ $passport->leave_remark }}
        </td>
    <tr>
</table>
