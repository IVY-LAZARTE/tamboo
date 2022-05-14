<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class CargaController extends Controller
{
    public function __invoke(){
        $noti_id = Noticia::select("id","titulo_noticia","fecha","imagen")->orderBy('id','desc')->latest()->first();
        
        return view('carga', compact('noti_id'));

    }
}
