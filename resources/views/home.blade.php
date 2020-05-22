<!doctype html>
<html  lang="ru">
<head>
    <meta charset="utf-8">
    <title>Маникюрные услуги</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<header id="headerId">
    <nav class="navbar navbar-expand-lg navbar-light bg-light-pink">
        <div class="container">
            <a class="navbar-brand" href="#">ГЛАВНАЯ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">УСЛУГИ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О НАС</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">КОНТАКТЫ</a>
                    </li>
                </ul>
                <span class="navbar-text">
      ЗВОНИТЕ +380934567656
                    <button type="button" class="btn btn-dark btn-up">ЗАПИСАТЬСЯ</button>
    </span>
            </div>
        </div>
    </nav>
</header>
<section class="box-1 row">
    <div class="container-right-box1 col-md-6">
        <div class="box1-img">
            <img src="{{asset('assets/images/box1.png')}}" alt=""/>
        </div>
    </div>
    <div class="container-left-box1 col-md-6">
        <div class="box1-double col">
            <div class="box-1-text">
                <h2>АККУРАТНЫЕ НОГОТКИ!</h2>
                <h1>Маникюрные услуги</h1>
                <p>Хорошее настроение, желание полюбоваться своими ручками-чувства,
                    которые знакомы каждой девушке,
                    выходящей из салона после маникюра.</p>
                <p>Дизайн ногтей подчеркнет или дополнит образ  его обладательницы,
                    поднимет настроение, а также
                    дает воплотить любые ваши фантазии. </p>
            </div>
            <div class="box-1-bg">
            </div>
        </div>

    </div>
    <div class="container-centre">
        <img src="{{asset('assets/images/z3.png')}}" alt=""/>
    </div>
</section>
<section class="box-2">
    <div class="box-2-text align-items-center text-center justify-content-center">
        <h3>Услуги</h3>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="box-2-img col-md-4">
                <img src="{{asset('assets/images/1.png')}}" alt=""/>
            </div>
            <div class="box-2-img col-md-4">
                <img src="{{asset('assets/images/2.png')}}" alt=""/>
            </div>
            <div class="box-2-img col-md-4">
                <img src="{{asset('assets/images/3.png')}}" alt=""/>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-dark btn-down">ЗАПИСАТЬСЯ</button>
</section>
<footer id="footerId">
    <div class="footer-base row align-items-center  text-center  justify-content-center flex-column flex-md-row">
        <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="/">Главная</a>
        <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="">Услуги</a>
        <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="">О нас</a>
        <a class="nav-link {!!Request::is('') ? 'active' : '' !!}" href="">Контакты</a>
    </div>
</footer>
