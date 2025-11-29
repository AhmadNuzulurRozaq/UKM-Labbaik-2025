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
    <h1 class="mb-4 fw-bold">Departemen Kominfo</h1>

    <p class="text-intro mb-5 text-muted">
        There are many variations of passages of Lorem Ipsum available, but the majority have
        suffered alteration in some form, by injected humour, or randomised words which don't look
        even slightly believable.
    </p>

    <!-- Bagian Kepengurusan -->
    <h2 class="mb-4 pt-3 fw-bold">Kepengurusan Departemen Kominfo</h2>

    <div class="row g-4 mb-5">

        <!-- Card 1 -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/izzulislamramadhan.jpg') }}"
                        alt="Izzul Islam Ramadhan"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Izzul Islam Ramadhan</h5>
                        <p class="card-subtitle">Koordinator Kominfo</p>

                        <br>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Teknik Informatika</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 27 September 2005</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/ahmadandika.jpg') }}"
                        alt="Ahmad Andika"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Ahmad Andika</h5>
                        <p class="card-subtitle">Pengurus Kominfo</p>

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
                            <span>: 06 Januari 2005</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/beniqnoandipriambudikusuma.jpg') }}"
                        alt="Beniqno Andi Priambudi Kusuma"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Beniqno Andi Priambudi Kusuma</h5>
                        <p class="card-subtitle">Pengurus Kominfo</p>

                        <br>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Teknik Informatika</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 20 Februari 2005</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/adindariskimaulinda.jpg') }}"
                        alt="Adinda Riski Maulinda"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Adinda Riski Maulinda</h5>
                        <p class="card-subtitle">Staff Muda Kominfo</p>

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
                            <span>: 12 April 2006</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/farraghaisanandalaksana.jpg') }}"
                        alt="Farra Ghaisa Nanda Laksana"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Farra Ghaisa Nanda Laksana</h5>
                        <p class="card-subtitle">Staff Muda Kominfo</p>

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
                            <span>: 09 September 2003</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/aldorayhanradittyanuh.jpg') }}"
                        alt="Aldo Rayhan Radittyanuh"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Aldo Rayhan Radittyanuh</h5>
                        <p class="card-subtitle">Staff Muda Kominfo</p>

                        <br>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Teknik Informatika</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 06 Oktober 2004</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/muhammadrandypratama.jpg') }}"
                        alt="Muhammad Randy Pratama"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Muhammad Randy Pratama</h5>
                        <p class="card-subtitle">Staff Muda Kominfo</p>

                        <br>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: TPP</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>-</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/didanfahrozi.jpg') }}"
                        alt="Didan Fahrozi"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Didan Fahrozi</h5>
                        <p class="card-subtitle">Staff Muda Kominfo</p>

                        <br>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span>: 2023</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span>: Teknik Energi Terbarukan</span>
                        </div>

                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span>: 14 April 2004</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <!-- Program Kerja -->
    <h2 class="mb-4 fw-bold">Program Kerja Departemen Kominfo</h2>

    <div class="d-grid gap-3 col-md-6 mx-auto">
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Keaktifan Media Sosial</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Pengaktifan Website</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Pembuatan Vidio Profil</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection