
@extends('layouts.app')
@section('content')
    <div class="container services">
        <h1>Редактировать услугу</h1>
        @if( session('success') )
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/admin/services/{{$service->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Название услуги</label>

                <div class="col">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$service->name}}" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Текстовое описание</label>
                <div class="col">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $service->description}}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <div class="col offset-md-4">
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i>Выбрать
                         </a>
                       </span>
                        <input id="thumbnail" class="form-control" type="text" name="path" value="{{$service->path}}">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$service->path}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="time" class="col-md-4 col-form-label text-md-right">Время</label>

                <div class="col">
                    <input id="time" type="text" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ $service->time}}" required>
                    @error('time')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">Цена</label>

                <div class="col">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $service->price }}" required>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Добавить
                    </button>
                </div>
            </div>
        </form>


    </div>
@endsection
