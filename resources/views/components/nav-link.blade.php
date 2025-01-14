@props(['active' => false, 'type' => 'a'])
<?php if ($type == 'a' )?>

<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-lg px-4 py-2 text-sm font-medium"
    aria-current="{{$active ? 'page' : 'false' }}" 
    {{ $attributes }}
    >{{ $slot }}</a>
