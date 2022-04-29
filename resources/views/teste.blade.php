@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 text-center">
                   @php
                   $teste = str_replace('src="', 'src="https://www.painelglobal.com.br/', $response);
                   $teste2 = str_replace('href="', 'href="https://www.painelglobal.com.br/', $teste);
                    echo $teste2;
                   @endphp

            </div>


        </div>
    </div>
@endsection
