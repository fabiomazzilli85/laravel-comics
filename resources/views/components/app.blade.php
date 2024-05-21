<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .flex-nav {
            display: flex;
            gap: 30px;
        }

        ul, li {
            list-style: none;
        }
    </style>
</head>

<body>
    @include('components.partials.header')

    <main>
        @yield('content')
    </main>

    @include('components.partials.footer')
</body>

</html>