<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPendaftarController extends Controller
{
    public function index()
    {
        return view('admin.pendaftaran.index')  ; // ganti sesuai nama file view kamu
    }
}