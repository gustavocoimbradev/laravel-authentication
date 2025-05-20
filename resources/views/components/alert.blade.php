@if (session('success'))
    <p class="c-alert c-alert--success">{{ session('success') }}</p>
@elseif (session('error'))
    <p class="c-alert c-alert--error">{{ session('error') }}</p>
@endif

@if ($errors->any()) 
    <p class="c-alert c-alert--error">
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </p>
@endif