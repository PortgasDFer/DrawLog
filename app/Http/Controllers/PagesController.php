<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ilustracion;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function busquedaxPalabra(Request $request)
    {
        $palabra = $request->get('search');

        $draws=Ilustracion::select('ilustraciones.art','ilustraciones.name_draw','ilustraciones.slug','users.name','users.slug_user')
                            ->join('users','users.id','=','ilustraciones.id_user')
                            ->where('ilustraciones.baja','=',0)
                            ->search($palabra)
                            ->get();
                            
        return view('busqueda',compact('palabra','draws'));
    }

    public function terminos()
    {
        return view('terminos');
    }
}
