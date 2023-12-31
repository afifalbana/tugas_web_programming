<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainer = Trainer::all();
        return view('trainer.index', compact('trainer'));
    }
}
