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

            <div class="info-box">

                <div class="device-info bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">                    
                        <span>{{ $device->id }}</span> 
                    </div>              
                </div>
    
                <div class="device-info bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">                    
                        <span>{{ $device->name }}</span>                              
                    </div>              
                </div>
            </div>
        </div>        
    </div>
</x-app-layout>