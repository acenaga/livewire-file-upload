<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="mx-auto container px-4">
            <div class="py-12">
                @yield('content')
            </div>
        </div>
        @livewireScripts
    </body>
</html>
