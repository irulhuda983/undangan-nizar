<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="app-name" content="{{ ENV('APP_NAME') }}">
    <meta name="app-key" content="{{ ENV('APP_KEY') }}">
    <!-- <meta name="description" content="{{ ENV('APP_DESC') }}"> -->
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="client-id" content="{{ ENV('PASSPORT_CLIENT_ID') }}">
    <meta name="client-secret" content="{{ ENV('PASSPORT_CLIENT_SECRET') }}">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ENV('APP_NAME')}}</title>

    <link rel="icon" href="favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />


    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div id="app"></div>
    @vite('resources/js/app.js')
</body>

</html>
