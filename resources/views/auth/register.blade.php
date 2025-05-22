@extends('layouts.main')

@section('title', 'Create account')

@section('content')
    <x-box>
        <x-slot name="header">Create account</x-slot>
        <x:alert />
        <x-form action="/register" method="POST">
            @csrf
            <x-field label="Name" type="text" name="name" id="name" value="{{ old('name') }}" />
            <x-field label="Email" type="email" name="email" id="email" value="{{ old('email') }}" />
            <x-field label="Password" type="password" name="password" id="password" value="{{ old('password') }}" />
            <x-button variant="blue" type="submit">Create account</x-button>
            <x-link href="/login">I am already registered</x-link>
        </x-form>
    </x-box>
@endsection
