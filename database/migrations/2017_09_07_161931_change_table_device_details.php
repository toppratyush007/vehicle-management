<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTableDeviceDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('device_details', function(Blueprint $table){

            $table->string('status')->change();
            $table->string('name');
        });

        // filling some default data
        $devices = config('softclouds.devices');
        foreach ($devices as $name => $info) {
            $deviceDetails = new \App\Models\DeviceDetails();
            $deviceDetails->device_id = $info['id'];
            $deviceDetails->status = $info['status'];
            $deviceDetails->name = $name;
            $deviceDetails->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
