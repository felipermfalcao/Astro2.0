@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 text-center">
                <div class="row">

                    @php
                    $dias = $responseTime[0]['completo'];
                    $horas = $responseTime[2]['completo'];
                    $minutos = $responseTime[4]['completo'];
                    $próximo = date('d/m/Y | H:i', strtotime("+ $dias days $horas hours $minutos minutes"));
                    @endphp

                    <dvi class="col-md-12">
                        <h5>Próximo Eclipse: {{$próximo}}</h5>
                        <h5 mb-4>Falta: {{$dias}} dias, {{$horas}} horas e {{$minutos}} minutos</h5>
                        <hr>
                    </dvi>
                    @foreach($response as $r)
                        <div class="col-md-12">
                            <h3>{{$r['titulo']}}</h3>
                            <h5>{{$r['subtitulo']}}</h5>

                            @php
                            $linkVideo = str_replace('/path-320.png', '/anim2d-380.mp4', $r['imagem']);
                            $linkImagem = str_replace('/path-320.png', '/path2d-380.png', $r['imagem']);
                            @endphp

                            <img class="img-fluid" src="{{$linkImagem}}"/></br>

                            <div class="embed-responsive">
                            <video width="100%" class="embed-responsive-item" controls>
                                <source class="embed-responsive-item" src="{{$linkVideo}}" type="video/mp4">
                                Seu navagador nao suporta a tag video.
                            </video>
                            </div>
                            </br>
                            <a href="https://www.timeanddate.com/{{$r['link']}}" role="button" class="btn btn-primary mt-2 mb-2">Detalhes</a>
                            <hr>
                        </div>
                    @endforeach
                </>
            </div>
        </div>
    </div>
@endsection
