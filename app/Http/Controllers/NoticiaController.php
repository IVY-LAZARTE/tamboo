<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina(){
        $noticias=Noticia::all();
        return view('/noticias',compact('noticias'));
    }
    public function index( Request $request)
    {
        $texto=trim($request->get('texto'));
        $noticias=DB::table('noticias')
             ->select('id','titulo_noticia','tipo_noticia','imagen','fecha')
             ->where('titulo_noticia','LIKE','%' .$texto .'%')
             ->orWhere('tipo_noticia','LIKE','%' .$texto .'%')
             ->orderBy('fecha','asc')
             ->paginate(5);

        return view('crud_noticias.index',compact('noticias','texto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud_noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $request->validate([
            'titulo_noticia'=> 'required','tipo_noticia' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg,gif|max:7168','fecha'=> 'required'
        ]);
        $noticias = $request->all();
        if($imagen=$request->file('imagen')){
        $rutaGuardarImg ='images/';
        $imagenNoticia=date('YmdHis'). "." .$imagen->getClientOriginalExtension();
        $imagen->move($rutaGuardarImg,$imagenNoticia);
        $noticias['imagen']="$imagenNoticia";
        }
        Noticia::create($noticias);
    
        return redirect()->route('crud_noticias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticias=Noticia::findOrFail($id);
        
        return view('crud_noticias.edit',compact('noticias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticias=Noticia::findOrFail($id);
        $noticias->titulo_noticia=$request->input('titulo_noticia');
        $noticias->tipo_noticia=$request->input('tipo_noticia');
        $noticias->imagen=$request->get('imagen');
        $noticias->fecha=$request->input('fecha');
        $noticias->save();
        
        return redirect()->route('crud_noticias.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticias=Noticia::find($id);
        $noticias->delete();
        return view('livewire.show-noticias')->layout('layouts.admin');  
      }
}
