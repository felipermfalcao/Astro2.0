<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class FutebolController extends Controller
{
    public function index(Request $request, $id )
    {
        $live = '';
        $ano = '';
        if($id == 99999)
        {
            $live = 1;
        }

        return view('futebol', ['id' => $id, 'live'=>$live, 'titulo' => $request->query('titulo'), 'anoC' => $request->query('anoC')]);
    }
}
