<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function daerah()
    {
        return view('pendaftaran.daerah');
    }

    public function akademik()
    {
        return view('pendaftaran.akademik');
    }

    public function nonakademik()
    {
        return view('pendaftaran.nonakademik');
    }

    public function kurangmampu()
    {
        return view('pendaftaran.kurangmampu');
    }
}
