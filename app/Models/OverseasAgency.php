<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OverseasAgency extends Model
{

    use LogsActivity;
    protected static $logName = 'overseas_agencies_log';
    protected static $logAttributes = ['company_name', 'type_of_company', 'company_phone', 'company_email', 'company_address', 'countrie_id', 'contact', 'created_at', 'updated_at'];


    public function countries_table()
    {
        return $this->belongsTo(Country::class, 'countrie_id', 'id');
    }
}
