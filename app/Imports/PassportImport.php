<?php

namespace App\Imports;

use App\Models\Passport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PassportImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Passport([
            'labour_card_no' => strval($row['labour_card_no']),
            'issue_labour_date' => strval($row['issue_labour_date']),
            'name' => strval($row['name']),
            'gender' => strval($row['gender']),
            'nrc' => strval($row['nrc']),
            'father_name' => strval($row['father_name']),
            'qualification' => strval($row['qualification']),
            'date_of_birth' => strval($row['date_of_birth']),
            'address' => strval($row['address']),
            'phone' => strval($row['phone']),
            'job' => strval($row['job']),
            'passport' => strval($row['passport']),
            'passport_date' => strval($row['passport_date']),
            'identification_card' => strval($row['identification_card']),
            'issue_date_id_card' => strval($row['issue_date_id_card']),
            'place_of_passport' => strval($row['place_of_passport']),
            'salary' => strval($row['salary']),
            'covid_status' => strval($row['covid_status']),
            'vaccine_name' => strval($row['vaccine_name']),
            'covid_number' => strval($row['covid_number']),
            'contact_person' => strval($row['contact_person']),
            'phone_number' => strval($row['phone_number']),
            'relative' => strval($row['relative']),
            'local_agent_name' => strval($row['local_agent_name']),
            'local_agent_phone' => strval($row['local_agent_phone']),
            'local_agent_email' => strval($row['local_agent_email']),
            'remark' => strval($row['remark']),
            'join_date' => date("Y-m-d"),
        ]);
    }
}
