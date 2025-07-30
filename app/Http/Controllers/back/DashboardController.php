<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function about()
    {
        return view('about');
    }

    public function surat()
    {
        return view('surat');
    }

    public function showPersyaratan()
    {
        return view('persyaratan');
    }

    public function showPendaftaran()
{
    return view('pendaftaran');
}

    public function showLoginForm()
    {
        return view('auth.login');
    }

}
