@extends('layouts.app')

@section('contents')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Lato:wght@300;400;700&family=Macondo+Swash+Caps&family=Poppins:wght@300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Macondo+Swash+Caps&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

* {
    box-sizing: border-box; /* Prevents padding/margin from breaking widths */
}

:root {
    --primary-color: #80A1BA;
    --secondary-color: #B4DEBD;
    --accent-color: #91C4C3;
    --text-color: #000000;
    --bg-gradient: linear-gradient(#B4DEBD 0%, #91C4C3 90%, #80A1BA 100%);
    --max-width: min(90vw, 1200px); /* Fluid max width for content */
}

/* LANDING */
.ukmLanding {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding-top: 150px;
    padding: 2rem 1rem; /* Add padding for smaller screens */
}

.bgHero {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    filter: brightness(50%) blur(3px);
}

.ukmLHeading {
    position: relative;
    z-index: 10;
    color: white;
    font-size: clamp(2rem, 5vw, 2.5rem);
    font-family: "Macondo Swash Caps", cursive;
    text-align: center;
    margin-bottom: 1rem;
}

.ukmLHeading2 {
    position: relative;
    z-index: 10;
    font-size: clamp(1rem, 3vw, 1.25rem);
    color: white;
    font-family: "Amiri", serif;
    text-align: center;
}

.logoHeading {
    width: clamp(80px, 10vw, 130px);
    position: relative;
    z-index: 10;
    margin-bottom: 1rem;
}

/* INTRO */
.ukmIntroSection {
    display: flex;
    flex-direction: column;
    background-color: var(--primary-color);
    padding: 2rem 1rem;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 100%;
}

.ukmIntroArab {
    font-size: clamp(1.5rem, 4vw, 2rem);
    font-family: "Amiri", serif;
    font-weight: 700;
    margin-bottom: 1rem;
}

.ukmIntroP {
    font-size: clamp(1rem, 3vw, 1.5rem);
    font-family: "Lato", sans-serif;
    max-width: var(--max-width);
}

/* SEJARAH */
.ukmSejarahimg {
    position: relative;
    width: 100%;
    height: 50vh; /* Reduced from 100vh for better flow */
    overflow: hidden;
    max-height: 600px; /* Cap height on large screens */
}

.bgSejarah {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    loading: lazy;
}

.ukmSejarahKet {
    background: var(--bg-gradient);
    padding: 2rem 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
}

.ukmSejarahKetjdl {
    font-family: "Amiri", serif;
    font-weight: 700;
    font-size: clamp(2rem, 5vw, 2.8rem);
    position: relative;
    margin-bottom: 1rem;
}

.ukmSejarahKetjdl::before {
    content: "";
    position: absolute;
    width: 80%;
    height: 4px;
    border-radius: 20px;
    background: white;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
}

.ukmSejarahKetdesc {
    font-size: clamp(0.9rem, 2vw, 1rem);
    font-family: "Lato", sans-serif;
    max-width: var(--max-width);
}

.ukmSejarahKetdesc .link {
    color: var(--text-color);
    text-decoration: none;
}

.ukmSejarahKetdesc .link:hover {
    color: var(--primary-color);
    font-weight: 700;
}

/* DEPARTEMEN */
.ukmDeptimg {
    position: relative;
    width: 100%;
    height: 50vh;
    overflow: hidden;
    max-height: 600px;
}

.bgDept {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    loading: lazy;
}

.ukmDept {
    background: linear-gradient(var(--primary-color) 0%, white 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem 1rem;
    width: 100%;
}

.ukmDeptjdl h2 {
    font-family: "Amiri", serif;
    font-weight: 700;
    font-size: clamp(2rem, 5vw, 2.8rem);
    position: relative;
    margin-bottom: 2rem;
    text-align: center;
}

.ukmDeptjdl h2::before {
    content: "";
    position: absolute;
    width: 80%;
    height: 4px;
    border-radius: 20px;
    background: white;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
}

.ukmDeptisi {
    display: grid;
    grid-template-columns: 1fr; /* Single column by default */
    gap: 2rem;
    width: 100%;
    max-width: var(--max-width);
}

.ukmDeptisi > div {
    text-align: center;
}

.ukmDeptisi h3 {
    font-family: "Work Sans", sans-serif;
    font-weight: 700;
    font-size: clamp(1.2rem, 3vw, 1.5rem);
    margin-bottom: 0.5rem;
}

.ukmDeptisi p {
    font-size: clamp(0.9rem, 2vw, 1rem);
    font-family: "Lato", sans-serif;
}

.ukmArtikel {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    background-color: white;
    padding: 2rem 1rem;
}

#Artikel {
    width: 100%;
    max-width: var(--max-width);
}

.carousel-item {
    position: relative;
    height: 400px; /* Fixed height for consistency, but responsive */
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
}

.carouselOverlay {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: white;
    width: 90%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background for readability */
    padding: 1rem;
    border-radius: 10px;
}

.carouselOverlay h2 {
    font-size: clamp(1.5rem, 4vw, 2rem);
    font-family: "Amiri", serif;
    font-weight: 700;
    color: var(--secondary-color);
    margin: 0;
}

.carouselOverlay p {
    font-size: clamp(0.9rem, 2vw, 1rem);
    font-family: "Lato", sans-serif;
    color: var(--secondary-color);
    margin-top: 0.5rem;
}

/* Media Queries for Responsiveness */
@media (min-width: 768px) { /* Tablet and up */
    .ukmDeptisi {
        grid-template-columns: repeat(2, 1fr); /* Two columns */
    }
    .ukmLanding {
        min-height: 80vh; /* Shorter on larger screens */
    }
    .ukmSejarahimg, .ukmDeptimg {
        height: 60vh;
    }
}

@media (min-width: 1024px) { /* Desktop */
    .ukmDeptisi {
        grid-template-columns: repeat(4, 1fr); /* Four columns for departments */
    }
    .ukmLanding {
        min-height: 100vh;
    }
    .ukmSejarahimg, .ukmDeptimg {
        height: 70vh;
    }
}
    </style>
<body>

<main>
    <section class="ukmLanding">
        <img class="logoHeading" src="{{ asset('/images/logo/logo.png') }}" alt="UKM Labbaik Logo">
        <h1 class="ukmLHeading">LABBAIK</h1>
        <h2 class="ukmLHeading2">UKM LEMBAGA AKTIVIS ISLAM KAMPUS (LABBAIK)</h2>
        <img class="bgHero img-fluid" src="https://ukmlabaikpolije-2428d.firebaseapp.com/img/LABAIK/skl_18.jpg" alt="Hero background image of UKM Labbaik activities">
    </section>

    <section class="ukmIntroSection">
        <h2 class="ukmIntroArab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
        <p class="ukmIntroP">
            Selamat datang di web portal UKM Labbaik. Pelajari lebih lanjut tentang UKM Labbaik di sini.
        </p>
    </section>

    <section class="ukmSejarahimg">
        <img class="bgSejarah img-fluid" src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" alt="Background image for history section">
    </section>

    <section class="ukmSejarah">
        <div class="ukmSejarahKet">
            <h2 class="ukmSejarahKetjdl">Sejarah</h2>
            <p class="ukmSejarahKetdesc">
                Dimulai dari kegiatan keagamaan mahasiswa Politani di Masjid Ar-Rahman yang mendapat dukungan takmir, 
                terbentuklah Remaja Masjid Politani. 
                Seiring kebutuhan yang berkembang, lahirlah wadah resmi bernama UKM Labaik pada 1989. 
                Sebuah perjalanan singkat namun penuh makna—dan masih banyak cerita menarik di baliknya. <a class="link" href="Profil">Selengkapnya.</a>
            </p>
        </div>
    </section>

    <section class="ukmDeptimg">
        <img class="bgDept img-fluid" src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" alt="Background image for departments section">
    </section>

    <section class="ukmDept">
        <div class="ukmDeptjdl"><h2>Departemen</h2></div>
        <div class="ukmDeptisi">
            <div class="DepartemenPSDM">
                <h3 class="jdlpsdm">Departemen PSDM</h3>
                <p class="isipsdm">Departemen Pengembangan Sumber Daya Manusia bertanggung jawab atas pelatihan dan pengembangan anggota.</p>
            </div>
            <div class="DepartemenSyiar">
                <h3 class="jdlsyiar">Departemen Syiar</h3>
                <p class="isisyiar">Departemen Syiar fokus pada penyebaran dakwah dan kegiatan islami di kampus.</p>
            </div>
            <div class="DepartemenKemuslimahan">
                <h3 class="jdlKemuslimahan">Departemen Kemuslimahan</h3>
                <p class="isiKemuslimahan">Departemen Kemuslimahan menangani urusan keislaman dan kesejahteraan mahasiswa muslim.</p>
            </div>
            <div class="DepartemenKominfo">
                <h3 class="jdlKominfo">Departemen Kominfo</h3>
                <p class="isiKominfo">Departemen Komunikasi dan Informasi mengelola media sosial, website, dan informasi organisasi.</p>
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
                    <img src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" class="d-block w-100" alt="Kegiatan syiar UKM Labbaik">
                    <div class="carouselOverlay">
                        <h2 class="judulban">Kegiatan Syiar Terbaru</h2>
                        <p class="ketBan">Ikuti kegiatan dakwah kami yang penuh inspirasi dan manfaat.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" class="d-block w-100" alt="Acara kemuslimahan UKM Labbaik">
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
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Throttled scroll handler for better performance
let ticking = false;

function updateParallax() {
    const sections = [
        { section: ".ukmSejarahimg", img: ".bgSejarah" },
        { section: ".ukmDeptimg", img: ".bgDept" }
    ];

    sections.forEach(({ section, img }) => {
        const sectionEl = document.querySelector(section);
        const imgEl = document.querySelector(img);

        if (sectionEl && imgEl) {
            const rect = sectionEl.getBoundingClientRect();
            const speed = 0.4;

            if (rect.top < window.innerHeight && rect.bottom > 0) {
                const offset = rect.top * speed * -1;
                imgEl.style.transform = `translateY(${offset}px)`;
            }
        }
    });

    ticking = false;
}

document.addEventListener("scroll", () => {
    if (!ticking) {
        requestAnimationFrame(updateParallax);
        ticking = true;
    }
});

</script>

@endsection