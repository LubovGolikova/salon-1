@include('header')
<section class="box-1 row">
    <div class="container-right-box1 col-md-6">
    </div>
    <div class="container-left-box1 col-md-6">
        <div class="box1-double col">
        </div>
    </div>
</section>
<section class="box-2s">
    <div class="box-2s-text align-items-center text-center justify-content-center">
        <h3>Онлайн запись</h3>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a  class="tr {!!Request::is('/manicure') ? 'active' : '' !!}">Маникюр</a>
            <a class="tr {!!Request::is('/coating') ? 'active' : '' !!}">Покрытие</a>
            <a  class="tr{!!Request::is('/pedicure') ? 'active' : '' !!}">Педикюр</a>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="box-2-img col-md-4">
                <img src="{{asset('assets/images/s1.png')}}" alt=""/>
            </div>
            <div class="box-2-img col-md-4">
                <img src="{{asset('assets/images/s2.png')}}" alt=""/>
            </div>
            <div class="box-2-img col-md-4">
                <img src="{{asset('assets/images/s5.png')}}" alt=""/>
            </div>
        </div>
    </div>
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="/services">
                <button type="button" class="btn btn-dark btn-down">ВЫБРАТЬ ДАТУ</button>
            </a>
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <a href="/services">
                <button type="button" class="btn btn-dark btn-down">ЗАПИСАТЬСЯ</button>
            </a>
        </div>
        <div class="btn-group" role="group" aria-label="Third group">
            <a href="/services">
                <button type="button" class="btn btn-dark btn-down">ЗАПИСАТЬСЯ</button>
            </a>
        </div>
    </div>
</section>
@include('footer')



















