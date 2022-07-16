<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Passport extends Model
{

    use LogsActivity;
    protected static $logName = 'passports_log';
    protected static $logAttributes = [
        'owic',
        'owic_date',
        'reject_status',
        'reject_date',
        'reject_reason',
        'labour_card_no',
        'issue_labour_date',
        'name',
        'gender',
        'nrc',
        'father_name',
        'qualification',
        'date_of_birth',
        'address',
        'phone',
        'job',
        'passport',
        'passport_date',
        'identification_card',
        'issue_date_id_card',
        'place_of_passport',
        'salary',
        'covid_status',
        'vaccine_name',
        'covid_number',
        'contact_person',
        'phone_number',
        'relative',
        'local_agent_name',
        'local_agent_phone',
        'local_agent_email',
        'remark',
        'join_date',
        'leave_status',
        'leave_date',
        'leave_remark',
        'created_at',
        'updated_at',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'labour_card_no',
        'issue_labour_date',
        'name',
        'gender',
        'nrc',
        'father_name',
        'qualification',
        'date_of_birth',
        'address',
        'phone',
        'job',
        'passport',
        'passport_date',
        'identification_card',
        'issue_date_id_card',
        'place_of_passport',
        'salary',
        'covid_status',
        'vaccine_name',
        'covid_number',
        'contact_person',
        'phone_number',
        'relative',
        'local_agent_name',
        'local_agent_phone',
        'local_agent_email',
        'remark',
        'join_date',
        'leave_status',
        'leave_date',
        'leave_remark',
        'join_date',
        'enquiry',
    ];


    public function labour_management_table()
    {
        return $this->belongsTo(LabourManagement::class, 'id', 'passport_id');
    }
}
