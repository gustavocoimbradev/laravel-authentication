@extends('layouts.main')

@section('title', 'Log in')

@section('content')

    <main class="c-box">

        <div class="c-box__header">Log in</div>

        <x:alert />

        <form class="c-form" action="{{ route('login.authenticate') }}" method="POST">
            @csrf

            <fieldset class="c-form__field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
            </fieldset>

            <fieldset class="c-form__field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="{{ old('password') }}">
            </fieldset>

            <button class="c-button c-button--primary" type="submit">Login</button>

            <a href="{{ route('register.create') }}">Create account</a>

        </form>

    </main>

@endsection
