<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

   
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        @isset($header)
        <div>
            {{$header}}
        </div>
        @endisset
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>
    
</body>
</html>