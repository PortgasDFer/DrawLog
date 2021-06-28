<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use App\Ilustracion;
use App\Categoria;
use App\User;
use App\Profile;
use Alert;
use Carbon\Carbon;
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

        $draw->descripcion=$request->input('descripcion');
        $draw->name_draw=$request->input('nombre');
         if($request->hasFile('dibujo')){
            $file = $request->file('dibujo');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/draws/',$foto);
            $draw->art=$foto;
        }
        $draw->precio =$request->input('precio');
        $draw->slug=Str::slug(time().$draw->name_draw);
        $draw->id_categoria=$request->input('categoria');
        $draw->id_user=$user->id;
        $draw->nsfw =$request->input('nsfw');
        $draw->likes=0;
        $draw->views=0;
        $draw->baja=0;
        $draw->estado="Aprobada";
        $draw->save();
        //dd($draw);
        $draw->tag($tags);
        alert()->success('DrawLog', 'Publicación realizada correctamente');
        return Redirect::to('/myprofile');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
    }

    public function consultarIlustracion($slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $autor=User::find($draw->id_user)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();

        return view('IntUsers.ilustraciones.lonely',compact('draw','autor','profile'));
    }

    public function busquedaxCategoria($name)
    {
        $categoria=Categoria::where('name','=',$name)->firstOrFail();
        $draws=Ilustracion::where('id_categoria','=', $categoria->id)->get();
        return view('IntUsers.ilustraciones.busquedaCat',compact('categoria','draws'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        //return $draw;
        //
        $categorias=Categoria::where('baja','=',0)->get();

        return view('IntUsers.ilustraciones.edit',compact('draw','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $tags= explode(',', $request->tags);
        $user = User::find(auth()->id());

        $draw->descripcion=$request->input('descripcion');
        $draw->name_draw=$request->input('nombre');
         if($request->hasFile('dibujo')){
            $file_path = public_path() . "/draws/$draw->art";
            \File::delete($file_path);
            $file = $request->file('dibujo');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/draws/',$foto);
            $draw->art=$foto;
        }
        $draw->precio =$request->input('precio');
        $draw->slug=Str::slug(time().$draw->name_draw);
        $draw->id_categoria=$request->input('categoria');
        $draw->id_user=$user->id;
        $draw->nsfw =$request->input('nsfw');
        $draw->baja=0;
        $draw->estado="Aprobada";
        $draw->save();
        $draw->tag($tags);
        alert()->success('DrawLog', 'Publicación actualizada correctamente');
        return Redirect::to('/myprofile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $draw->baja=1;
        $draw->save();
        alert()->warning('DrawLog', 'Publicación eliminada');
        return Redirect::to('/myprofile');
    }
}
