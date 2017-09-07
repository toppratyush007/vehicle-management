<!DOCTYPE html>
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

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>
<div class="background_page"></div>
<!-- Container Block -->

<div class = "container container_property">
    <div class = "row action_bar">
        <div class="title">
            <img src="{{ url('images/softcloud_social_share.png') }}" width="160px">
        </div>
    </div>

    <div class="form_content">
        <div class="heading_form">
            <h4> Device Details </h4>
        </div>

        @if($devices->count())
        <!-- Table for Device Details -->
        <table class="striped centered table_border">
            <thead>
                <tr>
                    <th>Device Id</th>
                    <th>Device Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($devices as $device)
                <tr>
                    <td>{{ $device->device_id }}</td>
                    <td>{{ $device->name }}</td>
                    <td class="text-center"><p class=" label_ @if($device->status == 'initiated') label_blue @elseif($device->status == 'processing') label_yellow @elseif($device->status == 'completed') label_green @else label_red @endif">{{ $device->status }}</p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
         @else
            <div class="error-box">
                Soory! No device registered yet
            </div>
        @endif
    </div>
</div>
</body>
</html>
