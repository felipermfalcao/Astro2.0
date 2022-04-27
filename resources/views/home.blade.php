@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('_partial.home.tempo')
        @include('_partial.home.lua')
        @include('_partial.home.iss')
        @include('_partial.home.apod')

    </div>
</div>
@endsection
