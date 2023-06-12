<?php

namespace App\Http\Controllers;

use App\Models\JadwalBelajar;
use Illuminate\Http\Request;

class JadwalBelajarController extends Controller
{
    public function index()
    {
        $jadwalBelajar = JadwalBelajar::all();
        return view('jadwal_belajar.index', compact('jadwalBelajar'));
    }
}
