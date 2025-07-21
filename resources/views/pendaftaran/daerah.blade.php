@extends('back.layout.template')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4 text-center">Form Pendaftaran Beasiswa</h3>
                        <form id="formPendaftaran" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="program_studi" class="form-label">Program Studi</label>
                                <select class="form-control" id="program_studi" name="program_studi" required>
                                    <option value="" disabled selected>Pilih Program Studi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester" min="1" max="9"
                                    maxlength="1" required oninput="this.value = this.value.slice(0, 1)">
                            </div>
                            <div class="mb-3">
                                <label for="berkas" class="form-label">Upload Berkas (PDF)</label>
                                <input type="file" class="form-control" id="berkas" name="berkas" accept="application/pdf"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Kirim Pendaftaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('formPendaftaran').addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin mengirim pendaftaran?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Kirim',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Pendaftaran berhasil dikirim.',
                        icon: 'success'
                    }).then(() => {
                        window.location.href = "{{ route('welcome') }}";
                    });
                    // Tambahkan AJAX/fetch di sini kalau mau proses ke server
                }
            });
        });
    </script>

@endsection