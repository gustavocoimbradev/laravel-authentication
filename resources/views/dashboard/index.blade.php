@extends('layouts.main')

<main class="c-box">

    <div class="c-box__header">Hello, {{ $user->name }}!</div>

    <a href="{{ route('logout.index') }}" class="c-button c-button--danger">Logout</a>

</main>
