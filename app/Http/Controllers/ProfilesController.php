<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Ilustracion;
use Alert;
use Redirect;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('IntUsers.perfil.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(auth()->id());
        $perfil=new Profile();
        $perfil->nombre=$request->input('nombre');
        $perfil->apellidos=$request->input('apellidos');
        $perfil->pais=$request->input('pais');
        $perfil->emai_paypal=$request->input('paypal');
        $perfil->fb=$request->input('fb');
        $perfil->tw =$request->input('tw');
        $perfil->ig=$request->input('ig');
        if($request->hasFile('avatar')){
            $file_path = public_path() . "/avatars/$perfil->avatar";
            \File::delete($file_path);

            $file = $request->file('avatar');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/avatars/',$foto);
            $perfil->avatar=$foto;
        }
        $perfil->id_user=$user->id;
        $perfil->save();
        alert()->success('DrawLog', 'Datos personales registrados con éxito');
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
        $user=User::where('slug','=', $slug)->firstOrFail();
        $profile=Profile::where('id_user','=', $user->id)->first();
        return view('IntUsers.perfil.profile',compact('user','profile'));
        
    }

    public function myProfile()
    {
        $user = User::find(auth()->id());
        $ilustraciones = Ilustracion::where('id_user','=', $user->id)
                                    ->where('baja','=',0)
                                    ->get();
        $profile=Profile::where('id_user','=', $user->id)->firstOrFail();
        //dd($profile);
        //return $ilustraciones;
        return view('IntUsers.perfil.index',compact('user','profile','ilustraciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
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
        $perfil=Profile::where('id_profile','=',$id)->firstOrFail();
        //dd($perfil);
        $perfil->nombre=$request->input('nombre');
        $perfil->apellidos=$request->input('apellidos');
        $perfil->pais=$request->input('pais');
        $perfil->emai_paypal=$request->input('paypal');
        $perfil->fb=$request->input('fb');
        $perfil->tw =$request->input('tw');
        $perfil->ig=$request->input('ig');
        if($request->hasFile('avatar')){
            $file_path = public_path() . "/avatars/$perfil->avatar";
            \File::delete($file_path);

            $file = $request->file('avatar');
            $foto = time().$file->getClientOriginalName();
            $file->move(public_path().'/avatars/',$foto);
            $perfil->avatar=$foto;
        }
        //dd($perfil);
        $perfil->save();
        alert()->success('DrawLog', 'Datos personales registrados con éxito');
        return Redirect::to('/myprofile');
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
