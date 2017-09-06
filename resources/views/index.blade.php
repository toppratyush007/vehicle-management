<html>
<head>
    <title>Vehicle info Web App</title>

    <!-- material Css CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<div class="background_page"></div>

<div class="container container_property">

    <div class = "row action_bar">
        <div class="title">
            <img src="images/softcloud_social_share.png" width="160px">
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
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle">rpm</p>
                </div>

                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Vehicle Speed</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">km/hr</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Load Value</u></p>
                    <p class="value color_yellow">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Coolant Temperature</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake Air Temperature</u></p>
                    <p class="value color7">0</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Control Module Voltage</u></p>
                    <p class="value color9">0</p>
                    <p class="unit center_circle">V</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Time Since Engine Start</u></p>
                    <p class="value color11">0</p>
                    <p class="unit center_circle">seconds</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Distance Travelled With MIL</u></p>
                    <p class="value color8">0</p>
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
                    <p class="value color6">0</p>
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
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle">rpm</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Engine Temperature</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>

            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Throttle Position</u></p>
                    <p class="value color_yellow">0</p>
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
                    <p class="value color7">0</p>
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
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Relative Throttle Position</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position B</u></p>
                    <p class="value color_yellow">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position C</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position D</u></p>
                    <p class="value color7">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position E</u></p>
                    <p class="value color9">0</p>
                    <p class="unit center_circle">%</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Absolute Throttle Position F</u></p>
                    <p class="value color11">0</p>
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
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake Air Temperature</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">kPa</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>MAF Air Flow Rate</u></p>
                    <p class="value color_yellow">0</p>
                    <p class="unit center_circle">%</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Barometric Pressure</u></p>
                    <p class="value color8">0</p>
                    <p class="unit center_circle">kPa</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Pressure</u></p>
                    <p class="value color7">0</p>
                    <p class="unit center_circle">kPa</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Fuel Level Input</u></p>
                    <p class="value color9">0</p>
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
                    <p class="value color_blue">0</p>
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
                    <p class="value color_blue">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Intake Air Temperature</u></p>
                    <p class="value color_pink">0</p>
                    <p class="unit center_circle">&#8451;</p>
                </div>
            </div>


            <div class="row card_margin">
                <div class="col s6 card card_padding">
                    <p class="index_sub_head"><u>Ambient Air Temperature</u></p>
                    <p class="value color_yellow">0</p>
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


</body>
</html>
