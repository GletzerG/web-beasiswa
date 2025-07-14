@extends('back.layout.template')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
        <div>
            <div class="d-grid gap-3">
                <a href="{{ route('pendaftaran.daerah') }}"
                    class="btn btn-outline-primary btn-lg rounded-pill shadow">Pendaftaran Beasiswa Daerah Operasional</a>
                <a href="{{ route('pendaftaran.akademik') }}"
                    class="btn btn-outline-success btn-lg rounded-pill shadow">Pendaftaran Beasiswa Prestasi Akademik</a>
                <a href="{{ route('pendaftaran.nonakademik') }}"
                    class="btn btn-outline-warning btn-lg rounded-pill shadow">Pendaftaran Beasiswa Prestasi Non
                    Akademik</a>
                <a href="{{ route('pendaftaran.kurangmampu') }}"
                    class="btn btn-outline-danger btn-lg rounded-pill shadow">Pendaftaran Beasiswa Kurang Mampu</a>
            </div>
        </div>
    </div>
@endsection