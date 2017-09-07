<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceDetails extends Model
{
    protected $table = 'device_details';
    protected $primaryKey = 'device_id';
    protected $guarded = [];
    public $timestamps = false;
}
