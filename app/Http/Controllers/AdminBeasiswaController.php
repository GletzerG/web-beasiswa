<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa; // Make sure you have the Beasiswa model

class AdminBeasiswaController extends Controller
{
    public function index()
    {
        $beasiswas = Beasiswa::all(); // or whatever query you need
        
        return view('admin.beasiswa.index', compact('beasiswas'));
        // or
        // return view('admin.beasiswa.index', ['beasiswas' => $beasiswas]);
    }
}