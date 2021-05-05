<div class="fixed top-0 left-0 w-full h-screen p-20 bg-gray-900 bg-opacity-50 z-50 rounded" x-show.transition="show" x-data="{show: true}">
    {{-- flash component --}}
    @if (session('success'))
    <x-flash type="success">
        {{ session('success') }}
    </x-flash>
@endif
@if (session('error'))
    <x-flash type="error">
        {{ session('error') }}
    </x-flash>
@endif
    <form wire:submit.prevent="submitForm" method="POST">
        @csrf
        <div class="bg-white p-6 rounded">
            <h1 class="text-4xl capitalize my-4">{{__('add a product')}}</h1>
            <div class="w-full flex">

                <div class="flex-1 p-4">
                    <label class="block mb-8">
                        {{$productID}}
                        <span class="text-gray-700 capitalize">{{__('Product id')}}</span>
                        <input 
                        wire:model="productID"
                        id="product-id"
                        name="product-id"
                        type="text" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        @error('productID')
                        border border-red-500 
                        @enderror" 
                        value="{{old('productID')}}"
                        placeholder="{{__('product id')}}">
                        @error('productID')
                            <span class="text-red-400">
                                {{$message}}
                            </span>
                        @enderror 
                    </label>
                    <label 
                    class="block mb-8">
                        <span 
                        class="text-gray-700 capitalize">{{__('product name')}}</span>
                        <input 
                        wire:model="productName"
                        id="product-name"
                        name="product-name"
                        type="text" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        @error('productName')
                        border border-red-500 
                        @enderror" 
                        value="{{old('productName')}}"
                        placeholder="{{__('product name')}}">
                        @error('productName')
                            <span class="text-red-400">
                                {{$message}}
                            </span>
                        @enderror 
                    </label>
                    <label 
                    class="block">
                        <span 
                        class="text-gray-700 capitalize">{{__('product unit')}}</span>
                        <input 
                        wire:model="productUnit"
                        id="product-unit"
                        name="product-unit"
                        type="text" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        @error('productUnit')
                        border border-red-500 
                        @enderror" 
                        value="{{old('productUnit')}}"
                        placeholder="{{__('product unit')}}">
                        @error('productUnit')
                            <span class="text-red-400">
                                {{$message}}
                            </span>
                        @enderror 
                    </label>
                </div>

                <div class="flex-1 p-4">
                    <label 
                    class="block mb-8">
                        <span 
                        class="text-gray-700 capitalize">{{__('product price')}}</span>
                        <input 
                        wire:model="productPrice"
                        id="product-price"
                        name="product-price"
                        type="text" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        @error('productPrice')
                        border border-red-500 
                        @enderror" 
                        value="{{old('productPrice')}}"
                        placeholder="{{__('product price')}}">
                        @error('productPrice')
                            <span class="text-red-400">
                                {{$message}}
                            </span>
                        @enderror 
                    </label>
                    <label 
                    class="block mb-8">
                        <span 
                        class="text-gray-700 capitalize">{{__('product category')}}</span>
                        <select 
                        wire:model="productCategory"
                        id="product-category"
                        name="product-category"
                        class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 
                        @error('productCategory')
                        border border-red-500 
                        @enderror" 
                        >
                            <option value="category">category 1</option>
                            <option value="category">category 2</option>
                            <option value="category">category 3</option>
                            <option value="category">category 4</option>
                        </select>
                        @error('productCategory')
                            <span class="text-red-400">
                                {{$message}}
                            </span>
                        @enderror 
                    </label>
                    <label class="block">
                        <span 
                        class="text-gray-700 capitalize">{{__('product description')}}</span>
                        <textarea 
                        wire:model="productDescription"
                        id="product-description"
                        name="product-description"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black 
                        @error('productDescription')
                        border border-red-500 
                        @enderror" 
                        value="{{old('productDescription')}}"rows="2" 
                        spellcheck="false"
                        
                        ></textarea>
                        @error('productDescription')
                            <span class="text-red-400">
                                {{$message}}
                            </span>
                        @enderror 
                    </label>
                </div>

            </div>
            {{-- buutons submit and cancel --}}
            <div class="flex items-center justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-500 mr-8 hover:bg-rose-500 focus:border-rose-700 active:bg-rose-700 transition ease-in-out duration-150 cursor-not-allowed">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    {{__('Save')}}
                  </button>
                <button 
                    x-on:click="show = false"
                    wire:click="refreshProductList"
                    type="button" 
                    class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-400 hover:bg-rose-500 focus:border-rose-700 active:bg-rose-700 transition ease-in-out duration-150 cursor-not-allowed">
                    
                    <svg 
                    class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" 
                    xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    {{__('Cancel')}}
                  </button>
            </div>
        </div>

    </form>
</div>
