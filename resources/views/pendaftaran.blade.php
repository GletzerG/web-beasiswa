@extends('back.layout.template')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
        <div>
            <form method="POST" action="#">
                @csrf
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark">Pendaftaran Beasiswa Daerah Operasional</button>
                    <button type="submit" class="btn btn-dark">Pendaftaran Beasiswa Prestasi Akademik</button>
                    <button type="submit" class="btn btn-dark">Pendaftaran Beasiswa Prestasi Non Akademik</button>
                    <button type="submit" class="btn btn-dark">Pendaftaran Beasiswa Kurang Mampu</button>
                </div>
            </form>
        </div>
    </div>



@endsection
