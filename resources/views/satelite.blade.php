@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            @if($mundo == true)
                <div class="col-md-12" style="height: 85vh;">
                    <iframe class="embed-responsive" width="100%" height="100%" src="{{$urlM}}" allowfullscreen></iframe>
                </div>
            @else
                @include('_partial.satelite.satAmerica')
            @endif



            </div>

            </div>


        </div>
    </div>
@endsection
