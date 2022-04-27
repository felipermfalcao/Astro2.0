<h1 style="font-size: 30px;">{{$titulo}} - {{$anoC}}</h1>
<div id="wg-api-football-standings"
     data-host="v3.football.api-sports.io"
     data-league="{{$id}}"
     data-team=""
     data-season="{{isset($anoC) ? $anoC : $ano}}"
     data-key="8567c6e5eade0e9932043fca48dc429c"
     data-theme="dark"
     data-show-errors="false"
     class="api_football_loader"></div>

<h1 style="font-size: 60px; padding-top: 50px;">Rodadas</h1>
<div id="wg-api-football-fixtures"
     data-host="v3.football.api-sports.io"
     data-refresh="0"
     data-date=""
     data-league="{{$id}}"
     data-team=""
     data-season="{{isset($anoC) ? $anoC : $ano}}"
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
