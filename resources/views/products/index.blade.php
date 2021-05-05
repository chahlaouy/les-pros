<x-app-layout >
    <div id="wrapper" x-data="{showModal : false}">
        <div id="modal-wrapper" x-show="showModal" x-on:away="showModal = false">
            <livewire:modal/>
        </div>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products List') }}
            </h2>
        </x-slot>
    
        <div class="flex items-center justify-end max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button class="flex items-center bg-white rounded shadow px-4 py-2 mr-4" x-on:click="showModal = true">
                <span class="mr-4">{{__('add new product')}}</span>
                <ion-icon name="add-outline"></ion-icon>
            </button>
            <button class="flex items-center bg-white rounded shadow px-4 py-2">
                <span class="mr-4">{{__('load from a file')}}</span>
                <ion-icon name="add-circle-outline"></ion-icon>
            </button>
        </div>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">  
                    <x-responsive-table :products="$products"></x-responsive-table> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>