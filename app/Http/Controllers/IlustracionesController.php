<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use App\Ilustracion;
use App\Categoria;
use App\User;
use App\Profile;
use App\Tag;
use App\Comentario;
use App\Reporte;
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

        
        $request->validate([
            'descripcion'   => 'required|min:8',
            'nombre'        => 'required|min:4',
            'dibujo'        => 'required|image',
            'categoria'     => 'required|max:3',
            'tags'          => 'required'
        ]);


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
        $user = User::find(auth()->id());

        $visitante=Profile::where('id_user','=',$user->id)->firstOrFail();

        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $autor=User::where('id','=',$draw->id_user)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();

        $comentarios=Comentario::select('comentarios.comentario','comentarios.id_comentario','users.name','users.slug_user','ilustraciones.slug','profiles.avatar')
                        ->join('users','comentarios.id_user','=','users.id')
                        ->join('ilustraciones','comentarios.id_ilustracion','=','ilustraciones.id_ilustracion')
                        ->join('profiles','profiles.id_user','=','users.id')
                        ->where('comentarios.id_ilustracion','=',$draw->id_ilustracion)
                        ->get();


        //return $comentarios;
        return view('IntUsers.ilustraciones.lonely', compact('draw','autor','profile','visitante','comentarios'));
    }

    public function comentario (Request $request, $slug)
    {
        $user = User::find(auth()->id());
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $autor=User::where('id','=',$draw->id_user)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();
        $visitante=Profile::where('id_user','=',$user->id)->firstOrFail();
        $comentario=new Comentario();
        $comentario->comentario=$request->input('comentario');
        $comentario->id_user=$request->input('id_user');
        $comentario->id_ilustracion=$draw->id_ilustracion;
        $comentario->save();
        $comentarios=Comentario::select('comentarios.comentario','comentarios.id_comentario','users.name','users.slug_user','ilustraciones.slug','profiles.avatar')
                        ->join('users','comentarios.id_user','=','users.id')
                        ->join('ilustraciones','comentarios.id_ilustracion','=','ilustraciones.id_ilustracion')
                        ->join('profiles','profiles.id_user','=','users.id')
                        ->where('comentarios.id_ilustracion','=',$draw->id_ilustracion)
                        ->get();
        alert()->success('DrawLog', 'Comentario publicado');
        return view('IntUsers.ilustraciones.lonely', compact('draw','autor','profile','visitante','comentarios'));
    }
    public function busquedaxCategoria($name)
    {
        $categoria=Categoria::where('name','=',$name)->firstOrFail();
        $draws=Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
        ->join('users','users.id','=','ilustraciones.id_user')
        ->where('ilustraciones.id_categoria','=',$categoria->id)
        ->where('ilustraciones.baja','=',0)
        ->paginate(12);
        $anothers = Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();
        return view('IntUsers.ilustraciones.busquedaCat',compact('categoria','draws','anothers'));
    }

    public function busquedaxEtiqueta($slug)
    {
        
        $tag=Tag::where('slug','=',$slug)->firstOrFail();

        $draws=Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->withAnyTag($slug)
                            ->where('ilustraciones.baja','=',0)
                            ->paginate(12);

        $anothers = Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();
        return view('IntUsers.ilustraciones.busquedaEtiqueta', compact('tag','draws','anothers'));
    }

    public function busquedaxPalabra(Request $request)
    {
        $palabra = $request->get('search');

        $draws=Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->search($palabra)
                            ->paginate(12);
                            
        $anothers = Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();
        return view('IntUsers.ilustraciones.busqueda',compact('palabra','draws','anothers'));
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
        $request->validate([
            'descripcion'   => 'required|min:8',
            'nombre'        => 'required|min:4',
            'categoria'     => 'required|max:3',
            'tags'          => 'required'
        ]);
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

    public function like($slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $draw->likes+=1;
        $draw->save();
        $user = User::find(auth()->id());
        $autor=User::where('id','=',$draw->id_user)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();
        $visitante=Profile::where('id_user','=',$user->id)->firstOrFail();
        $comentarios=Comentario::select('comentarios.comentario','comentarios.id_comentario','users.name','users.slug_user','ilustraciones.slug','profiles.avatar')
                        ->join('users','comentarios.id_user','=','users.id')
                        ->join('ilustraciones','comentarios.id_ilustracion','=','ilustraciones.id_ilustracion')
                        ->join('profiles','profiles.id_user','=','users.id')
                        ->where('comentarios.id_ilustracion','=',$draw->id_ilustracion)
                        ->get();
        alert()->success('DrawLog', 'Has dado like a esta foto ♥');
        return view('IntUsers.ilustraciones.lonely', compact('draw','autor','profile','visitante','comentarios'));
    }

    public function follow($slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $user = User::find(auth()->id());
        $autor=User::where('id','=',$draw->id_user)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();
        $profile->seguidores+=1;
        $profile->save();
        $visitante=Profile::where('id_user','=',$user->id)->firstOrFail();
        $comentarios=Comentario::select('comentarios.comentario','comentarios.id_comentario','users.name','users.slug_user','ilustraciones.slug','profiles.avatar')
                        ->join('users','comentarios.id_user','=','users.id')
                        ->join('ilustraciones','comentarios.id_ilustracion','=','ilustraciones.id_ilustracion')
                        ->join('profiles','profiles.id_user','=','users.id')
                        ->where('comentarios.id_ilustracion','=',$draw->id_ilustracion)
                        ->get();
        alert()->success('DrawLog', 'Ahora sigues a este usuario ♥');
        return view('IntUsers.ilustraciones.lonely', compact('draw','autor','profile','visitante','comentarios'));
    }

    public function followProfile($slug)
    {
        $autor=User::where('slug_user','=',$slug)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();
        $profile->seguidores+=1;
        $profile->save();
        alert()->success('DrawLog', 'Ahora sigues a este usuario ♥');
        return Redirect::to('/home');
    }
    public function reporte(Request $request, $slug)
    {
        $draw=Ilustracion::where('slug','=',$slug)->firstOrFail();
        $draw->estado="Reportada";
        $draw->save();
        $user = User::find(auth()->id());
        $reporte = new Reporte();
        $reporte->descripcion = $request->input('reporte');
        $reporte->estado = "Abierto";
        $reporte->id_ilustracion=$draw->id_ilustracion;
        $reporte->id_user=$user->id;
        $reporte->save();
        $autor=User::where('id','=',$draw->id_user)->firstOrFail();
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();
        $visitante=Profile::where('id_user','=',$user->id)->firstOrFail();
        $comentarios=Comentario::select('comentarios.comentario','comentarios.id_comentario','users.name','users.slug_user','ilustraciones.slug','profiles.avatar')
                        ->join('users','comentarios.id_user','=','users.id')
                        ->join('ilustraciones','comentarios.id_ilustracion','=','ilustraciones.id_ilustracion')
                        ->join('profiles','profiles.id_user','=','users.id')
                        ->where('comentarios.id_ilustracion','=',$draw->id_ilustracion)
                        ->get();
        alert()->warning('DrawLog', 'Tú reporte se ha enviado con éxito');
        return view('IntUsers.ilustraciones.lonely', compact('draw','autor','profile','visitante','comentarios'));
    }
}
