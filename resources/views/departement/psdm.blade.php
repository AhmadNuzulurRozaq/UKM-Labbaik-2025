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
    <h1 class="mb-4 fw-bold">Departemen PSDM</h1>

    <p class="text-intro mb-5 text-muted">
        There are many variations of passages of Lorem Ipsum available, but the majority have
        suffered alteration in some form, by injected humour, or randomised words which don't look
        even slightly believable.
    </p>

    <!-- Bagian Kepengurusan -->
    <h2 class="mb-4 pt-3 fw-bold">Kepengurusan Departemen PSDM</h2>

    <div class="row g-4 mb-5">

        <!-- Card 1 -->
        <!-- Bintang Aisyah Prasetyo -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/bintangaisyahprasetyo.jpg') }}"
                        alt="Bintang Aisyah Prasetyo"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                        <p class="card-subtitle">Koordinator PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Agroindustri</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 21 Juli 2006</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Imaz Syahroni -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/imazsyahroni.jpg') }}"
                        alt="Imaz Syahroni"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Imaz Syahroni</h5>
                        <p class="card-subtitle">Pengurus PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknologi Produksi Tanaman Pangan</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 07 Juni 2005</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Samuel Rizal -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/samuelrizal.jpg') }}"
                        alt="Samuel Rizal"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Samuel Rizal</h5>
                        <p class="card-subtitle">Pengurus PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Akuntansi Sektor Publik</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>-</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Ahmad Dendy Kurniawan -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/ahmaddendykurniawan.jpg') }}"
                        alt="Ahmad Dendy Kurniawan"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Ahmad Dendy Kurniawan</h5>
                        <p class="card-subtitle">Pengurus PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Akuntansi Sektor Publik</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 17 Oktober 2005</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Saiful Rasid -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/saifulrasid.jpg') }}"
                        alt="Saiful Rasid"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Saiful Rasid</h5>
                        <p class="card-subtitle">Pengurus PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2022</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Informatika</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>-</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Ismail -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/tidakadafoto.jpg') }}"
                        alt="Ismail"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Ismail</h5>
                        <p class="card-subtitle">Pengurus PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Bisnis Unggas</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>-</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Ferdiansyah Al Fariq -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/ferdiansyahalfariq.jpg') }}"
                        alt="Ferdiansyah Al Fariq"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Ferdiansyah Al Fariq</h5>
                        <p class="card-subtitle">Staff Muda PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Produksi Benih</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 26 Mei 2005</span></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Hari Suhartono -->
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('/images/anggota/harisuhartono.jpg') }}"
                        alt="Hari Suhartono"
                        class="rounded me-3"
                        style="width:130px;height:200px;object-fit:cover;">

                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Hari Suhartono</h5>
                        <p class="card-subtitle">Staff Muda PSDM</p>

                        <br>

                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Energi Terbarukan</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 08 Mei 2006</span></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('/images/anggota/abdullahikhsankhaqiqi.jpg') }}"
                        alt="Abdullah Ikhsan Khaqiqi"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Abdullah Ikhsan Khaqiqi</h5>
                        <p class="card-subtitle">Staff Muda PSDM</p>
                        <br>
                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Teknik Energi Terbarukan</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: -</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('/images/anggota/afrizalmuzakky.jpg') }}"
                        alt="Afrizal Muzakky"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Afrizal Muzakky</h5>
                        <p class="card-subtitle">Staff Muda PSDM</p>
                        <br>
                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Agroindustri</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: -</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('/images/anggota/syabiladwioktaramadani.jpg') }}"
                        alt="Syabila Dwi Okta Ramadani"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Syabila Dwi Okta Ramadani</h5>
                        <p class="card-subtitle">Staff Muda PSDM</p>
                        <br>
                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2024</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Manajemen Informasi Kesehatan</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 30 Oktober 2005</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card member-card text-start h-100 p-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('/images/anggota/sitinururifah.jpg') }}"
                        alt="Siti Nur Urifah"
                        class="rounded me-3"
                        style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <h5 class="card-title fw-bold mb-0">Siti Nur Urifah</h5>
                        <p class="card-subtitle">Staff Muda PSDM</p>
                        <br>
                        <div class="d-flex mb-1"><span class="detail-label">Angkatan</span> <span>: 2023</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Prodi</span> <span>: Akuntansi Sektor Publik</span></div>
                        <div class="d-flex mb-1"><span class="detail-label">Tanggal Lahir</span> <span>: 13 Maret 2005</span></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Program Kerja -->
    <h2 class="mb-4 fw-bold">Program Kerja Departemen PSDM</h2>

    <div class="d-grid gap-3 col-md-6 mx-auto">
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Sapa Kenal Labbaik</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Diklat Labbaik</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Oprek Mahasiswa</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Training Leader Muslim 1</a>
        <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Training Leader Muslim 2</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection