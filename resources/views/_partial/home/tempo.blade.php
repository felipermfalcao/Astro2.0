<div class="col-md-6">
    <div class="card bg-light">
        <div class="card-body text-center">

            <div class="row">
                <div class="col-md-8 order-2">
                    <h3 class="m-0">{{$response->timezone}} <b>{{$response->current->temp}}ºC</b></h3>
                    <h5 class="m-0"><b>{{$response->current->weather[0]->description}}</b></h5>
                    <p class="m-0"><b>@php echo date("d/m/Y H:i:s", $response->current->dt) @endphp</b></p>
                    <p class="m-0">Sensação térmica: <b>{{$response->current->feels_like}} ºC</b></p>
                    <p class="m-0">Humidade: <b>{{$response->current->humidity}}%</b></p>
                    <p class="m-0">Vento: <b>{{$response->current->wind_speed}}m/s</b></p>
                    <p class="m-0">Direção: <b>{{$response->current->wind_deg}}m/s</b></p>
                    <p class="m-0">Nascer do sol: <b>@php echo date("d/m/Y H:i:s", $response->current->sunrise) @endphp</b></p>
                    <p class="m-0">Pôr do sol: <b>@php echo date("d/m/Y H:i:s", $response->current->sunset) @endphp</b></p>

                    <div class="container horizontal-scrollable">
                        <h5>Hora a hora</h5>
                        <div class="row text-center">
                            @foreach($response->hourly as $horas)
                                <div class="col-md-4">
                                    <div class="row previsaoDias {{strpos($horas->weather[0]->description, 'chuva')===0 ? 'chuva' : ''}}" >
                                        <div class="col-md-12">@php echo date("H:i", $horas->dt) @endphp</div>
                                        <div class="col-md-12" style="background: #999;"><img src="http://openweathermap.org/img/wn/{{$horas->weather[0]->icon}}.png"></div>
                                        <div class="col-md-12">{{$horas->weather[0]->description}}</div>
                                        <div class="col-md-12">T: {{$horas->temp}}</div>
                                        <div class="col-md-12">S: {{$horas->feels_like}}</div>
                                        <div class="col-md-12">Prob. {{($horas->pop) * 100}}%</div>
                                        <div class="col-md-12">1h: {{$horas->feels_like}} mm</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="container horizontal-scrollable">
                        <h5>Próximos dias</h5>
                        <div class="row text-center">
                            @foreach($response->daily as $dias)
                                <div class="col-md-4">
                                    <div class="row previsaoDias {{strpos($dias->weather[0]->description, 'chuva')===0 ? 'chuva' : ''}}">
                                        <div class="col-md-12">@php echo date("d", $dias->dt) @endphp</div>
                                        <div class="col-md-12" style="background: #999;"><img src="http://openweathermap.org/img/wn/{{$dias->weather[0]->icon}}.png"></div>
                                        <div class="col-md-12">{{$dias->weather[0]->description}}</div>
                                        <div class="col-md-12">Max: {{$dias->temp->max}}</div>
                                        <div class="col-md-12">Min: {{$dias->temp->min}}</div>
                                        <div class="col-md-12">SDia: {{$dias->feels_like->day}}</div>
                                        <div class="col-md-12">SDia: {{$dias->feels_like->night}}</div>
                                        <div class="col-md-12">Prob. {{($dias->pop) * 100}}%</div>
                                        <div class="col-md-12">{{$dias->rain}} mm</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="col-md-4 order-1" style="margin-bottom: -40px;">
                    <img src="http://openweathermap.org/img/wn/{{$response->current->weather[0]->icon}}@4x.png">
                </div>
            </div>
        </div>
    </div>
</div>
