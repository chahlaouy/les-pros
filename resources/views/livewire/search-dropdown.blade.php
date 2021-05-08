<div class="relative z-40">
    <button class="flex items-center relative focus:outline-none border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-72">
        <input class="block px-2 py-3 text-xs relative z-10 flex-1 rounded-l-md border-gray-200 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{__('Search')}}" wire:model.debounce.300ms="searchTerm" type="search">
        <div class="px-5 py-3 bg-gray-100 rounded-r-md">
            <div class="w-4">
                <?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><defs><style>.cls-1{fill:#2d3e50;}</style></defs><title>x</title><path class="cls-1" d="M120.5891,106.37506,96.5609,80.39355l-3.842,3.8457-4.35187-4.35187c.33368-.43195.667-.864.98346-1.30475A46.77661,46.77661,0,1,0,77.87956,89.85687q.99472-.68619,1.955-1.42987l4.34509,4.345-4.31427,4.31409,26.5097,23.5246a10.0585,10.0585,0,1,0,14.21405-14.23566ZM74.21977,74.22931a32.4793,32.4793,0,1,1,9.48859-22.94189A32.48241,32.48241,0,0,1,74.21977,74.22931Z"/></svg>
            </div>
        </div>
    </button>
    @if (strlen($searchTerm) > 1 )
        <ul class="absolute w-72 z-40 bg-white border border-gray-300 rounded-md mt-2 text-sm divide-y divide-gray-200 shadow"> 
                <li class="px-4 py-4 hover:bg-gray-100 transition ease-in-out duration-150">
                    <span class="block text-xs text-gray-600">{{ $searchTerm }}</span>
                </li>
            @forelse ($searchResult as $result)
                
                <li>
                    <a href="#" class="block px-4 py-4 hover:bg-gray-100 transition ease-in-out duration-150 ">
                        <strong>{{ $result->name }}</strong>
                        <span class="block text-xs text-gray-600">#{{ $result->uuid }}</span>
                    </a>
                </li>
            @empty
                <li class="px-4 py-4 hover:bg-gray-100 transition ease-in-out duration-150">
                    <span class="block text-xs text-gray-600"> {{ __('No result found') }} </span>
                </li>    
            @endforelse
                
            
        
        </ul>
    @endif
</div>
