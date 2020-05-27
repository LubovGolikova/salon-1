@extends('layouts.app')
@section('content')
    <div class="container services">
        <h1>Все  услуги</h1>

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
                        <p>{{$service->price}}</p>
                    </div>
                </div>
             <p>----------------------</p>
             Исполнитель: {{$service->user->name}}
             </div>

     <a href="/admin/services/{{$service->id}}/edit" class="btn btn-secondary">Редактировать</a>
       <form action="/admin/services/{{$service->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button  class="btn btn-secondary">Удалить</button>
       </form>
    @endforeach
    </div>
@endsection
