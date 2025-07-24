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
