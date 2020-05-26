@extends('layouts.app')
@section('content')
    <div class="container services">
        <div class="col">
            <div class="col-md-4"><a href="/admin/services/create">Добавить услугу</a></div>
            <div class="col-md-4"><a href="/admin/services">Редактировать услугу</a></div>
            <div class="col-md-4"><a href="/admin/services/all">Посмотреть услуги</a></div>
            <div class="col-md-4"><a href="/admin/services">Удалить услугу</a></div>
        </div>

    </div>
@endsection
