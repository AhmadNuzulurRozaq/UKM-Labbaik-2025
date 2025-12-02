<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website for UKM Labbaik, a university Islamic organization at Politeknik Negeri Jember.">
    <title>UKM Labbaik - Lembaga Aktivis Islam Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
</head>
<body>

@extends('layouts.app')

@section('contents')


<main>
    <section class="ukmLanding">
        <img class="logoHeading" src="{{ asset('/images/logo/Logo.png') }}" alt="UKM Labbaik Logo">
        <h1 class="ukmLHeading">LABBAIK</h1>
        <h2 class="ukmLHeading2">UKM LEMBAGA AKTIVIS ISLAM KAMPUS (LABBAIK)</h2>
        <img class="bgHero img-fluid" src="{{ asset('/images/beranda/Landing1.jpg') }}" alt="Hero background image of UKM Labbaik activities">
    </section>

    <section class="ukmIntroSection">
        <h2 class="ukmIntroArab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
        <p class="ukmIntroP">
            Selamat datang di web portal UKM Labbaik. Pelajari lebih lanjut tentang UKM Labbaik di sini.
        </p>
    </section>

    <section class="ukmSejarahimg">
        <img class="bgSejarah img-fluid" src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/kepenulisan.jpg" alt="Background image for history section">
    </section>

    <section class="ukmSejarah">
        <div class="ukmSejarahKet">
            <h2 class="ukmSejarahKetjdl">Sejarah</h2>
            <p class="ukmSejarahKetdesc">
                Dimulai dari kegiatan keagamaan mahasiswa Politani di Masjid Ar-Rahman yang mendapat dukungan takmir, 
                terbentuklah Remaja Masjid Politani. 
                Seiring kebutuhan yang berkembang, lahirlah wadah resmi bernama UKM Labaik pada 1989. 
                Sebuah perjalanan singkat namun penuh makna—dan masih banyak cerita menarik di baliknya.
            </p>
            <button type="button"><a href="{{ route('profil.profil') }}">Selengkapnya</a></button>
        </div>
    </section>

    <section class="ukmDeptimg">
        <img class="bgDept img-fluid" src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/tft_45_madiun.jpg" alt="Background image for departments section">
    </section>

    <section class="ukmDept">
        <div class="ukmDeptjdl"><h2>Departemen</h2></div>
        <div class="ukmDeptisi">
            <div class="Departemen-1">
                <a href="/departement/psdm"><h3 class="jdldept">Departemen PSDM</h3>
                <p class="isipsdm">Departemen Pengembangan Sumber Daya Manusia bertanggung jawab atas pelatihan dan pengembangan anggota.</p>
                </a>
            </div>
            <div class="Departemen-2">
                <a href="/departement/syiar"><h3 class="jdldept">Departemen Syiar</h3>
                <p class="isisyiar">Departemen Syiar fokus pada penyebaran dakwah dan kegiatan islami di kampus.</p>
                </a>
            </div>
            <div class="Departemen-3">
                <a href="/departement/kemuslimahan"><h3 class="jdldept">Departemen Kemuslimahan</h3>
                <p class="isiKemuslimahan">Departemen Kemuslimahan menangani urusan keislaman dan kesejahteraan mahasiswa muslim.</p>
                </a>
            </div>
            <div class="Departemen-4">
                <a href="/departement/kominfo"><h3 class="jdldept">Departemen Kominfo</h3>
                <p class="isiKominfo">Departemen Komunikasi dan Informasi mengelola media sosial, website, dan informasi organisasi.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="ukmArtikel">
        <div id="Artikel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#Artikel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></li>
                <li data-bs-target="#Artikel" data-bs-slide-to="1" aria-label="Slide 2"></li>
                <li data-bs-target="#Artikel" data-bs-slide-to="2" aria-label="Slide 3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/pelantikan_18.jpg" class="d-block w-100" alt="Pelantikan anggota UKM Labbaik">
                    <div class="carouselOverlay">
                        <h2 class="judulban">Pendaftaran Anggota Baru</h2>
                        <p class="ketBan">Kami membuka pendaftaran pada UKM Labbaik dari 20/10/2023 sampai 21/11/2023. Daftarlah sekarang untuk mendapatkan berbagai softskill dan pengalaman berharga!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/kepenulisan.jpg" class="d-block w-100" alt="Kegiatan syiar UKM Labbaik">
                    <div class="carouselOverlay">
                        <h2 class="judulban">Kegiatan Syiar Terbaru</h2>
                        <p class="ketBan">Ikuti kegiatan dakwah kami yang penuh inspirasi dan manfaat.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/tft_45_madiun.jpg" class="d-block w-100" alt="Acara kemuslimahan UKM Labbaik">
                    <div class="carouselOverlay">
                        <h2 class="judulban">Acara Kemuslimahan</h2>
                        <p class="ketBan">Bergabunglah dalam acara-acara yang memperkuat iman dan taqwa.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#Artikel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#Artikel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="ukmGaleri">
        <h2 class="ukmGaleriTitle">Galeri Kegiatan</h2>
        <div class="albumGaleri">
            
            <a href="/galeri/galeri">
            <div class="gallery-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/skl_18.jpg" alt="Kegiatan 1">
                    <div class="desc">SKL 18</div>
                </div>
            </a>

            <a href="/galeri/galeri">
            <div class="gallery-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/pelantikan_18.jpg" alt="Kegiatan 2">
                    <div class="desc">Pelantikan 18</div>
                </div>
            </a>

            <a href="/galeri/galeri">
            <div class="gallery-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/tft_45_madiun.jpg" alt="Kegiatan 3">
                    <div class="desc">TFT 45 Madiun</div>
                </div>
            </a>
            
            <a href="/galeri/galeri">
            <div class="gallery-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/galang_dana.jpg" alt="Kegiatan 4">
                    <div class="desc">Labbaik Peduli</div>
                </div>
            </a>
            
            <a href="/galeri/galeri">
            <div class="gallery-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/kepenulisan.jpg" alt="Kegiatan 5">
                    <div class="desc">L2P</div>
                </div>
            </a>
            
            <a href="/galeri/galeri">
            <div class="gallery-item">
                    <img src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/talkshow_kemuslimahan.jpg" alt="Kegiatan 6">
                    <div class="desc">Talkshow Kemuslimahan</div>
                </div>
            </a>
        </div>
        <a href="/galeri/galeri" class="GaleriLainnya"><button type="button"><p>Lainnya</p></button></a>
    </section>

    <section class="Kontak">
        <div class="JudulKontak">
            <h2>Apakah ada pertanyaan?</h2>
        </div>
        <div class="containerquestion">
            <ol>
                <li>Apakah tentang layanan kami?</li>
                <li>Apakah tentang pendaftaram ukm?</li>
                <li>Apakah tentang kegiatan kami?</li>
            </ol>
            <p>Silahkan klik menu <b>KONTAK</b> untuk info selengkapnya atau klik tombol KONTAK di bawah ini!</p>
            <a href="{{ route('kontak.kontak') }}" class="cqbutton"><button type="button"><p>KONTAK</p></button></a>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('javascript/index.js') }}"></script>
</body>
</html>
@endsection