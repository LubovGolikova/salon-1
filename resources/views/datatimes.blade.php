@extends('layouts.app')
@section('content')
    <div class="container services mt-3 mb-5">
        <h1>{{$service->name}}</h1>
        <h1>{!! $service->description!!}</h1>
        <h1>{{$service->time}}</h1>
        <h1>{{$service->price}}</h1>

<div class="calendar">
        <input id="datepicker" width="276" />
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                locale: 'ru-ru',
            });

        </script>
</div>

    </div>


@endsection
