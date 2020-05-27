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
                        <label for="name" class="col-md-6 col-form-label">Имя*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="phone" class="col-md-6 col-form-label">Номер телефона*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group col">
                    <label for="email" class="col-md-6  col-form-label">Эл. почта*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    </div>

                    <div class="form-group col">
                        <label for="message" class="col-md-6 col-form-label">Добавьте сообщение</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="message" name="message">
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="message" class="col-md-6 col-form-label">*Обязательные поля</label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col offset-md-4">
                            <button type="submit" class="btn btn-dark">
                                Добавить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
