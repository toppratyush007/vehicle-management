@extends('base')
@section('title') Device List @endsection
@section('content')
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
                Sorry! No device registered yet
            </div>
        @endif
    </div>
</div>
@endsection
