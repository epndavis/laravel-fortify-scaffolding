<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" />
    </head>

    <body>
        <div id="app" class="flex flex-col min-h-screen bg-gray-100">
            <header>
                @include('partials.header')
            </header>

            <div class="flex flex-1">
                @yield('content')
            </div>

            <footer>
                @include('partials.footer')
            </footer>
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
