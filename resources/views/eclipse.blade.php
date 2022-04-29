@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 text-center">
                <div class="row">
                    @foreach($response as $r)
                        <div class="col-md-6">
                            <h3>{{$r['titulo']}}</h3>
                            <h5>{{$r['subtitulo']}}</h5>
                            <img class="img-fluid" src="{{$r['imagem']}}"/></br>
                            <a href="https://www.timeanddate.com/{{$r['link']}}" role="button" class="btn btn-primary mt-2 mb-2">Detalhes</a>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
