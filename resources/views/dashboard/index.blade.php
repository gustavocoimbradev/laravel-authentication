@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <x-box>
        <x-slot name="header">Hello, {{ $user->name }}!</x-slot>
        <p class="text-center">Congratulations, you've successfully logged in! <a target="_blank" class="underline text-blue-500 font-semibold" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Click here</a> to claim your prize.</p>
        <x-form action="/logout" method="POST">
            <x-button variant="red" type="submit">Logout</x-button>
        </x-form>
    </x-box>
@endsection
