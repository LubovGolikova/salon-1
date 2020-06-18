@include('header')
<section class="box-2s ">
    <div class="box-2s-text align-items-center text-center justify-content-center">
        <h3>Онлайн запись</h3>
        <div class="btn-group nav-service" role="group" aria-label="Basic example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a  class="tr active" data-toggle="tab" href="#manicure">Маникюр</a>
                </li>
                <li class="nav-item">
                    <a  class="tr" data-toggle="tab" href="#coating">Покрытие</a>
                </li>
                <li class="nav-item">
                    <a  class="tr" data-toggle="tab" href="#pedicure">Педикюр</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content">

        <div class="tab-pane fade show active" id="manicure">
            <div class="row align-items-center justify-content-center pt-5 m-0 text-center">
                @for($i=0;$i<=2;$i++)
                    <div class="card ml-md-5 mb-5" style="width: 18rem;">
                        <img src="{{$allservices[$i]->path}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$allservices[$i]->name}}</h5>
                            <p class="card-text">{!!$allservices[$i]->description!!}</p>
                            <p class="card-text">{{$allservices[$i]->time}}</p>
                            <p class="card-text">{{$allservices[$i]->price}} грн.</p>
                            <a href="/datatimes/{{$allservices[$i]->id}}" class="btn btn-dark">Выбрать</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="tab-pane fade" id="coating">
            <div class="row align-items-center justify-content-center pt-5 m-0 text-center">
                @for($i=3;$i<=5;$i++)
                    <div class="card ml-md-5 mb-5" style="width: 18rem;">
                        <img src="{{$allservices[$i]->path}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$allservices[$i]->name}}</h5>
                            <p class="card-text">{!!$allservices[$i]->description!!}</p>
                            <p class="card-text">{{$allservices[$i]->time}}</p>
                            <p class="card-text">{{$allservices[$i]->price}} грн.</p>
                            <a href="/datatimes/{{$allservices[$i]->id}}" class="btn btn-dark">Выбрать</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="tab-pane fade" id="pedicure">
            <div class="row align-items-center justify-content-center pt-5 m-0 text-center">
                @for($i=6;$i<=8;$i++)
                    <div class="card ml-md-5 mb-5" style="width: 18rem;">
                        <img src="{{$allservices[$i]->path}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$allservices[$i]->name}}</h5>
                            <p class="card-text">{!!$allservices[$i]->description!!}</p>
                            <p class="card-text">{{$allservices[$i]->time}}</p>
                            <p class="card-text">{{$allservices[$i]->price}} грн.</p>
                            <a href="/datatimes/{{$allservices[$i]->id}}" class="btn btn-dark">Выбрать</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

</div>

</section>
@include('footer')



















