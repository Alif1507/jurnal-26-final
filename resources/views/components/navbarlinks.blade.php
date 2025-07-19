@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center justify-evenly gap-2 bg-amber-400 text-white border border-white focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-sm px-5 py-2.5 text-center me-2 mb-2'
            : 'flex items-center justify-evenly gap-2 text-amber-400 border border-amber-400 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-sm px-5 py-2.5 text-center me-2 mb-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
