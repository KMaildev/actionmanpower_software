<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Sending extends Model
{

    use LogsActivity;
    protected static $logName = 'sendings_log';
    protected static $logAttributes = ['sending_date', 'sending_male', 'sending_female', 'remark', 'demand_id', 'contract_id', 'created_at', 'updated_at'];


    public function demands_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }
}
