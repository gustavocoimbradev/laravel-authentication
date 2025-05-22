<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>

<body class="flex items-center justify-center min-h-[100dvh] bg-slate-100">
    @yield('content')
    @livewireScripts
</body>

</html>
