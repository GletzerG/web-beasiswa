<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\Beasiswa;
use Illuminate\Support\Facades\Storage;

class PendaftarController extends Controller
{
    public function index()
    {
        try {
            // Coba dengan eager loading dulu
            $pendaftars = Pendaftar::with('beasiswa')->latest()->paginate(10);
        } catch (\Exception $e) {
            // Jika error, fallback tanpa eager loading
            $pendaftars = Pendaftar::latest()->paginate(10);
            
            // Log error untuk debugging
            \Log::error('Error loading pendaftars with beasiswa relation: ' . $e->getMessage());
        }
        
        return view('admin.pendaftaran.index', compact('pendaftars'));
    }

    public function show(Pendaftar $pendaftar)
    {
        // Load relasi beasiswa jika belum di-load
        $pendaftar->load('beasiswa');
        
        return view('admin.pendaftaran.show', compact('pendaftar'));
    }

    public function updateStatus(Request $request, Pendaftar $pendaftar)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,diterima,ditolak'
        ]);

        $pendaftar->update($validated);

        return redirect()->back()
                        ->with('success', 'Status pendaftar berhasil diupdate!');
    }

    public function destroy(Pendaftar $pendaftar)
    {
        try {
            // Hapus file jika ada
            $files = [
                'file_transkrip' => $pendaftar->file_transkrip,
                'file_ktp' => $pendaftar->file_ktp,
                'file_kk' => $pendaftar->file_kk
            ];

            foreach ($files as $field => $filename) {
                if ($filename && Storage::exists('public/documents/' . $filename)) {
                    Storage::delete('public/documents/' . $filename);
                }
            }

            $pendaftar->delete();
            
            return redirect()->route('admin.pendaftar.index')
                            ->with('success', 'Data pendaftar berhasil dihapus!');
                            
        } catch (\Exception $e) {
            return redirect()->back()
                            ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }

    /**
     * Method tambahan untuk debugging relasi
     */
    public function debug()
    {
        try {
            // Test relasi
            $pendaftar = Pendaftar::first();
            if ($pendaftar) {
                $beasiswa = $pendaftar->beasiswa;
                dd([
                    'pendaftar' => $pendaftar,
                    'beasiswa' => $beasiswa,
                    'relation_exists' => method_exists(Pendaftar::class, 'beasiswa')
                ]);
            } else {
                dd('No pendaftar data found');
            }
        } catch (\Exception $e) {
            dd('Error: ' . $e->getMessage());
        }
    }
}