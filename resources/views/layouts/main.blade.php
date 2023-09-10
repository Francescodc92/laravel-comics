<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title') | Laravel Comics </title>

        @include('partials.head-imports')
    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('main-content')
        </main>

        @include('partials.footer')

    </body>
</html>

