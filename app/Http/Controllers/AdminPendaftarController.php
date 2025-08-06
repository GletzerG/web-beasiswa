<?php

namespace App\Http\Controllers;
use App\Models\Pendaftar; // pastikan ini ada di atas
use Illuminate\Http\Request;

class AdminPendaftarController extends Controller
{
    public function index()
    {
return view('admin.pendaftaran.index', [
    'pendaftars' => $pendaftars
]);
    
    }
}