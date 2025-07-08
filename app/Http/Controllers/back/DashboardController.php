<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard.index');
    }

    public function showPersyaratan()
    {
        return view('persyaratan');
    }

    public function showPendaftaran()
{
    return view('pendaftaran');
}

}
