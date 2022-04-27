@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">

                @php
                    $ano = date("Y");
                    $hoje = date("Y-m-d");

                @endphp

            <div class="col-md-12">
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
                            <select id="anoC" name="anoC">
                                <option value="1994">1994</option
                                <option value="1998">1998</option>
                                <option value="2002">2002</option>
                                <option value="2006" {{old('anoC') == $anoC ? 'selectec' : ''}}>2006</option>
                                <option value="2010">2010</option>
                                <option value="2014">2014</option>
                                <option value="2018">2018</option>
                                <option value="2022">2022</option>
                                <option value="2026">2026</option>
                                <option value="2030">2030</option>
                                <option value="2034">2034</option>
                                <option value="2036">2036</option>
                                <option value="2040">2040</option>

                            </select>
                            <input type="submit">
                        </form>
                @endif
                @include('_partial.futebol.jogos')
            @endif
            </div>


        </div>
    </div>
@endsection
