<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Goutte\Client as ClientGoutte;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = new Client([
            'base_uri' => 'https://api.hgbrasil.com/weather?woeid=455830&key=2828a17d',
            'timeout'  => 2.0,
        ]);
        $response = json_decode($client->request('GET')->getBody())->results;

        //LUA
        $client = new ClientGoutte();
        $crawler = $client->request('GET', 'https://www.calendarr.com/brasil/lua-hoje/');
        $response_lua1 = $crawler->filter("[id='desc-lua_hoje']")->html();
        $response_lua2 = $crawler->filter("[id='infos-lua_hoje']")->filter("[class='infos']")->html();

//        $file = "https://www.calendarr.com/brasil/lua-hoje/";
//        $contents = preg_match("/^http/", $file) ? http_get_contents($file) : file_get_contents($file);
//
//        $lua = explode('<div class="col-sm-7 mt10">', $contents);
//        $lua2 = explode('<div id="social" class="social-links">', $lua[1]);
//
//        echo $lua2[0];


        return view('home', ['response' => $response, 'response_lua1' => $response_lua1 , 'response_lua2' => $response_lua2,]);
    }
}
