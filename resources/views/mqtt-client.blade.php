<script src="{{ url('js/mqtt-paho.js') }}" type="text/javascript"></script>
<script>
    // Create a client instance
    var client = new Paho.MQTT.Client('52.14.165.48', 8080, 'AndroidMqttClientOBD');

    // set callback handlers
    try{
        client.onConnectionLost = onConnectionLost;
        console.log('connection success');
    }catch($e){
        console.log('connection failed');
    }

    client.onMessageArrived = function (message) {

        var payload = getPayloadAsJSON(message.payloadString);

        console.log(payload);
        if(payload['VIN']){
            $.ajax({
                type : 'POST',
                dataType:'JSON',
                url : 'setData/' + payload['VIN'],
                data : {"_token": "{{ csrf_token() }}", "payload" : payload},
                success : function(data){
                    if(data.success){
                        console.log('data updated successfully');
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
        console.log("onConnect");
        client.subscribe("softclouds/testTelematics/#");
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