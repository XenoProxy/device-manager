<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add new device') }}
        </h2>
    </x-slot>

    <div class="py-12">        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <a class="btn btn-back" href="{{ route('dashboard') }}">Back</a>

            <div class="create-container bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">    
                <div class="create-row p-6 text-gray-900 dark:text-gray-100">                    
                    <strong>ID:</strong> 
                    <input type="text" name="id" class="form-control" placeholder="ID">                      
                </div>                
            </div>

            <div class="create-container bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">    
                <div class="create-row p-6 text-gray-900 dark:text-gray-100">                    
                    <strong>Name:</strong>  
                    <input type="text" name="name" class="form-control" placeholder="Name">                                          
                </div>                
            </div>

            <a class="btn btn-create" href="{{ route('device.create') }}">Add</a>
            
        </div>        
    </div>
</x-app-layout>