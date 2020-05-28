<!doctype html>
<html  lang="ru">
<head>
    <meta charset="utf-8">
    <title>Маникюрные услуги</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<header id="headerId">
    <nav class="navbar navbar-expand-lg navbar-light bg-light-pink">
        <div class="container">
            <a class="navbar-brand" href="/">ГЛАВНАЯ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/services">УСЛУГИ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О НАС</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">КОНТАКТЫ</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">УПРАВЛЕНИЕ</a>
                        </li>
                    @endauth
                </ul>
                <span class="navbar-text">
                        ЗВОНИТЕ +380934567656
                    <a type="button" href="/order" class="btn btn-dark btn-up">ЗАПИСАТЬСЯ</a>
    </span>
            </div>
        </div>
    </nav>
</header>
