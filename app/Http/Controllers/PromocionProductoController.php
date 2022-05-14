<?php

namespace App\Http\Controllers;

use App\Models\PromocionProducto;
use Illuminate\Http\Request;
use App\Http\Requests\StorePromocionProductoRequest;
use App\Http\Requests\UpdatePromocionProductoRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Promocion;

class PromocionProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina(){
        $promocion=Promocion::all();
        return view('/promocion',compact('promocion'));
    }
    public function index( Request $request )
    {
        $texto=trim($request->get('texto'));
       $promocionpro=DB::table('promocion_productos')
           ->select('id','descripcion','precio','contacto_celular','rubro','fecha','imagen')
        ->where('descripcion','LIKE','%' .$texto .'%')
        ->orderBy('fecha','asc')
       ->paginate(5);

        return view('crud_promocion.index',compact('promocionpro','texto'));

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud_promocion.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromocionProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            $request->validate([
                'descripcion'=> 'required','precio' => 'required', 'contacto_celular'=>'required','rubro'=>'required','fecha'=> 'required','imagen' => 'required|image|mimes:jpeg,png,svg,gif|max:7168'
            ]);
            $promocionpro = $request->all();
            if($imagen=$request->file('imagen')){
            $rutaGuardarImg ='images/';
            $imagenPromocion=date('YmdHis'). "." .$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenPromocion);
            $promocionpro['imagen']="$imagenPromocion";
            }
            PromocionProducto::create($promocionpro);

            return redirect()->route('crud_promocion.index');

    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromocionProducto  $promocionProducto
     * @return \Illuminate\Http\Response
     */
    public function show(PromocionProducto $promocionProducto)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromocionProducto  $promocionProducto
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $promocionpro=PromocionProducto::findOrFail($id);
        
        return view('crud_promocion.edit',compact('promocionpro'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromocionProductoRequest  $request
     * @param  \App\Models\PromocionProducto  $promocionProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promocionpro=PromocionProducto::findOrFail($id);
        $promocionpro->descripcion=$request->input('descripcion');
        $promocionpro->precio=$request->input('precio');
        $promocionpro->contacto_celular=$request->input('contacto_celular');
        $promocionpro->rubro=$request->input('rubro');
        $promocionpro->fecha=$request->input('fecha');
        $promocionpro->imagen=$request->input('imagen');
        $promocionpro->save();
        
        return redirect()->route('crud_promocion.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromocionProducto  $promocionProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promocionpro=PromocionProducto::findOrFail($id);
        $promocionpro->delete();
        return redirect()->route('crud_promocion.index');  
      }
}