<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Ваш сайт</title>
</head>

<body>

<header style="background: #33ff00">
    <p>
        Хедер
    </p>
</header>

<section>
    @yield('content')
</section>

<footer style="background: #3f9ae5">
    <p>Copyright {{ date('Y') }} Ваш сайт</p>
</footer>

</body>

</html>