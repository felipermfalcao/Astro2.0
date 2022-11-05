<h1 style="font-size: 30px;">{{$titulo}} - {{$anoC}}</h1>
<div id="wg-api-football-standings"
     data-host="v3.football.api-sports.io"
     data-league="{{$id}}"
     data-team=""
     data-season="{{isset($anoC) ? $anoC : $ano}}"
     data-key="8567c6e5eade0e9932043fca48dc429c"
     data-theme="dark"
     data-show-errors="false"
     data-show-logos="true"
     class="wg_loader"></div>

<h1 style="font-size: 60px; padding-top: 50px;">Rodadas</h1>
<div id="wg-api-football-games"
     data-host="v3.football.api-sports.io"
     data-key="8567c6e5eade0e9932043fca48dc429c"
     data-date=""
     data-league="{{$id}}"
     data-season="{{isset($anoC) ? $anoC : $ano}}"
     data-theme="dark"
     data-refresh="0"
     data-show-toolbar="true"
     data-show-errors="false"
     data-show-logos="true"
     data-modal-game="true"
     data-modal-standings="true"
     data-modal-show-logos="true">
</div>


<!--<div id="wg-api-football-fixtures"
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
</div>-->

<!--https://widgets.api-sports.io/football/1.1.8/widget.js-->
<script
    type="module"
    src="https://widgets.api-sports.io/2.0.3/widgets.js">
</script>
