<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {   
        $devices = Device::all();        
        return view('dashboard', compact('devices'));
    }  

    public function show(Device $device)
    {
        // $polyclinic_name = $doctor->polyclinic->name;
        return view('device.show', compact('device'));
    }
}
