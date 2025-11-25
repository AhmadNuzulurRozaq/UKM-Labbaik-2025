<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departemen Syiar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        h1,h2 {
            font-weight: bold;
        }

        .member-card {
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            border: 2px solid transparent;
            justify-content: center;
        }

        .card-subtitle {
            font-style: italic;
        }

        /* Style untuk kartu yang disorot (biru) */
        .member-card.highlighted {
            border-color: #0d6efd;
            /* Menggunakan warna primary Bootstrap */
        }

        .detail-label {
            font-weight: bold;
            width: 110px;
            /* Untuk perataan titik dua */
            color: #6c757d;
            /* Warna abu-abu Bootstrap */
        }

        .detail-value {
            font-weight: normal;
        }

        .program-button {
            background-color: #e9ecef;
            /* Warna light gray Bootstrap */
            color: #333;
            border: none;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .program-button:hover {
            background-color: #dee2e6;
        }
    </style>
</head>

<body>

    <div class="container container-main py-5 text-center">

        <h1 class="mb-4">Departemen Syiar</h1>

        <p class="text-intro mb-5 text-muted">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.
        </p>

        <h2 class="mb-4 pt-3">Kepengurusan Departemen Syiar</h2>

        <div class="row g-4 mb-5">

            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card member-card text-start h-100 p-3">
                    <div class="d-flex align-items-center mb-3"> <img src="{{ asset('image/imagecard.jpg') }}" alt="Foto Bintang Aisyah Prasetyo" class="square-circle me-3" style="width: 130px; height: 200px; object-fit: cover;">
                    <div class="card-text">
                        <div>
                            <h5 class="card-title fw-bold mb-0">Bintang Aisyah Prasetyo</h5>
                            <p class="card-subtitle text-muted">Koordinator PSDM</p>
                        </div>
                        <br>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Angkatan</span>
                            <span class="detail-value">: 2023</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Prodi</span>
                            <span class="detail-value">: Manajemen Agroindustri</span>
                        </div>
                        <div class="d-flex mb-1">
                            <span class="detail-label">Tanggal Lahir</span>
                            <span class="detail-value">: 21 Juli 2006</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <h2 class="mb-4">Program Kerja Departemen Syiar</h2>

        <div class="d-grid gap-3 col-md-6 mx-auto">
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Bakti Sosial</a>
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Khotmil Quran</a>
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Bakti Sosial</a>
            <a href="#" class="btn btn-lg program-button fw-bold">Program Kerja Labbaik Competetions</a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>