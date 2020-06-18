@extends('layouts.app')
@section('content')
    <div class="container services mt-3 mb-5">
        <div class="title mb-5">
            <h2>Все  услуги</h2>
        </div>
    @foreach($allservices as $service)
            <div class="container-service mb-5">
                <h4>{{$service->name}}</h4>
                <div class="row">
                    <div class="picture-service">
                        <img src="{{$service->path}}" alt="" style="width: 100px"/>
                     </div>
                    <div class="content-service">
                        {!! $service->description !!}
                        <p>{{$service->time}}</p>
                        <p>{{$service->price}} грн.</p>
                    </div>
                </div>
             <p>----------------------</p>
             Исполнитель: {{$service->user->name}}
             </div>
    <div class="row mb-5 ml-3 mr-5">
         <a href="/admin/services/{{$service->id}}/edit" class="btn btn-dark">Редактировать</a>
           <form action="/admin/services/{{$service->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button  class="btn btn-dark ml-5">Удалить</button>
           </form>
    </div>
    @endforeach
        <div class="container-pagination text-align-centre">
            {{$allservices->links()}}
        </div>
    </div>
@endsection
