@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('_partial.home.tempo')
        @include('_partial.home.lua')

        <div class="col-md-12">
            <img class="img-fluid" src="https://www.timeanddate.com/scripts/sunmap.php">
        </div>

        @include('_partial.home.iss')
        @include('_partial.home.apod')

    </div>
</div>
@endsection
