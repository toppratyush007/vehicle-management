@extends('base')
@section('title') Vehicle Management App @endsection
@section('head-script')
    @include('pusher-script')
@endsection
@section('content')
<div class="background_page"></div>

<div class="container container_property">

    <div class = "row action_bar">
        <div class="title">
            <img src="{{ url('images/softcloud_social_share.png') }}" width="160px">
            <div class="cont">
                <img src="" alt="" width="" height="">
            </div>
        </div>
    </div>

    <div class="row card_margin">
        <ul class="tabs tabs-fixed-width" style="background:#FFBD33">
            <li class="tab col s3"><a class="active font_color_tab font_color_tab_unselected" href="#common">Common</a></li>
            <li class="tab col s3"><a  href="#engine" class="font_color_tab font_color_tab_unselected">Engine</a></li>
            <li class="tab col s3"><a href="#throttle" class="font_color_tab font_color_tab_unselected">Throttle</a></li>
            <li class="tab col s3"><a href="#airfeed" class="font_color_tab font_color_tab_unselected">Air/Feed</a></li>
            <li class="tab col s3"><a href="#exhaust" class="font_color_tab font_color_tab_unselected">Exhaust</a></li>
            <li class="tab col s3"><a href="#temperature" class="font_color_tab font_color_tab_unselected">Temperature</a></li>
            <li class="tab col s3"><a href="#readiness" class="font_color_tab font_color_tab_unselected">Readiness</a></li>
        </ul>
    </div>

    <div class="row details_page">

        <!-- COMMON  -->
        <div id="common" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine RPM</u></p>
                    <p class="value color_blue engine-rpm">{{ $data['engine_rpm'] ? $data['engine_rpm']  :0 }}</p>
                    <p class="unit center_circle">rpm</p>
                </div>

                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Vehicle Speed</u></p>
                    <p class="value color_pink speed">{{ $data['speed'] ? $data['speed'] : 0 }}</p>
                    <p class="unit center_circle">km/hr</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Load Value</u></p>
                    <p class="value color_yellow engine-load">{{ $data['engine_load'] ? $data['engine_load'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Coolant Temperature</u></p>
                    <p class="value color8 engine-coolent-temp">{{ $data['engine_coolent_temp'] ? $data['engine_coolent_temp'] : 0 }}</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake Air Temperature</u></p>
                    <p class="value color7 intake-air-temp">{{ $data['intake_air_temp'] ? $data['intake_air_temp'] : 0 }}</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Control Module Voltage</u></p>
                    <p class="value color9 control-module-voltage">0</p>
                    <p class="unit center_circle">V</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Time Since Engine Start</u></p>
                    <p class="value color11 runtime-since-engine-start">{{ $data['runtime_since_engine_start'] ? $data['runtime_since_engine_start'] : 0 }}</p>
                    <p class="unit center_circle">seconds</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Distance Travelled With MIL</u></p>
                    <p class="value color8 dist-travelled-with-MIL">{{ $data['dist_travelled_with_MIL'] ? $data['dist_travelled_with_MIL'] : 0 }}</p>
                    <p class="unit center_circle">km</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>No of Warmp-ups Since Codes</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle">times</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Distance Travelled Since Codes</u></p>
                    <p class="value color6 dist-travelled-since-code-cleared">{{ $data['dist_travelled_since_code_cleared'] ? $data['dist_travelled_since_code_cleared'] : 0 }}</p>
                    <p class="unit center_circle">km</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Time Run with MIL</u></p>
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle">minute</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Time Since Trouble Codes Cleared</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">minute</p>
                </div>
            </div>

        </div>

        <!-- Engine -->

        <div id="engine" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine RPM</u></p>
                    <p class="value color_blue engine-rpm">{{ $data['engine_rpm'] ? $data['engine_rpm']  :0 }}</p>
                    <p class="unit center_circle">rpm</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Temperature</u></p>
                    <p class="value color_pink engine-coolent-temp">{{ $data['engine_coolent_temp'] ? $data['engine_coolent_temp'] : 0 }}</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Throttle Position</u></p>
                    <p class="value color_yellow throttle-position">{{ $data['throttle_position'] ? $data['throttle_position'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Ignition Timing Advance</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">o</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Calculated Engine Load</u></p>
                    <p class="value color7">{{ $data['engine_load'] ? $data['engine_load'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Load Value</u></p>
                    <p class="value color9">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Oil Temperature</u></p>
                    <p class="value color11">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Demand Engine Torque</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Actual Engine Torque</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Reference Torque</u></p>
                    <p class="value color6">0</p>
                    <p class="unit center_circle">Nm</p>
                </div>
            </div>

        </div>

        <!-- Throttle -->
        <div id="throttle" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Throttle Position</u></p>
                    <p class="value color_blue throttle-position">{{ $data['throttle_position'] ? $data['throttle_position'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Relative Throttle Position</u></p>
                    <p class="value color_pink relative-throttle-position">{{ $data['relative_throttle_position'] ? $data['relative_throttle_position'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position B</u></p>
                    <p class="value color_yellow atpb">{{ $data['absolute_throttle_position_B'] ? $data['absolute_throttle_position_B'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position C</u></p>
                    <p class="value color8 atpc">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position D</u></p>
                    <p class="value color7 atpd">{{ $data['absolute_throttle_position_D'] ? $data['absolute_throttle_position_D'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position E</u></p>
                    <p class="value color9 atpe">{{ $data['absolute_throttle_position_E'] ? $data['absolute_throttle_position_E'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position F</u></p>
                    <p class="value color11 atpf">{{ $data['absolute_throttle_position_F'] ? $data['absolute_throttle_position_F'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Commanded Throttle Actuator</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Relative Accelerator Peedal Position</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle">%</p>
                </div>

            </div>


        </div>

        <!-- AirFeed -->
        <div id="airfeed" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake MAP</u></p>
                    <p class="value color_blue impp">{{ $data['intake_manifold_pressure'] ? $data['intake_manifold_pressure'] : 0 }}</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake Air Temperature</u></p>
                    <p class="value color_pink iat">{{ $data['intake_air_temp'] ? $data['intake_air_temp'] : 0 }}</p>
                    <p class="unit center_circle">kPa</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>MAF Air Flow Rate</u></p>
                    <p class="value color_yellow marate">{{ $data['mass_airflow_rate'] ? $data['mass_airflow_rate'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Barometric Pressure</u></p>
                    <p class="value color8 baropressure">{{ $data['barometric_pressure'] ? $data['barometric_pressure'] : 0 }}</p>
                    <p class="unit center_circle">kPa</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Pressure</u></p>
                    <p class="value color7 fuel-pressure">{{ $data['fuel_pressure'] ? $data['fuel_pressure'] : 0 }}</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Level Input</u></p>
                    <p class="value color9 fuel-level">{{ $data['fuel_level']  ?$data['fuel_level'] : 0 }}</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Ethanol Fuel</u></p>
                    <p class="value color11">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Injection Timing</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">o</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Fuel Rate</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle">L/h</p>
                </div>

            </div>


        </div>

        <!-- Exhaust -->
        <div id="exhaust" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Rail Pressure(relative)</u></p>
                    <p class="value color_blue fuel-rail-pressure">{{ $data['fuel_rail_pressure'] ? $data['fuel_rail_pressure'] : 0 }}</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Rail Pressure(direct inject)</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">kPa</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Commanded EGR</u></p>
                    <p class="value color_yellow">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>EGR Error</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Commanded Evaporative Purge</u></p>
                    <p class="value color7">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Evap. System Vapor Pressure</u></p>
                    <p class="value color9">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card_padding">
                    <p class="index_sub_head"><u>Exhaust Gas Temperature</u></p>
                    <p class="value color11">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>

        </div>


        <!-- Temperature -->
        <div id="temperature" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Coolant Temperature</u></p>
                    <p class="value color_blue engine-coolent-temp">{{ $data['engine_coolent_temp'] ? $data['engine_coolent_temp'] : 0 }}</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake Air Temperature</u></p>
                    <p class="value color_pink intake-air-temp">{{ $data['intake_air_temp'] ? $data['intake_air_temp'] : 0 }}</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Ambient Air Temperature</u></p>
                    <p class="value color_yellow aairtemp">{{ $data['ambient_air_temp'] ? $data['ambient_air_temp'] : 0 }}</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Oil Temperature</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Exhaust Gas Temperature</u></p>
                    <p class="value color7">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Catalyst Temperature Bank1</u></p>
                    <p class="value color9">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Catalyst Temperature Bank2</u></p>
                    <p class="value color11">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Catalyst Temperature Bank1</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Catalyst Temperature Bank2</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>

        </div>

        <!-- Readiness -->

        <div id="readiness" class="col s12">
            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>DTC Count</u></p>
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle"></p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Misfire</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle"></p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel System</u></p>
                    <p class="value color_yellow">0</p>
                    <p class="unit center_circle"></p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Components</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle"></p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Catalyst</u></p>
                    <p class="value color7">0</p>
                    <p class="unit center_circle"></p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Heated Catalyst</u></p>
                    <p class="value color9">0</p>
                    <p class="unit center_circle"></p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Evaporative System</u></p>
                    <p class="value color11">0</p>
                    <p class="unit center_circle"></p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Secondary Air System</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle"></p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>A/C Refrigerant</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle"></p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Oxygen Snesor</u></p>
                    <p class="value color6">0</p>
                    <p class="unit center_circle"></p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Oxygen Sensor Heater</u></p>
                    <p class="value color10">0</p>
                    <p class="unit center_circle"></p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>EGR System</u></p>
                    <p class="value color6">0</p>
                    <p class="unit center_circle"></p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection