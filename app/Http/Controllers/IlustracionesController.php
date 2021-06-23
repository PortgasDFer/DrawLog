<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use App\Ilustracion;
use App\Categoria;
use App\User;
use Alert;
use Redirect,Response;



class IlustracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('IntUsers.ilustraciones.busquedaEtiqueta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::where('baja','=',0)->get();
        return view('IntUsers.ilustraciones.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags= explode(',', $request->tags);
        $draw = new Ilustracion();
        $user = User::find(auth()->id());
        if($request->hasFile('draw')){
            $file = $request->file('draw');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/draws/',$foto);
            $draw->draw=$foto;
        }
        $draw->descripcion=$request->input('descripcion');
        $draw->name_draw=$request->input('nombre');
        $draw->precio =$request->input('precio');
        $draw->$slug=Str::slug(time().$post->titulo);
        $draw->id_categoria=$request->input('categoria');
        $draw->id_user=$user->id;
        $draw->nsfw =$request->input('');
        $draw->likes=0;
        $draw->views=0;
        $draw->estado="Aprobada";
        $draw->save();

        $draw->tag($tags);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
