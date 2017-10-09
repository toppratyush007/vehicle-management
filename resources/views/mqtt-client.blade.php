<script src="{{ url('js/mqtt-paho.js') }}" type="text/javascript"></script>
<script>
    // Create a client instance
    var client = new Paho.MQTT.Client('52.14.165.48', 8080, 'AndroidMqttClientOBD');
    var topic = "softclouds/testTelematics/#";
    // set callback handlers
    try{
        client.onConnectionLost = onConnectionLost;
    }catch($e){
        console.log('connection failed');
    }

    client.onMessageArrived = function (message) {

        var payload = getPayloadAsJSON(message.payloadString);

        if(payload['VIN']){
            $.ajax({
                type : 'POST',
                dataType:'JSON',
                url : 'setData/' + payload['VIN'],
                data : {"_token": "{{ csrf_token() }}", "payload" : payload},
                success : function(data){
                    if(data.success && data.payload){
                        var responseData = data.payload;
                        $('.engine-rpm').text(responseData.engine_rpm);
                        $('.speed').text(responseData.speed?responseData.speed:0);
                        $('.engine-load').text(responseData.engine_load?responseData.engine_load:0);
                        $('.engine-coolent-temp').text(responseData.engine_coolent_temp?responseData.engine_coolent_temp:0);
                        $('.intake-air-temp').text(responseData.intake_air_temp?responseData.intake_air_temp:0);
                        $('.runtime-since-engine-start').text(responseData.runtime_since_engine_start?responseData.runtime_since_engine_start:0);
                        $('.dist-travelled-with-MIL').text(responseData.dist_travelled_with_MIL?responseData.dist_travelled_with_MIL:0);
                        $('.dist-travelled-since-code-cleared').text(responseData.dist_travelled_since_code_cleared?responseData.dist_travelled_since_code_cleared:0);
                        $('.throttle-position').text(responseData.throttle_position?responseData.throttle_position:0);
                        $('.relative-throttle-position').text(responseData.relative_throttle_position?responseData.relative_throttle_position:0);
                        $('.atpb').text(responseData.absolute_throttle_position_B?responseData.absolute_throttle_position_B:0);
                        $('.atpd').text(responseData.absolute_throttle_position_D?responseData.absolute_throttle_position_D:0);
                        $('.atpe').text(responseData.absolute_throttle_position_E?responseData.absolute_throttle_position_E:0);
                        $('.atpf').text(responseData.absolute_throttle_position_F?responseData.absolute_throttle_position_F:0);
                        $('.impp').text(responseData.intake_manifold_pressure?responseData.intake_manifold_pressure:0);
                        $('.iat').text(responseData.intake_air_temp?responseData.intake_air_temp:0);
                        $('.marate').text(responseData.mass_airflow_rate?responseData.mass_airflow_rate:0);
                        $('.baropressure').text(responseData.barometric_pressure?responseData.barometric_pressure:0);
                        $('.fuel-pressure').text(responseData.fuel_pressure?responseData.fuel_pressure:0);
                        $('.fuel-level').text(responseData.fuel_level?responseData.fuel_level:0);
                        $('.fuel-rail-pressure').text(responseData.fuel_rail_pressure?responseData.fuel_rail_pressure:0);
                        $('.aairtemp').text(responseData.ambient_air_temp?responseData.ambient_air_temp:0);
                    }
                    else{
                        console.error(data.error)
                    }
                },
                fail: function(){
                    console.log('Failed to show data');
                }
            });
        }
    };

    // connect the client
    client.connect({
        onSuccess: onConnect,
        userName : 'softclouds',
        password : 'pass4softclouds'
    });

    // called when the client connects
    function onConnect() {
        // Once a connection has been made, make a subscription and send a message.
        client.subscribe(topic);
       // sM();
    }

//    function sM() {
//        message = new Paho.MQTT.Message("Hello Second Test");
//        message.destinationName = "softclouds/testTelematics/#";
//        client.send(message);
//    }

    // called when the client loses its connection
    function onConnectionLost(responseObject) {
        if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:" + responseObject.errorMessage);
        }
    }

    function getPayloadAsJSON(payload) {
        var payload_array = payload.split(";");
        var return_json = {};
        payload_array.forEach(function (kv) {
                var kv_array = (kv.indexOf("=") !== -1 ?  kv.split("=") : kv.split(":"));
                var k = kv_array[0];
                var v = kv_array[1];
                return_json[k.trim()] = v.trim();
        });

        return return_json;
    }

</script>