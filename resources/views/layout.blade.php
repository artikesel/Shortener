<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/app.css">

</head>
<body>
    <header>
        <a href="#"> Главная </a>
            <h1>Link Shortener</h1>
        <a href="#"> О нас </a>
    </header>

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/public/js/app.js"></script>
</body>
</html>
