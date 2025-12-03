@extends('layouts.app')

@section('contents')

<style>
    body {
        background-color: #f7f7f7;
        font-family: sans-serif;
    }

    .container-main {
        max-width: 1200px;
    }

    .text-intro {
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }

    h1, h2 {
        font-weight: bold;
    }

    .member-card {
        background: radial-gradient(circle, #91C4C3 0%, #80A1BA 100%);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        border: 2px solid transparent;
        justify-content: center;
    }

    .card-text,
    .card-title,
    .card-subtitle {
        color: white;
    }

    .card-subtitle {
        opacity: 80%;
        font-style: italic;
        font-weight: 300;
    }

    .detail-label {
        font-weight: bold;
        width: 110px;
        color: white;
    }

    .program-button {
        background-color: #e9ecef;
        color: #333;
        border: none;
        transition: background-color 0.2s;
    }

    .program-button:hover {
        background-color: #dee2e6;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container container-main py-5 text-center">

    <!-- Judul Halaman -->
    <h1 class="mb-4 fw-bold">Departemen Syiar</h1>

    <p class="text-intro mb-5 text-muted">
        Departemen Syiar merupakan divisi yang bertugas menyebarkan nilai-nilai dan semangat dakwah Islam di lingkungan kampus Politeknik Negeri Jember melalui berbagai kegiatan positif, edukatif, dan inspiratif. Departemen ini menjadi garda terdepan dalam menghidupkan atmosfer keislaman serta memperkuat ukhuwah di antara mahasiswa.
    </p>

    <!-- Bagian Kepengurusan -->
    <h2 class="mb-4 pt-3 fw-bold">Kepengurusan Departemen Syiar</h2>

    <div class="row g-4 mb-5">

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/ahmadadifirmansyah.jpg') }}"
                     alt="Ahmad Adi Firmansyah"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Ahmad Adi Firmansyah</h5>
                    <p class="card-subtitle">Koordinator Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2022</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Bisnis Unggas</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 21 November 2003</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/fatihaturrizqiyah.jpg') }}"
                     alt="Fatihatur Rizqiyah"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Fatihatur Rizqiyah</h5>
                    <p class="card-subtitle">Pengurus Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Akuntansi Sektor Publik</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 23 Juni 2004</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/ayupuspita.jpg') }}"
                     alt="Ayu Puspita"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Ayu Puspita</h5>
                    <p class="card-subtitle">Pengurus Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Energi Terbarukan</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 31 Juli 2005</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/akhmadkafirizal.jpg') }}"
                     alt="Akhmad Kafi Rizal"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Akhmad Kafi Rizal</h5>
                    <p class="card-subtitle">Pengurus Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Informatika</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 25 Desember 2005</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/mohrisal.jpg') }}"
                     alt="Moh. Risal"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Moh. Risal</h5>
                    <p class="card-subtitle">Staff Muda Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Destinasi Pariwisata</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 13 Juli 2004</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/mircoferdynanyamanasir.jpg') }}"
                     alt="Mirco Ferdynan Yamanasir"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Mirco Ferdynan Yamanasir</h5>
                    <p class="card-subtitle">Staff Muda Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknologi Pakan Ternak</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 11 Desember 2005</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/mohfadilmustofa.jpg') }}"
                     alt="Moh. Fadil Mustofa"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Moh. Fadil Mustofa</h5>
                    <p class="card-subtitle">Staff Muda Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Produksi Benih</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 20 September 2006</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/sayyidfirmansyah.jpg') }}"
                     alt="Sayyid Firmansyah"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Sayyid Firmansyah</h5>
                    <p class="card-subtitle">Staff Muda Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknologi Pakan Ternak</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 10 November 2005</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/azizaharfindamayangsari.jpg') }}"
                     alt="Azizzah Arfindah Mayangsari"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Azizzah Arfindah Mayangsari</h5>
                    <p class="card-subtitle">Staff Muda Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Produksi Benih</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 10 Mei 2006</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card member-card text-start h-100 p-3">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('/images/anggota/revymariskaputri.png') }}"
                     alt="Revy Mariska Putri"
                     class="rounded me-3"
                     style="width: 130px; height: 200px; object-fit: cover;">
                <div class="card-text">
                    <h5 class="card-title fw-bold mb-0">Revy Mariska Putri</h5>
                    <p class="card-subtitle">Staff Muda Syiar</p>
                    <br>
                    <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Informatika</span></div>
                    <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 24 Agustus 2006</span></div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Program Kerja -->
    <h2 class="mb-4 fw-bold">Program Kerja Departemen Syiar</h2>

    <div class="d-grid gap-3 col-md-6 mx-auto">
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Bakti Sosial</a>
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Khotmil Quran</a>
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Labbaik Competetions</a>
        </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
