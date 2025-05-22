@extends('layouts.main')

@section('title', 'Log in')

@section('content')

    <x-box>
        <x-slot name="header">Log in</x-slot>
        <x:alert />
        <x-form action="/login" method="POST">
            @csrf
            <x-field label="Email" type="email" name="email" id="email" value="{{ old('email') }}" />
            <x-field label="Password" type="password" name="password" id="password" value="{{ old('password') }}" />
            <x-button variant="blue" type="submit">Login</x-button>
            <x-link href="/register">Create account</x-link>
        </x-form>
    </x-box>

@endsection
