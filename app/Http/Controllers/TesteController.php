<?php

namespace App\Http\Controllers;


use Goutte\Client as ClientGoutte;
use Google\Cloud\Translate\V2\TranslateClient;

class TesteController extends Controller
{
    public function index()
    {
        try {
            $translate = new TranslateClient([
                'keyFilePath' => 'json/gtranslate-astro20-f45855739aa5.json'
            ]);
            $result = $translate->translate('Hello world!', [
                'target' => 'pt_br' // 'fr' is a ISO-639-1 code
            ]);
            echo $result['text'];
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        return view('teste');
    }
}
