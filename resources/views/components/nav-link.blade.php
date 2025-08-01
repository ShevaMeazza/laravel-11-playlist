@props(['active' => false])

<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
    class="rounded-md {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  px-3 py-2 text-sm font-medium">{{ $slot }}</a>
