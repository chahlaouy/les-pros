<x-app-layout>
    <livewire:modal />
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products List') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-end max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center bg-white rounded shadow px-4 py-2 mr-4">
            <span class="mr-4">{{__('add new product')}}</span>
            <ion-icon name="add-outline"></ion-icon>
        </div>
        <div class="flex items-center bg-white rounded shadow px-4 py-2">
            <span class="mr-4">{{__('load from a file')}}</span>
            <ion-icon name="add-circle-outline"></ion-icon>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">  
                <x-responsive-table :products="$products"></x-responsive-table> 
            </div>
        </div>
    </div>
</x-app-layout>