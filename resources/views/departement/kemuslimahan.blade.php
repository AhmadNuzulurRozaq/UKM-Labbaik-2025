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
    <h1 class="mb-4 fw-bold">Departemen Kemuslimahan</h1>
    <p class="text-intro mb-5 text-muted">
        Departemen Kemuslimahan adalah divisi yang berfokus pada pembinaan, pemberdayaan, dan pengembangan potensi perempuan dalam lingkup organisasi. Seluruh kegiatan dan program kerja departemen ini dirancang khusus untuk anggota perempuan, dengan tujuan membentuk pribadi muslimah yang berakhlak, berilmu, dan aktif dalam lingkungan sosial.
    </p>
    <h2 class="mb-4 pt-3 fw-bold">Kepengurusan Departemen Kemuslimahan</h2>
    <div class="row g-4 mb-5">
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('images/anggota/tidakadafoto.jpg') }}"
                        alt="Foto Nuril Hoirifah"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Nuril Hoirifah</h5>
                        <p class="card-subtitle">Koordinator Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: -</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/anggota/nadyasalsabella.jpg') }}"
                        alt="Foto Nadya Salsa Bella"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Nadya Salsa Bella</h5>
                        <p class="card-subtitle">Pengurus Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Gizi Klinik</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 25 Februari 2005</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('images/anggota/nurinjazlina.jpg') }}"
                        alt="Foto Nurin Jazlina"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Nurin Jazlina</h5>
                        <p class="card-subtitle">Pengurus Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Manajemen Agribisnis</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 21 Juni 2004</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/anggota/afiatulrofiah.jpg') }}"
                        alt="Foto Alfiatul Rofi'ah"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Alfiatul Rofi'ah</h5>
                        <p class="card-subtitle">Staff Muda Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2024</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Manajemen Informasi Kesehatan</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 28 Juli 2005</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('images/anggota/mahmudatulelisah.jpg') }}"
                        alt="Foto Mahmudatul Elisah"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Mahmudatul Elisah</h5>
                        <p class="card-subtitle">Staff Muda Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2024</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Manajemen Informatika</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 06 Juni 2006</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/anggota/isnainiazanilisma.jpg') }}"
                        alt="Foto Isnaini Azanil Isma"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Isnaini Azanil Isma</h5>
                        <p class="card-subtitle">Staff Muda Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Akuntansi Sektor Publik</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 23 Juni 2004</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/anggota/intannovitasari.jpg') }}"
                        alt="Foto Infan Novitasari"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Intan Novitasari</h5>
                        <p class="card-subtitle">Staff Muda Kemuslimahan</p>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2024</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Manajemen Informasi Kesehatan</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 12 Maret 2006</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="mb-4 fw-bold">Program Kerja Departemen Kemuslimahan</h2>
    <div class="d-grid gap-3 col-md-6 mx-auto">
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Rutin Kemuslimahan</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Talkshow Kemuslimahan</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection