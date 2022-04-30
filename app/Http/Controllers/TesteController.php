<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Google\Cloud\Translate\V2\TranslateClient;

class TesteController extends Controller
{
    public function index()
    {
        $client = new Client();
        $res = $client->post('https://api.remove.bg/v1.0/removebg', [
            'multipart' => [
                [
                    'name'     => 'image_file',
                    'contents' => fopen('img/removedBg/homem.jpg', 'r')
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

        $fp = fopen("img/removeBr/no-bg.png", "wb");
        fwrite($fp, $res->getBody());
        fclose($fp);

        return view('teste');
    }
}
