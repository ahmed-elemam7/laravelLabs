@php
    $classes = match ($color) {
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        default => 'bg-blue-600 hover:bg-blue-700 text-white',
    };
@endphp

<button {{ $attributes->merge([
    'class' => "px-4 py-2 rounded font-medium {$classes}"
]) }}>
    {{ $slot }}
</button>