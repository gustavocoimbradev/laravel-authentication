@if (session('success'))
    <p class="px-4 py-2 rounded-full text-center mb-6 border-1 bg-emerald-100/10 border-emerald-500 text-emerald-500">{{ session('success') }}</p>
@elseif (session('error'))
    <p class="px-4 py-2 rounded-full text-center mb-6 border-1 bg-red-100/10 border-red-500 text-red-500">{{ session('error') }}</p>
@endif

@if ($errors->any()) 
    <p class="px-4 py-2 rounded-full text-center mb-6 border-1 bg-red-100/10 border-red-500 text-red-500">
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </p>
@endif