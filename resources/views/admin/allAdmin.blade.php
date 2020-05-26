123
@extends('layouts.app')
@section('content')
    <div class="container services">
        <h1>Все  услуги</h1>

    {{--@foreach($services as $service)--}}
            {{--<div class="container-service mb-5">--}}
                {{--<h4>{{$service->name}}</h4>--}}
                {{--<div class="row">--}}
                    {{--<div class="picture-service">--}}
                        {{--<img src="{{$service->path}}" alt="" style="width: 100px"/>--}}
                     {{--</div>--}}
                    {{--<div class="content-service">--}}
                        {{--{!! $service->description !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
             {{--<p>----------------------</p>--}}
             {{--Исполнитель: {{$service->user->name}}--}}
             {{--</div>--}}
    {{--@endforeach--}}

     {{--<div class="container-pagination">--}}
        {{--{{$services->links()}}--}}
     {{--</div>--}}
    </div>
@endsection