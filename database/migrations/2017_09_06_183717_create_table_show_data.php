<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShowData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_data', function (Blueprint $table){

            $table->increments('id');
            $table->string('device_id')->references('device_id')->on('device_details');
            $table->float('engine_load');
            $table->integer('engine_coolent_temp')->nullable();
            $table->float('fuel_pressure')->nullable();
            $table->float('intake_manifold_pressure')->nullable();
            $table->integer('engine_rpm')->nullable();
            $table->integer('speed')->nullable();
            $table->integer('intake_air_temp')->nullable();
            $table->integer('mass_airflow_rate')->nullable();
            $table->integer('throttle_position')->nullable();
            $table->integer('runtime_since_engine_start')->nullable();
            $table->integer('dist_travelled_with_MIL')->nullable();
            $table->float('fuel_rail_pressure')->nullable();
            $table->float('o2_sensor1')->nullable();
            $table->float('o2_sensor2')->nullable();
            $table->float('o2_sensor3')->nullable();
            $table->float('o2_sensor4')->nullable();
            $table->float('o2_sensor5')->nullable();
            $table->float('o2_sensor6')->nullable();
            $table->float('o2_sensor7')->nullable();
            $table->float('o2_sensor8')->nullable();
            $table->float('fuel_level')->nullable();
            $table->integer('dist_travelled_since_code_cleared')->nullable();
            $table->float('barometric_pressure')->nullable();
            $table->integer('relative_throttle_position')->nullable();
            $table->integer('ambient_air_temp')->nullable();
            $table->integer('absolute_throttle_position_B')->nullable();
            $table->integer('absolute_throttle_position_D')->nullable();
            $table->integer('absolute_throttle_position_E')->nullable();
            $table->integer('absolute_throttle_position_F')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('show_data');
    }
}
