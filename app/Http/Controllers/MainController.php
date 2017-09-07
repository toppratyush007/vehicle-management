<?php

namespace App\Http\Controllers;

use App\Models\DeviceConfig;
use App\Models\DeviceDetails;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('index');
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

        return "Success";
    }

    public function seeDevicesList()
    {
        $devices = DeviceDetails::orderBy('device_id', 'asc')->get();

        return view('device', compact('devices'));
    }
}
