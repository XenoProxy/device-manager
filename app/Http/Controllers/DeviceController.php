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
        $device_status = 'turned off';
        if($device->status == 1){
            $device_status = 'turned on'; 
        }
        return view('device.show', compact('device', 'device_status'));
    }

    public function create()
    {
        return view('device.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Device::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Device stored successfully');
    }
}
