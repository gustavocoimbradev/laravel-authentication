@php
    $variants = [
        'blue' => 'bg-blue-500 hover:bg-blue-600',
        'red'  => 'bg-red-500 hover:bg-red-600',
    ];

    $variantClasses = $variants[$variant] ?? $variants['blue'];
@endphp

<button class="px-5 py-2 cursor-pointer rounded-full mx-auto mt-6 block max-w-[max-content] transition-all ease-in-out duration-300 text-white {{ $variantClasses }}" type="{{ $type ?? 'button' }}">
    {{ $slot }}
</button>
