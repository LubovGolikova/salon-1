@extends('layouts.app')
@section('content')
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
    <a type="button"  href="/services" class="btn btn-dark btn-down">ЗАПИСАТЬСЯ</a>
</section>

@endsection
