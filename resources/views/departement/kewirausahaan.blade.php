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

    h1,
    h2 {
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
    <h1 class="mb-4 fw-bold">Departemen Kewirausahaan</h1>

    <p class="text-intro mb-5 text-muted">
        There are many variations of passages of Lorem Ipsum available, but the majority have
        suffered alteration in some form, by injected humour, or randomised words which don't look
        even slightly believable.
    </p>

    <!-- Bagian Kepengurusan -->
    <h2 class="mb-4 pt-3 fw-bold">Kepengurusan Departemen Kewirausahaan</h2>

    <div class="row g-4 mb-5">

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/desthabungananda.jpg') }}"
                            alt="Destiha Bunga Nanda"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Destiha Bunga Nanda</h5>
                            <p class="card-subtitle">Koordinator Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Akuntansi Sektor Publik</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: -</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/reyhanrespati.jpg') }}"
                            alt="Reyhan Respati"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Reyhan Respati</h5>
                            <p class="card-subtitle">Pengurus Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknologi Pakan Ternak</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 11 Desember 2005</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/baguskurniawan.jpg') }}"
                            alt="Bagus Kurniawan"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Bagus Kurniawan</h5>
                            <p class="card-subtitle">Pengurus Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Keteknikan Pertanian</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 27 Januari 2006</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/tasyanurimaniyah.jpg') }}"
                            alt="Tasya Nur Imaniyah"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Tasya Nur Imaniyah</h5>
                            <p class="card-subtitle">Staff Muda Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Akuntansi Sektor Publik</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 13 Desember 2004</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/berilkhoiriyatulhasanah.jpg') }}"
                            alt="Beril Khoiriyatul Hasanah"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Beril Khoiriyatul Hasanah</h5>
                            <p class="card-subtitle">Staff Muda Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Bisnis Digital</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 20 Juli 2005</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/faiqotuljannah.jpg') }}"
                            alt="Faiqotul Jannah"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Faiqotul Jannah</h5>
                            <p class="card-subtitle">Staff Muda Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Bisnis Digital</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 04 Desember 2005</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/anggota/galihapriliansyah.jpg') }}"
                            alt="Galih Aprilian Syah"
                            class="rounded me-3"
                            style="width: 130px; height: 200px; object-fit: cover;">
                        <div class="card-text">
                            <h5 class="card-title fw-bold mb-0">Galih Aprilian Syah</h5>
                            <p class="card-subtitle">Staff Muda Kewirausahaan</p>
                            <br>
                            <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknologi Pakan Ternak</span></div>
                            <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 26 April 2005</span></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Program Kerja -->
    <h2 class="mb-4 fw-bold">Program Kerja Departemen Kewirausahaan</h2>

    <div class="d-grid gap-3 col-md-6 mx-auto">
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Pembuatan PDH</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Roudhatul Amal</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection