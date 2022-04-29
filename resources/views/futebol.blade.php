@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">

                @php
                    $ano = date("Y");
                    $hoje = date("Y-m-d");

                @endphp

            <div class="col-md-12 text-center">
            @if($live == 1)
                    <h1 style="font-size: 30px;">{{$titulo}}</h1>
                <div id="wg-api-football-livescore"
                     data-host="v3.football.api-sports.io"
                     data-refresh="60"
                     data-key="8567c6e5eade0e9932043fca48dc429c"
                     data-theme="dark"
                     data-show-errors="true"
                     class="api_football_loader">
                </div>
                <script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js" crossorigin=anonymous></script>
            @else
                @if($id == 34 || $id == 1)
                        <form action="{{route('futebol')}}/{{$id}}" method="get">
                            <label for="anoC">Ano:</label>
                            <input type="hidden" name="titulo" value="{{$titulo}}">
                            <select id="anoC" name="anoC" class="form-select">
                                <option value="1994" {{$anoC == '1994' ? 'selected' : ''}}>1994</option>
                                <option value="1998" {{$anoC == '1998' ? 'selected' : ''}}>1998</option>
                                <option value="2002" {{$anoC == '2002' ? 'selected' : ''}}>2002</option>
                                <option value="2006" {{$anoC == '2006' ? 'selected' : ''}}>2006</option>
                                <option value="2010" {{$anoC == '2010' ? 'selected' : ''}}>2010</option>
                                <option value="2014" {{$anoC == '2014' ? 'selected' : ''}}>2014</option>
                                <option value="2018" {{$anoC == '2018' ? 'selected' : ''}}>2018</option>
                                <option value="2022" {{$anoC == '2022' ? 'selected' : ''}}>2022</option>
                                <option value="2026" {{$anoC == '2026' ? 'selected' : ''}}>2026</option>
                                <option value="2030" {{$anoC == '2030' ? 'selected' : ''}}>2030</option>

                            </select>
                            <input class="btn-primary mt-2 rounded" type="submit">
                        </form>
                @endif
                @include('_partial.futebol.jogos')
            @endif
            </div>


        </div>
    </div>

    <style>
        td{
            font-size: 14px;
        }
    </style>
@endsection
