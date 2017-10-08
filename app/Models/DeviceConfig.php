<?php

namespace App\Models;

class DeviceConfig extends BaseModel
{
    protected $table = 'device_config';
    protected $primaryKey = 'vehicle_id';

    protected $casts = [
        'vehicle_id' => 'string'
    ];

}
