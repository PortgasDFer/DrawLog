<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Ilustracion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        if($request->user()->hasRole('user')){
            $categorias=Categoria::where('baja','=',0)->inRandomOrder()->limit(6)->get();;
            $draws=Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();

            $ranking=Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->orderBy('likes', 'DESC')
                            ->limit(6)
                            ->get();
            return view('welcome',compact('categorias','draws','ranking'));
        }elseif($request->user()->hasRole('admin')){
            return view('dashboard');
        }
    }
}
