<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
