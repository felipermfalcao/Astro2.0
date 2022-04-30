@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center text-center">

            <div class="col-md-12 mb-3">
                <h5 class="pb-3">Imagens restantes mês: {{$responseBg->data->attributes->api->free_calls}}/50</h5>
                <form action="{{route('removebg.store')}}" name="imgRemove" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="arquivoImg"/>
                    <input class="btn btn-primary" type="submit" name="submit"/>
                </form>
            </div>

            <div class="col-md-12 text-center">
                <hr>
                <table border="1" width="100%" align="center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Original</th>
                            <th>Removido</th>
                            <th>Criado</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($imagens as $imagem)
                        <tr>
                            <th>{{$imagem->id}}</th>
                            <th><img class="img-fluid" src="img/removeBg/{{$imagem->nomeArquivo}}"/></th>
                            <th><img class="img-fluid" src="img/removeBg/removed/{{$imagem->nomeArquivo}}.png"/></th>
                            <th>{{$imagem->created_at}}</th>
                            <th>
                                <form action="{{route('removebg.destroy', [$imagem->id, 'nomeArquivo' => $imagem->nomeArquivo])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Excluir</button>
                                </form></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>


    </div>
    </div>
@endsection
