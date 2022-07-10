<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Country extends Model
{
    use LogsActivity;
    protected static $logName = 'countries_log';
    protected static $logAttributes = ['country', 'created_at', 'updated_at'];

    public function demands_table()
    {
        return $this->hasMany(Demand::class, 'countrie_id', 'id');
    }
}
