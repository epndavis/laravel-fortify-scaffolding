<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div id="app">
            <header>
                @include('partials.header')
            </header>

            <div>
                @yield('content')
            </div>

            <footer>
                @include('partials.footer')
            </footer>
        </div>
    </body>
</html>
