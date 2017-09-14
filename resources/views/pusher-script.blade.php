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

        console.log(data);
        // update the data to chanel
        $('.engine-rpm').text(data.engine_load);
    });
</script>