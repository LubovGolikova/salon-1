@extends('layouts.app')
@section('content')
<section class="box-3">
    <div class="container order">
        <div class="back">
            <a type="button"  href="/" >< Назад</a>
        </div>
        <div class="title">
            <h2>Укажите Ваши данные</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="/order/add">
                    @csrf
                    <div class="form-group col">
                        <label for="name" class

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
