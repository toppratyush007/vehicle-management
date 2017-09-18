<?php

namespace App\Http\Controllers;

use App\Models\DeviceConfig;
use App\Models\DeviceDetails;
use App\Models\ShowData;
use Illuminate\Http\Request;
use Pusher\Pusher;

class MainController extends Controller
{
    public function homePage()
    {
        $hasDevice = DeviceDetails::orderBy('device_id','ASC')->first();
        if($hasDevice) {
            return $this->showIndex($hasDevice->device_id);
        }
        else{
            return response()->json([
                'code' => 404,
                'message' => 'No device found'
            ]);
        }
    }
    public function showIndex($deviceId)
    {
        $error = $this->validateDevice($deviceId);
        if($error){
            return $error;
        }

        $data = ShowData::where('device_id', $deviceId)->orderBy('id', 'DESC')->first();

        if($data){
            return view('index', compact('data'));
        }
        else{
            return response()->json([
                'success' => false,
                'error' => "No data available to show"
                ]);
        }
    }

    public function registerVehicle()
    {
        $vehicle = DeviceConfig::orderBy('vehicle_id', 'desc')->first();
        $vehicleId = $vehicle ? $vehicle->vehicle_id : 0;
        $prefix = 'VECH';
        $prevNo = (int)substr($vehicleId, strlen($prefix));
        $vehicleId = $this->getUniqueIds('VECH', $prevNo);

        return view('device_registration', compact('vehicleId'));
    }

    public function saveVehicleDetails(Request $request)
    {
        $rules  = [
            'vehicle_id' => 'required',
            'registration_id' => 'required|min:3',
            'protocol' => 'required',
            'entry_date' => 'required|date_format:"d F, Y"'
        ];

        $message = [
            'registration_id.required' => 'Registration number is required',
            'registration_id.min' => 'Registration number cannot be less than 3 characters',
            'entry_date.date_format' => 'Entry date should be in the format "d F, Y", Ex: 20 September, 2017'
        ];

        $validator = validator($request->all(), $rules, $message);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $vehicle = new DeviceConfig();
        $vehicle->vehicle_id = $request->input('vehicle_id');
        $vehicle->registration_id = $request->input('registration_id');
        $vehicle->protocol = $request->input('protocol');
        $vehicle->entry_date = strtotime($request->input('entry_date'));
        $vehicle->save();

        return "Vehicle registered successfully";
    }

    public function seeDevicesList()
    {
        $devices = DeviceDetails::orderBy('device_id', 'asc')->get();

        return view('device', compact('devices'));
    }

    public function showLiveData($deviceId){
        $response = ['success' => false];
        $error = $this->validateDevice($deviceId);
        if($error){
            $response['error'] = "Device Doesn't exist!";
            return response()->json($response);
        }

        //get the latest data
        $data  = ShowData::where('device_id', $deviceId)->orderBy('id','DESC')->first();
        $this->broadcastData($data);
    }

    private function validateDevice($deviceId){

        $device = DeviceDetails::find($deviceId);
        if(!$device){
            return "No device is selected please enter a device_id";
        }
        else {
            return false;
        }
    }

    private function broadcastData($data)
    {

        $options = array(
            'cluster' => 'ap2',
            'encrypted' => true
        );
        $pusher = new Pusher(
            'e9282422f2a20f13c198',
            'b5b4752b64428497bd45',
            '400257',
            $options
        );

        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
