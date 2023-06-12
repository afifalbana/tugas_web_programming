<?php

namespace App\Http\Controllers;

use App\Models\PaketJasa;
use Illuminate\Http\Request;

class PaketJasaController extends Controller
{
    public function index()
    {
        $paketJasa = PaketJasa::all();
        return view('paket_jasa.index', compact('paketJasa'));
    }
}
