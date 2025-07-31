<style>
    #mainNav {
        position: sticky;
        top: 0;
        z-index: 1030;
        background-color: #fff;
    }

    /* Tambahan biar tombol Login rapi */
    .btn-login {
        border-radius: .25rem;
        padding: 0.5rem 1rem;
        line-height: 1.5;
    }

    /* Biar isi nav item sejajar vertikal */
    .navbar-nav .nav-item {
        display: flex;
        align-items: center;
    }

    /* Gambar di brand */
    .navbar-brand img {
        max-height: 40px;
        margin-right: 10px;
    }

    /* Flex untuk brand biar gambar dan teks sejajar */
    .navbar-brand {
        display: flex;
        align-items: center;
        font-weight: bold;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">
            <img src="{{ asset('uploads/indomie.png') }}" alt="Logo Indomie">
            Pendaftaran Beasiswa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1:8000">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1:8000/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1:8000/surat">Surat Pernyataan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
