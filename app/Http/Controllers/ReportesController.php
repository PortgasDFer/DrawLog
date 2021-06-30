<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporte;
use App\Ilustracion;
use App\User;
use App\Profile;
use Alert;
use Redirect;
use DataTables;

class ReportesController extends Controller
{
    public function index()
    {
        return view('IntAdmin.IntReportes.index');
    }

    public function reporte()
    {
        return view('IntAdmin.IntReportes.reporte');
    }

    /*
     * json format of datatable
     *
     * @return json 
     */
    public function datatable()
    {
        $reportes=Reporte::join('ilustraciones','reportes.id_ilustracion','=','ilustraciones.id_ilustracion')
                            ->join('users','reportes.id_user','=','users.id')
                            ->select(array('users.name','ilustraciones.name_draw','ilustraciones.estado','reportes.id_reporte'));
        return DataTables::of($reportes)
                ->addColumn('view','IntAdmin.intReportes.botones.revisar')
                ->rawColumns(['view'])
                ->toJson(); 
    }

    public function revisarReporte($id_reporte)
    {
        $reporte=Reporte::find($id_reporte);
        $draw=Ilustracion::find($reporte->id_ilustracion);
        $denunciante=User::find($reporte->id_user);
        $profile_d=Profile::where('id_user','=', $denunciante->id)->firstOrFail();
        $autor=User::find($draw->id_user);
        $profile=Profile::where('id_user','=',$autor->id)->firstOrFail();
        return view('IntAdmin.IntReportes.reporte',compact('reporte','draw','denunciante','autor','profile','profile_d'));
    }

    public function aprobar($id_reporte)
    {
        $reporte=Reporte::find($id_reporte);
        $draw=Ilustracion::find($reporte->id_ilustracion);
        $reporte->estado="APROBADA";
        $reporte->save();
        $draw->baja=1;
        $draw->estado="BAJA";
        $draw->save();
        alert()->success('DrawLog', 'La imagen ha sido retirada');
        return Redirect::to('/reportes-admin');
    }

    public function denegar($id_reporte)
    {
        $reporte=Reporte::find($id_reporte);
        $draw=Ilustracion::find($reporte->id_ilustracion);
        $reporte->estado="No procede";
        $reporte->save();
        $draw->baja=0;
        $draw->estado="Aprobada";
        $draw->save();
        alert()->success('DrawLog', 'El reporte ha sido retirado');
        return Redirect::to('/reportes-admin');
    }
}
