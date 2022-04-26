@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-8 order-2">
                            <h3 class="m-0">{{$response->city}} <b>{{$response->temp}}ºC</b></h3>
                            <h5 class="m-0"><b>{{$response->description}}</b></h5>
                            <p class="m-0"><b>{{$response->date}} | {{$response->time}}</b></p>
                            <p class="m-0">Humidade: <b>{{$response->humidity}}%</b></p>
                            <p class="m-0">Vento: <b>{{$response->wind_speedy}}</b></p>
                            <p class="m-0">Nascer do sol: <b>{{$response->sunrise}}</b></p>
                            <p class="m-0">Pôr do sol: <b>{{$response->sunset}}</b></p>

                            <div class="row">

                                @foreach($response->forecast as $forecast)
                                    <div class="col previsaoDias m-1 text-center {{strpos($forecast->description, 'Chuva')==0 ? 'chuva' : ''}}">
                                        <div class="row">
                                            <div class="col-md-12"><b>{{$forecast->weekday}}</b></div>
                                            <div class="col-md-12">{{$forecast->date}}</div>
                                            <div class="col-md-12"><b>{{$forecast->description}}</b></div>
                                            <div class="col-md-12" style="color: #fc4747;">Max: {{$forecast->max}}</div>
                                            <div class="col-md-12" style="color: #8888e9;">Min: {{$forecast->min}}</div>


                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-md-4 order-1" style="margin-bottom: -40px;">
                            <img src="{{asset("img/imgTemp/" . $response->img_id. ".png")}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-light">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                        echo $response_lua1;
                        echo $response_lua2;
                    @endphp

                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="img-fluid" src="https://www.timeanddate.com/scripts/sunmap.php"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
