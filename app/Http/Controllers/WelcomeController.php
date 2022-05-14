<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\Noticia;


class WelcomeController extends Controller
{
    public function __invoke()
    {

        if (auth()->user()) {

            $pendiente = Order::where('status', 2)->where('user_id', auth()->user()->id)->count();

            if ($pendiente) {

                $mensaje = "Usted tiene $pendiente pedido(s) pendiente(s). <a class='font-bold' href='" . route('orders.index') ."?status=1'>Ir a pagar</a>";

                session()->flash('flash.banner', $mensaje);
            }

        }

        $categories = Category::all();
     
        $noti_id = Noticia::select("id","titulo_noticia")->orderBy('id','desc')->latest()->first();


        return view('welcome', compact('categories','noti_id'));
        
    }

}