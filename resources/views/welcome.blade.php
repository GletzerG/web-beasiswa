@extends('back.layout.template')

@section('content')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <h2 class="post-title">Selamat datang di Dashboard Beasiswa</h2>
                <p class="post-subtitle">Program Beasiswa Pendidikan PT. Antam, Tbk. kepada Siswa SMK merupakan salah satu
                    program Corporate Social
                    Responsibility (CSR) Antam Peduli dalam upaya pengembangan kualitas sumber daya manusia, yang merupakan
                    implementasi
                    kerja sama antara PT. Antam, Tbk. dengan sekolah-sekolah SMK berupa bantuan keuangan dana pendidikan
                    yang diperuntukkan
                    bagi siswa-siswi SMK yang aktif mengikuti kegiatan belajar dan telah memenuhi kriteria serta persyaratan
                    yang
                    ditentukan.
                    Tujuan pemberian beasiswa pendidikan ini adalah untuk meningkatkan kualitas sumber daya manusia dalam
                    mendukung kemajuan
                    pendidikan di Kalimantan Timur, khususnya di wilayah operasional PT Antam, dan bersifat sosial tanpa
                    ikatan dinas serta
                    tidak dikaitkan dengan proses seleksi penerimaan calon tenaga kerja.
                    Skema Beasiswa Pendidikan ini terdiri dari 4 (empat) kategori berikut:
                    Beasiswa untuk Siswa yang berasal dari Daerah Operasional PT Antam, Tbk.
                    Beasiswa Prestasi Akademik;
                    Beasiswa Prestasi Non-Akademik;
                    Beasiswa untuk Siswa Kurang Mampu secara Ekonomi.
                    Penerima Beasiswa Pendidikan, sesuai kuota dan nilai yang telah ditetapkan, akan menerima bantuan secara
                    stimulan
                    sebanyak 2 (dua) kali dalam setahun, yaitu pada semester ganjil dan semester genap.</p>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-between mb-4">
                    <a href="{{ url('/persyaratan') }}" class="btn btn-dark">Persyaratan pendaftaran</a>
                    <a href="{{ url('/pendaftaran') }}" class="btn btn-dark">Pendaftaran Beasiswa</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer-->
    @include('back.layout.footer')
    @yield('footer')
    <!-- Bootstrap core JS-->
@endsection