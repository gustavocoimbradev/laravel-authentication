@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <x-box>
        <x-slot name="header">Hello, {{ $user->name }}!</x-slot>
        <x-link href="/logout">Logout</x-link>
    </x-box>
@endsection
