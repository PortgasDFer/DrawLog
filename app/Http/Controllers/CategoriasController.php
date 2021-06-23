<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Alert;
use Redirect;
use DataTables;

class CategoriasController extends Controller
{
    
    /*
     * json format of datatable
     *
     * @return json 
     */
    public function datatable()
    {
        $categorias=Categoria::where('baja','=',0)->get();
        return DataTables::of($categorias)
                ->addColumn('color','IntAdmin.intCategorias.botones.color')
                ->addColumn('edit','IntAdmin.intCategorias.botones.edit')
                ->addColumn('delete','IntAdmin.intCategorias.botones.delete')
                ->rawColumns(['color','edit','delete'])
                ->toJson(); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('IntAdmin.intCategorias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('IntAdmin.intCategorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria=new Categoria();
        $categoria->name=$request->input('nombre');
        $categoria->description=$request->input('descripcion');
        $categoria->color=$request->input('color');
        $categoria->baja=0;
        $categoria->save();
        alert()->success('DrawLog', 'Categoría registrada con éxito');
        return Redirect::to('/categorias-admin');
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
        $categoria=Categoria::where('id','=',$id)->firstOrFail();
        return view('IntAdmin.intCategorias.edit',compact('categoria'));
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
        $categoria=Categoria::where('id','=',$id)->firstOrFail();
        $categoria->name=$request->input('nombre');
        $categoria->description=$request->input('descripcion');
        $categoria->color=$request->input('color');
        $categoria->baja=0;
        $categoria->save();
        alert()->success('DrawLog', 'Categoría actualizada con éxito');
        return Redirect::to('/categorias-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::find($id)->firstOrFail();
        $categoria->baja=1;
        $categoria->save();
        alert()->warning('DrawLog', 'Has eliminado una categoría');
        return Redirect::to('/categorias-admin');
    }
}
