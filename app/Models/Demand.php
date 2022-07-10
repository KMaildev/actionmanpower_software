<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Demand extends Model
{

    use LogsActivity;
    protected static $logName = 'demands_log';
    protected static $logAttributes = ['countrie_id', 'overseas_agencie_id', 'male', 'female', 'demand_date', 'cabinet_date', 'issue_date', 'issue_number', 'demand_status', 'coe_date', 'coe_number', 'pin_date', 'pin_number', 'created_at', 'updated_at'];

    public function overseas_agencies_table()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencie_id', 'id');
    }

    public function contracts_table()
    {
        return $this->belongsTo(Contract::class, 'id', 'demand_id');
    }

    public function sendings_table()
    {
        return $this->belongsTo(Sending::class, 'id', 'demand_id');
    }
}
