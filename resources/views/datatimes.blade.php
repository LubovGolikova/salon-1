@extends('layouts.app')
@section('content')
    <div class="container services mt-3 mb-5">
        <div class="title mb-5">
            <h2>Записаться</h2>
        </div>

        <form method="POST" action="/order"  enctype="multipart/form-data">
        <div class="row">
                @csrf
                <div class="col-md-4">
                   <div class="title ml-5 mb-2">
                        <h3>Выбрать дату : </h3>
                    </div>
                        <div class="calendar ">
                        <input type="text" id="datepicker" name="DateT" value="{{ old('DateT') }}"  width="276" />
                        <script>

                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4',
                                locale: 'ru-ru',
                                format: "dd.mm.yyyy",
                                minDate: new Date()
                            });

                            $('#datepicker').change(function() {
                                var date = $(this).val();
                                $("#getDate").text(date);

                                $('.time-container .prone').removeClass('disabled');
                                $("#getTime").text('Выберите время');
                                $('input[name=Times]').val('');

                                $.ajax({
                                    type: 'POST',
                                    url: '/getOrderLines',
                                    data: {date: date, _token: $('meta[name="csrf-token"]').attr('content')},
                                    dataType: 'json',
                                    success: function(orderLines){
                                        for(let i=0; i<orderLines.length; i++){
                                            $('.time-container .prone:contains('+orderLines[i]+')').addClass('disabled')
                                            }
                                    }
                                });
                            });
                        </script>
                    </div>
                 </div>
                <div class="col-md-4">
                  <div class="time-container ml-5 ml-md-0">
                       <h2>День</h2>
                      <div class="btn-group-vertical times" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-dark btn-time prone">12:00</button>
                          <button type="button" class="btn btn-dark btn-time prone">13:00</button>
                          <button type="button" class="btn btn-dark btn-time prone">14:00</button>
                          <button type="button" class="btn btn-dark btn-time prone">15:00</button>
                      </div>
                      <h2>Вечер</h2>
                      <div class="btn-group-vertical times" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-dark  btn-time prone">16:00</button>
                          <button type="button" class="btn btn-dark btn-time prone">17:00</button>
                          <button type="button" class="btn btn-dark btn-time prone">18:00</button>
                          <button type="button" class="btn btn-dark btn-time prone">19:00</button>
                      </div>
                  </div>
              </div>
                <div class="col-md-4">
                    <div class="container-datetime-service ml-5 ml-md-0">
                        <h2>{{$service->name}}</h2>
                        <h2>{!! $service->description!!}</h2>
                        <h2>{{$service->time}}</h2>
                        <h2>{{$service->price}} грн.</h2>
                        <h3 id="getDate">Выберите дату</h3>
                        <h3 id="getTime">Выберите время</h3>
                        <input type="hidden" id="getTimeinput" name="Times" value="{{ old('Times') }}" />
                        <input type="hidden" id="service" name="service" value="{{ $service->id }}" />
                        <button type="submit"  class="btn btn-dark btn-goon">ПРОДОЛЖИТЬ</button>
                    </div>
                </div>
        </div>
        </form>
    </div>


@endsection
