<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    @include('admin.partials.header')

    <div class="main-wrapper">
        @include('admin.partials.sidebar')
        @yield('content')
    </div>

</body>
</html>
