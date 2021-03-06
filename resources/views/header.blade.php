<!doctype html>
<html  lang="ru">
<head>
    <meta charset="utf-8">
    <title>Маникюрные услуги</title>



    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ru-ru.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<header id="headerId">
    <nav class="navbar navbar-expand-lg navbar-light bg-light-pink">
        <div class="container">
            <a class="navbar-brand" href="/">ГЛАВНАЯ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/services">УСЛУГИ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">О НАС</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">УПРАВЛЕНИЕ</a>
                        </li>
                    @endauth
                </ul>
                <span class="navbar-text">
                       КОНТАКТЫ   +380934567656
                    <a type="button" href="/services" class="btn btn-dark btn-up mt-2 mt-md-0">ЗАПИСАТЬСЯ</a>
    </span>
            </div>
        </div>
    </nav>
</header>
