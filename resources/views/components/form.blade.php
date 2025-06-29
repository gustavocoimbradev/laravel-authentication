<form class="flex flex-col gap-4" action="{{ $action }}" method="{{ $method }}">
    @csrf
    {{ $slot }}
</form>