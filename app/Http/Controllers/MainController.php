<?php

/**
 * @author :=> Vikash <vikashkrkashyap@gmail.com>
 * @since :=> 5 september 2017
 */
namespace App\Http\Controllers;

use App\Models\DeviceConfig;
use App\Models\DeviceDetails;
use App\Models\ShowData;
use Illuminate\Http\Request;

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
        if($error) {
            return $error;
        }

        $data = ShowData::where('device_id', $deviceId)->first();
        if(!$data){
            $this->initShowData($deviceId);
        }
        return view('index', compact('data'));
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

    public function setPopulateData($deviceId, Request $request){

        $response = ['success' => false];
        $payload = $request->input('payload');

        $error = $this->validateDevice($deviceId);
        if($error){
            $response['error'] = "Device Doesn't exist!";
            return response()->json($response);
        }

        try{
            $data = $this->getDeviceData($deviceId, $payload);
            $hasDataExist = ShowData::where('device_id', $deviceId)->first();

            if($hasDataExist){
                $hasDataExist->update($data);
            }
            else{
               ShowData::create($data);
            }
        }catch (\Exception $e){
            return response()->json(['success' => false, 'error' => 'Server error in updating device data']);
        }

        return response()->json(['success' => true, 'payload' => $data]);
    }

    private function validateDevice($deviceId){

        $device = DeviceDetails::find($deviceId);
        if(!$device){
            return "Invalid device id";
        }
        else {
            return false;
        }
    }

//    private function broadcastData($data)
//    {
//
//        $options = array(
//            'cluster' => 'ap2',
//            'encrypted' => true
//        );
//        $pusher = new Pusher(
//            'e9282422f2a20f13c198',
//            'b5b4752b64428497bd45',
//            '400257',
//            $options
//        );
//
//        $pusher->trigger('my-channel' . $data['device_id'], 'my-event', ['message'=>'hello']);
//    }

    private function getDeviceData($deviceId, $payload){

        $data = [
            'engine_load' => $payload['ENGINE_LOAD'],
            'engine_coolent_temp' => $payload['ENGINE_COOLANT_TEMP'],
            'fuel_pressure' => $payload['FUEL_PRESSURE'],
            'intake_manifold_pressure' => $payload['INTAKE_MANIFOLD_PRESSURE'],
            'engine_rpm' => $payload['ENGINE_RPM'],
            'speed' => $payload['SPEED'],
            'intake_air_temp' => $payload['AIR_INTAKE_TEMP'],
            'throttle_position' => $payload['THROTTLE_POS'],
            'dist_travelled_with_MIL' => $payload['DISTANCE_TRAVELED_MIL_ON'],
            'fuel_rail_pressure' => $payload['FUEL_RAIL_PRESSURE'],
            'barometric_pressure' => $payload['BAROMETRIC_PRESSURE'],
            'fuel_level' => $payload['FUEL_LEVEL'],
            'ambient_air_temp' => $payload['AMBIENT_AIR_TEMP']
        ];

        $data = array_map(function($entry){
            return (float)$entry;
        }, $data);

        $data['device_id'] =   $deviceId;
        $data['runtime_since_engine_start'] = $payload['ENGINE_RUNTIME'];

        return $data;
    }

    private function initShowData($deviceId){
        ShowData::create([
            'device_id' => $deviceId
        ]);
    }

}
