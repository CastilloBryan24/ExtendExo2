<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

    @yield('content')


    <link rel="stylesheet" href="{{asset("js/app.js")}}">
</body>
</html>