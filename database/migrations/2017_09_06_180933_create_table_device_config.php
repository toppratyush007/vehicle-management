<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDeviceConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_config', function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->string('vehicle_id')->index();
            $table->string('device_id')->references('device_id')->on('device_details');
            $table->string('registration_id');
            $table->string('protocol');
            $table->integer('entry_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_config');
    }
}
