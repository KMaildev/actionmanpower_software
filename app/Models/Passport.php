<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Passport extends Model
{

    use LogsActivity;
    protected static $logName = 'passports_log';
    protected static $logAttributes = ['name', 'father_name', 'nrc', 'date_of_birth', 'passport', 'passport_date', 'local_agent_name', 'phone', 'address', 'gender', 'remark', 'join_date', 'owic', 'owic_date', 'reject_status', 'reject_date', 'reject_reason', 'place_of_passport', 'created_at', 'updated_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'father_name', 'nrc', 'date_of_birth', 'passport', 'passport_date', 'local_agent_name', 'phone', 'address', 'gender', 'remark',
    ];


    public function labour_management_table()
    {
        return $this->belongsTo(LabourManagement::class, 'id', 'passport_id');
    }
}
