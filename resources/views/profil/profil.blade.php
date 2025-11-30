@extends('layouts.app')

@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil | UKM Labbaik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .profile-card-bg {
            background-color: #e0f2f1;
            /* Light teal/cyan background for example card */
        }

        .profile-section-title {
            color: #0b1d3d;
            /* Dark blue text for titles */
            font-weight: 700;
        }

        .org-card {
            background-color: #f7f7f7;
            /* Light gray background for structure cards */
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            min-height: 120px;
        }

        .org-card-title {
            color: #0b1d3d;
            font-weight: 600;
        }

        .org-card-subtitle {
            color: #555;
            font-size: 0.875rem;
            /* Equivalent to text-sm in Tailwind */
        }

        .section-separator {
            border-top: 2px solid #0b1d3d;
            width: 50px;
            margin-bottom: 1rem;
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
    </style>
</head>

<body class="bg-light">
    <main class="container-fluid px-4 px-sm-6 px-lg-8 py-5">
        <section class="mb-5">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="p-4 bg-white border border-2 border-light rounded-3 shadow-sm text-center">
                        <div class="mx-auto bg-secondary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mb-4"
                            style="height: 8rem; width: 8rem;">
                            <svg class="h-5 w-5 text-secondary" fill="currentColor" viewBox="0 0 24 24"
                                style="height: 5rem; width: 5rem;">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <h2 class="fs-4 profile-section-title mb-2">PROFIL</h2>
                        <p class="text-sm text-secondary">Profile UKM Labbaik</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-card-bg rounded-3 p-4 position-relative d-flex align-items-end justify-content-between"
                        style="height: 100%;">
                        <span class="fs-4 fw-bold text-dark">EXAMPLE NAME</span>
                        <div class="position-absolute top-0 end-0 bg-warning p-2 rounded-circle mt-3 me-3">
                            <img src="https://via.placeholder.com/20" alt="Logo" class="w-5 h-5"
                                style="width: 1.25rem; height: 1.25rem;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-5 border-2">
        <section class="mb-5">
            <div class="d-flex align-items-center mb-4">
                <span class="fs-4 profile-section-title me-3">&gt; VISI DAN MISI</span>
            </div>
            <div class="bg-white p-4 rounded-3 shadow-sm border border-light">
                <p class="text-secondary lh-lg mb-0"> Menjadikan UKM Labbaik sebagai wadah yang mampu membentuk generasi
                    bertaqwa, cerdas, dan berintegritas dalam menghadapi tantangan zaman dengan pemahaman Islam.
                    Mewujudkan Organisasi Islam yang inklusi, inovatif, dan berdaya saing dalam Membangun mahasiswa yang
                    Berakhlak Mulia, Berilmu, dan Berdedikasi bagi Masyarakat.
                </p>
            </div>
        </section>
        <hr class="my-5 border-2">
        <section class="mb-5">
            <h2 class="fs-2 fw-bolder profile-section-title mb-4 text-center">Struktur Organisasi</h2>
            <div class="row g-4 mb-5">
                <!-- Card 1 -->
                <div class="col-12 col-md-6">
                    <div class="card member-card text-start h-100 p-3">
                        <div class="d-flex align-items-center mb-3">
    
                            <img src="{{ asset('images/logo/image/imagecard.jpg') }}" alt="Foto Nuril Khoirifah"
                                class="rounded me-3" style="width: 130px; height: 200px; object-fit: cover;">
    
                            <div class="card-text">
                                <h5 class="card-title fw-bold mb-0">Bagus Tri An</h5>
                                <p class="card-subtitle">Ketua Umum</p>
    
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
                                    <span>: 06 agustus 2004</span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card member-card text-start h-100 p-3">
                        <div class="d-flex align-items-center mb-3">
    
                            <img src="{{ asset('images/logo/image/imagecard.jpg') }}" alt="Foto Nuril Khoirifah"
                                class="rounded me-3" style="width: 130px; height: 200px; object-fit: cover;">
    
                            <div class="card-text">
                                <h5 class="card-title fw-bold mb-0">Nailatul Karimah</h5>
                                <p class="card-subtitle">Wakil Ketua Umum</p>
    
                                <br>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Angkatan</span>
                                    <span>: 2023</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Prodi</span>
                                    <span>: Manajemen Pemasaran Internasional</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Tanggal Lahir</span>
                                    <span>: 05 Mei 2005</span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card member-card text-start h-100 p-3">
                        <div class="d-flex align-items-center mb-3">
    
                            <img src="{{ asset('images/logo/image/imagecard.jpg') }}" alt="Foto Nuril Khoirifah"
                                class="rounded me-3" style="width: 130px; height: 200px; object-fit: cover;">
    
                            <div class="card-text">
                                <h5 class="card-title fw-bold mb-0">Wedar Herlana C</h5>
                                <p class="card-subtitle">Sekretaris Umum</p>
    
                                <br>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Angkatan</span>
                                    <span>: 2023</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Prodi</span>
                                    <span>: Manajemen Industri</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Tanggal Lahir</span>
                                    <span>: -</span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="col-12 col-md-6">
                    <div class="card member-card text-start h-100 p-3">
                        <div class="d-flex align-items-center mb-3">
    
                            <img src="{{ asset('images/logo/image/nadyasalsabella.jpg') }}" alt="Foto Nadya Salsa Bella"
                                class="rounded me-3" style="width: 130px; height: 200px; object-fit: cover;">
    
                            <div class="card-text">
                                <h5 class="card-title fw-bold mb-0">Videlma Sufi Romadhani</h5>
                                <p class="card-subtitle">Sekretaris II</p>
    
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
                                    <span>: -</span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card member-card text-start h-100 p-3">
                        <div class="d-flex align-items-center mb-3">
    
                            <img src="{{ asset('images/logo/image/nadyasalsabella.jpg') }}" alt="Foto Nadya Salsa Bella"
                                class="rounded me-3" style="width: 130px; height: 200px; object-fit: cover;">
    
                            <div class="card-text">
                                <h5 class="card-title fw-bold mb-0">Indah Cahyani Putri</h5>
                                <p class="card-subtitle">Bendahar Umum</p>
    
                                <br>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Angkatan</span>
                                    <span>: 2023</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Prodi</span>
                                    <span>: Promosi Kesehatan</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Tanggal Lahir</span>
                                    <span>: 14 Mei 2005</span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card member-card text-start h-100 p-3">
                        <div class="d-flex align-items-center mb-3">
    
                            <img src="{{ asset('images/logo/image/nadyasalsabella.jpg') }}" alt="Foto Nadya Salsa Bella"
                                class="rounded me-3" style="width: 130px; height: 200px; object-fit: cover;">
    
                            <div class="card-text">
                                <h5 class="card-title fw-bold mb-0">Tanaya Viorella Meriza Eka Wulandari</h5>
                                <p class="card-subtitle">Bendahara II</p>
    
                                <br>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Angkatan</span>
                                    <span>: 2024</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Prodi</span>
                                    <span>: Gizi Klinik</span>
                                </div>
    
                                <div class="d-flex mb-1">
                                    <span class="detail-label">Tanggal Lahir</span>
                                    <span>: 27 Agustus 2006</span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
    
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

@endsection