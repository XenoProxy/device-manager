<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Current details') }}
            {{ $device->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <a class="btn btn-details" href="{{ route('dashboard') }}">Back</a>

            <div class="indicators-row">

                <div class="device-indicators bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">                    
                        <span>{{ $device->name }}</span> 
                        <span>{{ $device->id }}</span> 
                    </div>              
                </div>
    
                <div class="device-indicators bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">                    
                        <span>{{ $device_status }}</span>                              
                    </div>              
                </div>

                <div class="device-indicators bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <img class="temp-img" src="/images/free-icon-thermometer-696601.png">

                    <div class="p-6 text-gray-900 dark:text-gray-100">                                            
                        <span>{{ $device->boiler_temp }}</span> 
                    </div>              
                </div>
            </div>
        </div>        
    </div>
</x-app-layout>