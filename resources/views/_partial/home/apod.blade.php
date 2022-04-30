<div class="col-md-12">
    <div class="card bg-light">
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-12">
                    APOD - {{date('d/m/Y', strtotime($apod->date))}}
                    <form action="{{route('home')}}" method="get">
                        <input type="date" id="data" name="data">
                        <input type="submit">
                    </form>
                </div>

                <div class="col-md-12"><h2>{{$title_trans['text']}}</h2></div>
                <div class="col-md-12"><h5>{{isset($apod->copyright)==true ? $apod->copyright : ''}}</h5></div>
                <div class="col-md-12 pb-3"><a class="btn btn-primary" role="button" target="_blank" href="{{isset($apod->hdurl)==true ? $apod->hdurl : ''}}">Alta resolução</a></div>
                <div class="col-md-12">
                    @if($apod->media_type == 'image')
                        <img class="img-fluid" src="{{$apod->url}}"/>
                    @else
                        <iframe width="960" height="540" src="{{$apod->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    @endif

                </div>
                <div class="col-md-12 pt-3" style="font-size: 20px;">{{$expla_trans['text']}}</div>

            </div>

        </div>
    </div>
</div>
