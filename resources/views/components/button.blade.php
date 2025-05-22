@php
    $variantClasses = 'bg-'.$variant.'-500 hover:bg-'.$variant.'-600';
@endphp

<button class="px-5 py-2 cursor-pointer rounded-full mx-auto mt-6 block max-w-[max-content] transition-all ease-in-out duration-300 text-white {{ $variantClasses }}" type="{{ $type ?? 'button' }}">
    {{ $slot }}
</button>