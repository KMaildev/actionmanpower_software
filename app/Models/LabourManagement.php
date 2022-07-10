<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class LabourManagement extends Model
{

    use LogsActivity;
    protected static $logName = 'labour_management_log';
    protected static $logAttributes = ['passport_id', 'demand_id', 'contract_id', 'overseas_agencies_id', 'created_at', 'updated_at'];


    public function passports_table()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'id');
    }

    public function overseas_agencies_table()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencies_id', 'id');
    }

    public function contract_table()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }


    public function sendings_table()
    {
        return $this->belongsTo(Sending::class, 'contract_id', 'contract_id');
    }
}
