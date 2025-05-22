@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <x-box>
        <x-slot name="header">Hello, {{ $user->name }}!</x-slot>
        <x-form action="/logout" method="GET">
            <x-button variant="red" type="submit">Logout</x-button>
        </x-form>
    </x-box>
@endsection
