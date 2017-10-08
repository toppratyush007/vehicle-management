<?php

namespace App\Models;


class DeviceDetails extends BaseModel
{
    protected $table = 'device_details';
    protected $primaryKey = 'device_id';
    protected $casts = [
        'device_id' => 'string'
    ];
}
