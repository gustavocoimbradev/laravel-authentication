@extends('layouts.main')

<main class="c-box">

    <div class="c-box__header">Create account</div>
    
    <x:alert />

    <form class="c-form" action="{{ route('register.store') }}" method="POST">
        @csrf

        <fieldset class="c-form__field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </fieldset>

        <fieldset class="c-form__field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </fieldset>

        <fieldset class="c-form__field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
        </fieldset>

        <button class="c-button c-button--primary" type="submit">Create account</button>

        <a href="{{ route('login.form') }}">I am already registered</a>

    </form>

</main>
