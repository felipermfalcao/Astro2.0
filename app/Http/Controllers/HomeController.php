<?php

namespace App\Http\Controllers;

//use Google\Cloud\Translate\V2\TranslateClient;
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
    public function index(Request $request)
    {
        $client = new Client([
            //'base_uri' => 'https://api.openweathermap.org/data/2.5/onecall?lat=-23.54&lon=-46.63&id=6320062&lang=pt_br&exclude=minutely&units=metric&appid=3be8dd33c3c2a76d04578be5e44015d7'
            'base_uri' => 'https://api.openweathermap.org/data/2.5/onecall?lat=-3.73&lon=-38.5&id=6320062&lang=pt_br&exclude=minutely&units=metric&appid=3be8dd33c3c2a76d04578be5e44015d7'
        ]);
        $response = json_decode($client->request('GET')->getBody());

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

        //APOD NASA
        $existeData = $request->query('data');
        if (isset($existeData)){
            $dataEscolhida = $request->query('data');
        }
        else {
            $dataEscolhida = date("Y-m-d");
        }
        $clientNasa = new Client([
            'base_uri' => "https://api.nasa.gov/planetary/apod?date=$dataEscolhida&api_key=XMGMg97ztxLJBQU1AwF5TNkLdfmcVNsW5oXrLdnn"
        ]);
        $apod = json_decode($clientNasa->request('GET')->getBody());

//        $translate = new TranslateClient([
//            'keyFilePath' => 'json/gtranslate-astro20-f45855739aa5.json'
//        ]);
//        $explanation_translate = $translate->translate("$apod->explanation", [
//            'target' => 'pt_br' // 'fr' is a ISO-639-1 code
//        ]);
//        $title_translate = $translate->translate("$apod->title", [
//            'target' => 'pt_br' // 'fr' is a ISO-639-1 code
//        ]);
        return view('home', ['response' => $response, 'response_lua1' => $response_lua1 , 'response_lua2' => $response_lua2, 'apod' => $apod]);
    }
}
