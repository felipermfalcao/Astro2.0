@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">

            @php
                $ano = date("Y");
                $hoje = date("Y-m-d");

            @endphp

            <div class="col-md-12">
                <h1 style="font-size: 60px; padding-top: 50px;">Tabela</h1>
                <div id="wg-api-football-standings"
                     data-host="v3.football.api-sports.io"
                     data-league="75"
                     data-team=""
                     data-season="<?php echo $ano; ?>"
                     data-key="8567c6e5eade0e9932043fca48dc429c"
                     data-theme="dark"
                     data-show-errors="false"
                     class="api_football_loader"></div>

                <h1 style="font-size: 60px; padding-top: 50px;">Rodadas</h1>
                <div id="wg-api-football-fixtures"
                     data-host="v3.football.api-sports.io"
                     data-refresh="0"
                     data-date=""
                     data-league="75"
                     data-team=""
                     data-season="<?php echo $ano; ?>"
                     data-last=""
                     data-next=""
                     data-key="8567c6e5eade0e9932043fca48dc429c"
                     data-theme=""
                     data-show-errors="false"
                     class="api_football_loader">
                </div>

                <script
                    type="module"
                    src="https://widgets.api-sports.io/football/1.1.8/widget.js">
                </script>

            </div>


        </div>
    </div>
@endsection
