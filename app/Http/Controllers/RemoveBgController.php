<?php

namespace App\Http\Controllers;

use App\Models\RemoveBg;
use GuzzleHttp\Client;
use App\Http\Requests\StoreRemoveBgRequest;
use App\Http\Requests\UpdateRemoveBgRequest;
use Illuminate\Http\Request;

class RemoveBgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagens = RemoveBg::all()->sortDesc();

        $client = new Client([
            'base_uri' => 'https://api.remove.bg/v1.0/account',
            'headers' => [
                'X-Api-Key' => 'xgviEeDBCpwd98qpoJfAKpn2'
            ]
        ]);
        $responseBg = json_decode($client->request('GET')->getBody());

        return view('removebg', ['imagens' => $imagens, 'responseBg' => $responseBg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRemoveBgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRemoveBgRequest $request)
    {
        $arquivo = $request->file('arquivoImg');
        $nomeArquivo = $arquivo->getClientOriginalName();
        $destOriginal = 'img/removeBg';
        $destBgRemovido = 'img/removeBg/removed';
        $arquivo->move($destOriginal,$arquivo->getClientOriginalName());

        $client = new Client();
        $res = $client->post('https://api.remove.bg/v1.0/removebg', [
            'multipart' => [
                [
                    'name'     => 'image_file',
                    'contents' => fopen("$destOriginal/$nomeArquivo", 'r')
                ],
                [
                    'name'     => 'size',
                    'contents' => 'auto'
                ]
            ],
            'headers' => [
                'X-Api-Key' => 'xgviEeDBCpwd98qpoJfAKpn2'
            ]
        ]);

        $fp = fopen("$destBgRemovido/$nomeArquivo.png", "wb");
        fwrite($fp, $res->getBody());
        fclose($fp);

        RemoveBg::create(['nomeArquivo' => $nomeArquivo]);

        return redirect()->route('removebg.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RemoveBg  $removeBg
     * @return \Illuminate\Http\Response
     */
    public function show(RemoveBg $removeBg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RemoveBg  $removeBg
     * @return \Illuminate\Http\Response
     */
    public function edit(RemoveBg $removeBg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRemoveBgRequest  $request
     * @param  \App\Models\RemoveBg  $removeBg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRemoveBgRequest $request, RemoveBg $removeBg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RemoveBg  $removeBg
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemoveBg $removeBg, $id, Request $request)
    {
        $nomeArquivo = $request->query('nomeArquivo');
        unlink("img/removeBg/$nomeArquivo");
        unlink("img/removeBg/removed/$nomeArquivo.png");

        $removeBg::find($id)->delete();
        return redirect()->route('removebg.index');
    }
}
