@include('header')
<section class="box-2s ">
    <div class="box-2s-text align-items-center text-center justify-content-center">
        <h3>Онлайн запись</h3>
        <div class="btn-group nav-service" role="group" aria-label="Basic example">
            <a  class="tr {!!Request::is('/manicure') ? 'active' : '' !!}">Маникюр</a>
            <a class="tr {!!Request::is('/coating') ? 'active' : '' !!}">Покрытие</a>
            <a  class="tr{!!Request::is('/pedicure') ? 'active' : '' !!}">Педикюр</a>
        </div>
    </div>

<div class="row align-items-center justify-content-center pt-5 text-center">
     @foreach($allservices as $service)
           <div class="card ml-5" style="width: 18rem;">
             <img src="{{$service->path}}" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">{{$service->name}}</h5>
               <p class="card-text">{!!$service->description!!}</p>
                <p class="card-text">{{$service->time}}</p>
                 <p class="card-text">{{$service->price}} грн.</p>
               <a href="/datatimes/{{$service->id}}" class="btn btn-dark">Добавить</a>
             </div>
           </div>
       @endforeach
</div>

</section>
@include('footer')



















