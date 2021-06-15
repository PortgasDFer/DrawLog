<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

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
            return view('welcome',compact('categorias'));
        }elseif($request->user()->hasRole('admin')){
            return view('dashboard');
        }
    }
}
