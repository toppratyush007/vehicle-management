<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceConfig extends Model
{
    public $timestamps = false;
    protected $table = 'device_config';
    protected $primaryKey = 'device_id';
    protected $guarded = [];

}
