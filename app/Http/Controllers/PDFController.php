<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function PDFOrden($id)
    {
        $orden = Order::find($id);

        $items = json_decode($orden->content);
        $date = $orden->created_at;
        $fecha = $date->format('d/m/Y'); 

        $pdf = PDF::loadview('admin.reportes.orden',compact('orden','items','fecha'));
    return $pdf->stream('Orden.pdf');

    }
}