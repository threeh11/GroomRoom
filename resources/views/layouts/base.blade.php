<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-[#f0f0f0] flex flex-col justify-between min-h-screen">
    <div class="w-full h-min bg-white">
        <div class="container mx-auto flex flex-col">
            <header class="flex flex-row justify-between items-center py-5">
                @include('includes.header')
            </header>
        </div>
    </div>
    <div class="container mx-auto flex flex-col grow">
        <main>
            @yield('main')
        </main>
    </div>
    <div class="w-full bg-white self-end">
        <div class="container mx-auto flex flex-col py-5">
            <footer>
                @include('includes.footer')
            </footer>
        </div>
    </div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
</html>
