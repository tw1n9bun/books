<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3 px-md-4 mb-3 bg-black text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Proger</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/">Главная</a>
        <a class="p-2 text-white" href="/about">Я здесь</a>
        <a class="p-2 text-white" href="/news">Новости</a>

    </nav>
    <a class="btn btn-warning" href="/review">Отзывы</a>
</div>
<div class="container">
    @yield("main_content")
</div>



</body>
</html>

