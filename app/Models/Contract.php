<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contract extends Model
{

    use LogsActivity;
    protected static $logName = 'contracts_log';
    protected static $logAttributes = ['contract_date', 'contract_male', 'contract_female', 'remark', 'demand_id', 'created_at', 'updated_at'];

    public function demands_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }
}
