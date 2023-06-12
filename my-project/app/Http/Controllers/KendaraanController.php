<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraanManual = Kendaraan::where('jenis', 'manual')->get();
        $kendaraanMatic = Kendaraan::where('jenis', 'matic')->get();
        return view('kendaraan.index', compact('kendaraanManual', 'kendaraanMatic'));
    }
}
