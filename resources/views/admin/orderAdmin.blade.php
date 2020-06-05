@extends('layouts.app')
@section('content')
    <div class="container services mt-3">
        <div class="title">
            <h2>Заказы</h2>
        </div>
        <div class="container-table">
            <table class = "table" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Дата записи</th>
                        <th>Время</th>
                        <th>Услуга</th>
                        <th>Заказчик</th>
                        <th>Дата</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orderlines as $orderline)
                    <tr>
                        <div class="container-orderlines row">
                            <td>{{$loop->iteration}}</td>
                            <td><p>{{$orderline->DateT}}</p></td>
                            <td><p>{{$orderline->Times}}</p></td>
                            <td><p>{{$orderline->services_id}}</p></td>
                            <td><p>{{$orderline->customers_id}}</p></td>
                            <td><p>{{\Illuminate\Support\Carbon::parse($orderline->created_at)->format('d.m.Y')}}</p></td>
                        </div>
                        <td>
                            <form action="/admin/orders/{{$orderline->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

