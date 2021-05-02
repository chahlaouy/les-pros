@props(['icon', 'active' => false])

@php
    
    $class = $active ? 'bg-green-100' : ''
@endphp
<a {{$attributes->merge(['class' => 'block py-2 rounded text-center mb-6 text-gray-700 hover:bg-green-100 '. $class])}}>
    <span class="block text-2xl mb-1">
        <ion-icon name="{{$icon}}"></ion-icon>
    </span>
    <span class="block">
        {{$slot}}
    </span>
</a>