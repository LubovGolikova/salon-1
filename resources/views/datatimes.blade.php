@extends('layouts.app')
@section('content')
    <div class="container services mt-3 mb-5">
        <div class="title mb-5">
            <h2>Записаться</h2>
        </div>

        <form method="POST" action=""  enctype="multipart/form-data">
        <div class="row">
                @csrf
                <div class="col-md-4">
                    Выбрать дату : <span id="getDate">getDate()</span>
                    <div class="calendar ">
                        <input type="text" id="datepicker" name="DateT" value="{{ old('DateT') }}"  width="276" />
                        <script>
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4',
                                locale: 'ru-ru',
                            });
                        </script>
                    </div>
                 </div>
                <div class="col-md-4">
                  <div class="time-container ">
                       <h2>День</h2>
                      <div class="btn-group-vertical times" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-dark btn-time">12:00</button>
                          <button type="button" class="btn btn-dark btn-time">13:00</button>
                          <button type="button" class="btn btn-dark btn-time">14:00</button>
                          <button type="button" class="btn btn-dark btn-time">15:00</button>
                      </div>
                      <h2>Вечер</h2>
                      <div class="btn-group-vertical times" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-dark  btn-time">16:00</button>
                          <button type="button" class="btn btn-dark btn-time">17:00</button>
                          <button type="button" class="btn btn-dark btn-time">18:00</button>
                          <button type="button" class="btn btn-dark btn-time">19:00</button>
                      </div>
                  </div>
              </div>
                <div class="col-md-4">
                    <div class="container-datetime-service">
                        <h2>{{$service->name}}</h2>
                        <h2>{!! $service->description!!}</h2>
                        <h2>{{$service->time}}</h2>
                        <h2>{{$service->price}} грн.</h2>
                        <h2>getDate()</h2>
                        <h2>getTime()</h2>
                        <button type="submit"  href="/order"  class="btn btn-dark btn-goon">ПРОДОЛЖИТЬ</button>
                    </div>
                </div>
        </div>
        </form>


    </div>


@endsection
