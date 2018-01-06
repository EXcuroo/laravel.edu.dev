
<!DOCTYPE html>
<html>
<head>
    <title>Электронная очередь в детские сады Республики Казахстан</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
<div class="wrapper">
    <header class="mds-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="/" class="logo"><strong>Электронная очередь в ДОУ</strong>Республики Казахстан</a>
                </div>
                <div class="col">
                    <a href="/parent" class="btn btn-outline-primary float-right"><i class="fa fa-key"></i> Вход для родителей</a>
                </div>
            </div>
        </div>
        <nav class="main-nav">
            <div class="container">
                <a href="/dou">Список ДОУ</a>
                <a href="/pages/queue">Очередь</a>
                <a href="/questions">Вопросы</a>
                <a href="/instructions">Инструкции</a>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="small">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="https://pravitelstvorb.ru/ru/" target="_blank"><img src="/public/images/pravrb.jpg" alt="Правительство Республики Башкортостан"></a>
                </div>
                <div class="col">
                    <ul>
                        <li><a href="/public/docs/politika_ib_po_zaschite_pdn.pdf" target="_blank">Политика ИБ по защите ПДн</a></li>
                    </ul>
                </div>
                <div class="col">
                    <span class="text-muted">© 2011-2017 Электронная очередь<br>Разработка портала – <a href="//cuct.ru" target="_blank">Система-Плюс</a></span>
                </div>
            </div>
        </div>
    </footer>