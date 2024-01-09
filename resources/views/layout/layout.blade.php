<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url('/css/main.css')}}>
    <title>Document</title>
</head>
<body>
    @include('layout.navbar')
    <div class="parent">
        <div></div>
        <div></div>
        <div></div>
        <div ></div>
        <div class="new">
            @yield('new')
        </div>
        <div></div>
    </div>
</body>
</html>