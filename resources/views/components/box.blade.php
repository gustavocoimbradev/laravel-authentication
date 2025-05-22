<main class="m-auto w-[400px] bg-white px-8 pb-8 shadow-xl shadow-slate-600/10 rounded-4xl">
    @isset($header)
        <header class="border-b-1 border-slate-200 pt-8 pb-4 text-xl mb-8 font-semibold text-slate-700">
            {{ $header }}
        </header>
    @endisset
    {{ $slot }}
</main>