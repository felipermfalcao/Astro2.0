@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">

        @if($site == 'pocket')
            @include('_partial.news.pocket')
        @elseif($site == 'flow')
            @include('_partial.news.flow')
        @else
            @include('_partial.news.nerd')
        @endif


    </div>
</div>
@endsection
