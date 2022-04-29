<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client as ClientGoutte;

class EclipsesController extends Controller
{
    public function index()
    {
        $client = new ClientGoutte;
        $crawler = $client->request('GET', 'https://www.timeanddate.com/eclipse/');
        //$response = $crawler->filter("[class='art__eclipse-nxt pdflexi']")->html();


        $response = '';
//        foreach ($crawler->filter("[class='']") as $node) {
//            $response[] = $node->children()->nodeValue;
//        }

        $response = $crawler->filter("[class='art__eclipse-nxt pdflexi']")->each(function($node){
            return [
                'completo' => $node->html(),
                'titulo' => $node->filter('h3 > a')->text(),
                'link' => $node->filter('h3 > a')->attr('href'),
                'subtitulo' => $node->filter('p')->text(),
                'imagem' => $node->filter('img')->eq(1)->attr('src')
            ];
        });

        return view('eclipse', ['response' => $response]);
    }
}
