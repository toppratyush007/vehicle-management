<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e9282422f2a20f13c198', {
        cluster: 'ap2',
        encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        // update the data to chanel
        $('.engine-rpm').text(data.engine_rpm);
        $('.speed').text(data.speed?data.speed:0);
        $('.engine-load').text(data.engine_load?data.engine_load:0);
        $('.engine-coolent-temp').text(data.engine_coolent_temp?data.engine_coolent_temp:0);
        $('.intake-air-temp').text(data.intake_air_temp?data.intake_air_temp:0);
        $('.runtime-since-engine-start').text(data.runtime_since_engine_start?data.runtime_since_engine_start:0);
        $('.dist-travelled-with-MIL').text(data.dist_travelled_with_MIL?data.dist_travelled_with_MIL:0);
        $('.dist-travelled-since-code-cleared').text(data.dist_travelled_since_code_cleared?data.dist_travelled_since_code_cleared:0);
        $('.throttle-position').text(data.throttle_position?data.throttle_position:0);
        $('.relative-throttle-position').text(data.relative_throttle_position?data.relative_throttle_position:0);
        $('.atpb').text(data.absolute_throttle_position_B?data.absolute_throttle_position_B:0);
        $('.atpd').text(data.absolute_throttle_position_D?data.absolute_throttle_position_D:0);
        $('.atpe').text(data.absolute_throttle_position_E?data.absolute_throttle_position_E:0);
        $('.atpf').text(data.absolute_throttle_position_F?data.absolute_throttle_position_F:0);
        $('.impp').text(data.intake_manifold_pressure?data.intake_manifold_pressure:0);
        $('.iat').text(data.intake_air_temp?data.intake_air_temp:0);
        $('.marate').text(data.mass_airflow_rate?data.mass_airflow_rate:0);
        $('.baropressure').text(data.barometric_pressure?data.barometric_pressure:0);
        $('.fuel-pressure').text(data.fuel_pressure?data.fuel_pressure:0);
        $('.fuel-level').text(data.fuel_level?data.fuel_level:0);
        $('.fuel-rail-pressure').text(data.fuel_rail_pressure?data.fuel_rail_pressure:0);
        $('.aairtemp').text(data.ambient_air_temp?data.ambient_air_temp:0);

    });
</script>