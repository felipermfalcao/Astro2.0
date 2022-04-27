<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SateliteController extends Controller
{
    public function index(Request $request, $sat)
    {
        $url = '';
        $mundo = false;
        $urlM = '';
        $existe_data = $request->query('data');
        if(isset($existe_data))
        {
            $data = $existe_data;
        }
        else {
            $data = date("Y-m-d");
        }

        if($sat == 1){
            //AmericaVisivel
            $url = "https://apisat.inmet.gov.br/GOES/AS/VI/$data";

        }
        elseif($sat == 2)
        {
            //AmericaInfraTermal
            $url = "https://apisat.inmet.gov.br/GOES/AS/IV/$data";
        }elseif($sat == 3)
        {
            //America Vapor
            $url = "https://apisat.inmet.gov.br/GOES/AS/VA/$data";
        }elseif($sat == 4)
        {
            //America Vapor Realçado
            $url = "https://apisat.inmet.gov.br/GOES/AS/VP/$data";
        }elseif($sat == 5)
        {
            //America Topo nuvens
            $url = "https://apisat.inmet.gov.br/GOES/AS/TN/$data";
        }elseif($sat == 6)
        {
            //Brasil visível
            $url = "https://apisat.inmet.gov.br/GOES/BR/VI/$data";
        }elseif($sat == 7)
        {
            //Brasil InfraTermal
            $url = "https://apisat.inmet.gov.br/GOES/BR/IV/$data";
        }elseif($sat == 8)
        {
            //Brasil Vapor dagua
            $url = "https://apisat.inmet.gov.br/GOES/BR/VA/$data";
        }elseif($sat == 9)
        {
            //Brasil Vapor dagua relcado
            $url = "https://apisat.inmet.gov.br/GOES/BR/VP/$data";
        }elseif($sat == 10)
        {
            //Brasil topo nuvens
            $url = "https://apisat.inmet.gov.br/GOES/BR/TN/$data";
        }elseif($sat == 11)
        {
            //Brasil visível
            $url = "https://apisat.inmet.gov.br/GOES/NE/VI/$data";
        }elseif($sat == 12)
        {
            //Brasil InfraTermal
            $url = "https://apisat.inmet.gov.br/GOES/NE/IV/$data";
        }elseif($sat == 13)
        {
            //Brasil Vapor dagua
            $url = "https://apisat.inmet.gov.br/GOES/NE/VA/$data";
        }elseif($sat == 14)
        {
            //Brasil Vapor dagua relcado
            $url = "https://apisat.inmet.gov.br/GOES/NE/VP/$data";
        }elseif($sat == 15)
        {
            //Brasil topo nuvens
            $url = "https://apisat.inmet.gov.br/GOES/NE/TN/$data";
        }elseif($sat == 16)
        {
            //Mundo Leste
            $urlM = 'https://felipefalcao.com.br/astro/satmundo.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 17)
        {
            //Mundo Leste Full
            $urlM = 'https://felipefalcao.com.br/astro/satmundoFull.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 18)
        {
            //Mundo Oeste
            $urlM = 'https://felipefalcao.com.br/astro/satmundo_Oeste.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 19)
        {
            //Mundo Oeste Full
            $urlM = 'https://felipefalcao.com.br/astro/satmundo_Oeste_Full.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 20)
        {
            //Sat Atlântico
            $urlM = 'https://felipefalcao.com.br/astro/satAtlantico.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 21)
        {
            //Sat Atlântico Full
            $urlM = 'https://felipefalcao.com.br/astro/satAtlantico_full.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 22)
        {
            //Sat Caribe
            $urlM = 'https://felipefalcao.com.br/astro/satCaribe.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 23)
        {
            //Sat Caribe Full
            $urlM = 'https://felipefalcao.com.br/astro/satCaribe_Full.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 24)
        {
            //Sat Ásia
            $urlM = 'https://felipefalcao.com.br/astro/satAsia.php';
            $mundo = true;
            $url = 'https://google.com';
        }elseif($sat == 25)
        {
            //Sat Ásia Globo
            $urlM = 'https://felipefalcao.com.br/astro/satAsia_globo.php';
            $mundo = true;
            $url = 'https://google.com';
        }

        $client = new Client([
            'base_uri' => $url
        ]);
        $dadosTempo = json_decode($client->request('GET')->getBody());

        return view('satelite', ['dadosTempo'=>$dadosTempo, 'sat' => $sat, 'mundo'=>$mundo, 'urlM'=>$urlM ]);

    }
}
