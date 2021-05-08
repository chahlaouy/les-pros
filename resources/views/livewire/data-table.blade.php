<div>
    {{-- wire:poll.5s --}}
    <div class="flex items-center justify-start w-full"> 
        <x-button-search width="96">
            <x-slot name="input">
                <input wire:model="searchTerm" type="search" class="block px-2 py-3 text-xs flex-1 relative z-10 rounded-l-md border-gray-200 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{__('Search')}}">
            </x-slot>
        </x-button-search>
    </div> 
    <x-responsive-table :products="$products"></x-responsive-table> 
</div>
