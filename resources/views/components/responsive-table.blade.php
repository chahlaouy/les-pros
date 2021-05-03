@props(['products'])

<table class="w-full sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
    <thead class="text-white">
        <tr class="bg-green-300 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
            <th class="p-3 text-left capitalize">{{__('product id')}}</th>
            <th class="p-3 text-left capitalize">{{__('product name')}}</th>
            <th class="p-3 text-left capitalize">{{__('product unit')}}</th>
            <th class="p-3 text-left capitalize">{{__('product price')}}</th>
            <th class="p-3 text-left capitalize">{{__('product category')}}</th>
            <th class="p-3 text-left capitalize">{{__('Description')}}</th>
            <th class="p-3 text-left capitalize">{{__('action')}}</th>
        </tr>
    </thead>
    <tbody class="flex-1 sm:flex-none">
        @forelse ($products as $product)
            <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$product->uuid}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                    <a href="#">{{$product->name}}</a>
                </td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$product->unit}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$product->price}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$product->category}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$product->description}}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">
                    <form action="#" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="focus:outline-none capitalize">{{__('Delete')}}</button>
                    </form>
                    
                </td>
            </tr>
        @empty
            <tr class="bg-white shadow p-4 rounded-2xl">
                Vous n'avez pas encore de produit<span class="text-green-800 underline">Publiez-en un nouveau</span>
            </tr>
        @endforelse   
    </tbody>
</table>