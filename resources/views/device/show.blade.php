<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Current details') }}
            {{ $device->name }}
        </h2>
    </x-slot>

    <div class="py-12"> 
               
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <a class="btn btn-back" href="{{ route('dashboard') }}">Back</a>

            <div class="indicators-row">

                <div class="device-indicators bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">                    
                        <span>{{ $device->name }}</span> 
                        <span>{{ $device->id }}</span> 
                    </div>              
                </div>
    
                <div class="device-indicators bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="stat">
                        <div class="status p-6 text-gray-900 dark:text-gray-100">{{ $device_status }}</div>
                    </div>
                    <div class="stat-bottom">
                        <hr class="xunderline">                                             
                        <div class="stat-name text-gray-900 dark:text-gray-100">Device status</div> 
                    </div>                                 
                </div>

                <div class="device-indicators bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="stat">
                        <img class="temp-img" src="/images/free-icon-thermometer-696601.png">
                        <div class="p-6 text-gray-900 dark:text-gray-100">{{ $device->boiler_temp }}</div> 
                    </div>
                    <div class="stat-bottom">
                        <hr class="xunderline">                                             
                        <div class="stat-name text-gray-900 dark:text-gray-100">Boiler temperature</div> 
                    </div>                      
                </div>
            </div>
        </div>        
    </div>
</x-app-layout>