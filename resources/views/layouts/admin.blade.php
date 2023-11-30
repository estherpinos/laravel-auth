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

    <div class="main-wrapper d-flex">
         @include('admin.partials.sidebar')
         <div class="p-5 w-100">

             @yield('content')
         </div>
    </div>

</body>
</html>
