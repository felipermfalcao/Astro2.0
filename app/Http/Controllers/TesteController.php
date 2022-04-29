<?php

namespace App\Http\Controllers;

use Goutte\Client as ClientGoutte;

class TesteController extends Controller
{
    public function index()
    {
        $client = new ClientGoutte;
        $crawler = $client->request('GET', 'https://www.painelglobal.com.br/');
        $response = $crawler->html();


        //$response = '';
//        foreach ($crawler->filter("[class='']") as $node) {
//            $response[] = $node->children()->nodeValue;
//        }

//        $response = $crawler->filter('table')->each(function($node){
//            return [
//                'completo' => $node->html(),
//        ];
//        });

        return view('teste', ['response' => $response]);
    }
}
