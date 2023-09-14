<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a class="btn btn-create" href="{{ route('dashboard') }}">Add new device</a>
           
        
            @foreach ($devices as $device)
            <div class="device-container bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <img class="device-img" src="http://via.placeholder.com/180x180">

                <div class="device-info p-6 text-gray-900 dark:text-gray-100">                    
                    <p class="info-item">ID: {{ $device->id }}</p>  
                    <p class="info-item">Name: {{ $device->name }}</p>  
                    <p class="info-item">Type: SF344HFJFD</p> 
                    <p class="info-item">Wifi: 192.168.1.101</p> 
                    <p class="info-item">Web: 0.0.0.0</p> 
                    <p class="info-item">Address: </p> 
                    <p class="info-item">Owner: </p>                                              
                </div>

                <a class="btn btn-details" href="{{ route('device.show', $device->id) }}">Details</a>
            </div>
            @endforeach  
        </div>        
    </div>
</x-app-layout>
