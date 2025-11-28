@extends('layouts.app')

@section('contents')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Lato:wght@300;400;700&family=Macondo+Swash+Caps&family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Macondo+Swash+Caps&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');


        /* LANDING */
        .ukmLanding {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
        }

        .bgHero {
            position: fixed;
            top: 0;
            left: 0;
            width: 110vw;
            height: 110vh;
            object-fit: cover;
            z-index: -1;
            filter: brightness(50%) blur(3px);
            transform: translate(-5vw, -5vh);
        }

        .ukmLHeading {
            position: absolute;
            top: 50%;
            z-index: 10;
            color: white;
            font-size: 65px;
            font-family: "Macondo Swash Caps", cursive;
        }

        .ukmLHeading2 {
            position: absolute;
            z-index: 10;
            top: 60%;
            font-size: 25px;
            color: white;
            font-family: "Amiri", serif;
        }

        .logoHeading {
            width: 130px;
            position: absolute;
            top: 32%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }


        /* INTRO */
        .ukmIntroSection {
            display: flex;
            flex-direction: column;
            background-color: #80A1BA;
            padding-top: 35px;
            padding-bottom: 10px;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .ukmIntroArab {
            font-size: 32px;
            font-family: "Amiri", serif;
            font-weight: 700;
        }

        .ukmIntroP {
            font-size: 25px;
            font-family: "Lato", sans-serif;
        }


        /* SEJARAH */
        .ukmSejarahimg {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            margin-bottom: 0;
            max-height: 720px;
        }

        .bgSejarah {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 130%;
            object-fit: cover;
            transform: translateY(0);
            will-change: transform;
            max-height: 949px;
        }

        .ukmSejarahKet {
            background-image: linear-gradient(#B4DEBD 0%, #91C4C3 90%, #80A1BA 100%);
            padding-top: 20px;
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 0;
        }

        .ukmSejarahKet h2 {
            text-align: center;
            font-family: "Amiri", serif;
            font-weight: 700;
            font-size: 45px;
            position: relative;
            display: inline-block;
            padding-bottom: 20px;
        }

        .ukmSejarahKet h2::before {
            margin-bottom: 20px;
            content: "";
            position: absolute;
            width: calc(100vw - 40px);
            height: 4px;
            border-radius: 20px;
            background: #ffffff;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .ukmSejarahKetdesc {
            text-align: center;
            max-width: 900px;
            font-size: 25px;
            font-family: "Lato", sans-serif;
            margin-bottom: 0;
            padding-bottom: 20px;
        }

        .ukmSejarahKetdesc a.link {
            color: black;
        }

        .ukmSejarahKetdesc a.link:hover {
            color: #80A1BA;
            font-weight: 700;
        }


        /* DEPARTEMEN */
        .ukmDeptimg {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            max-height: 720px;
        }

        .bgDept {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 130%;
            max-height: 949px;
            object-fit: cover;
            transform: translateY(0);
            will-change: transform;
        }

        .ukmDept {
            background-image: linear-gradient(#80A1BA 0%, #ffffff 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .ukmDeptjdl h2 {
            text-align: center;
            font-family: "Amiri", serif;
            font-weight: 700;
            font-size: 45px;
            position: relative;
            display: inline-block;
            padding-bottom: 20px;
        }

        .ukmDeptjdl h2::before {
            content: "";
            position: absolute;
            width: calc(100vw - 40px);
            height: 4px;
            border-radius: 20px;
            background: #ffffff;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 20px;
        }

        .ukmDeptisi h3 {
            text-align: center;
            font-family: "Work Sans", sans-serif;
            font-weight: 700;
            font-size: 20px;
        }

        .ukmDeptisi {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .ukmDeptisi p {
            text-align: center;
            font-size: 15px;
        }

        .DepartemenPSDM,
        .DepartemenSyiar,
        .DepartemenKemuslimahan,
        .DepartemenKominfo {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: black;
        }


        /* ARTIKEL (CAROUSEL) */
        .carousel-item {
            min-height: 360px;
            height: 360;
            max-height: 365px;
            min-width: 640px;
            max-width: 640px;
            border-radius: 20px;
            border: inset;
            border-color: black;
            margin-bottom: 30px;
        }

        .carousel-item img {
            border-radius: 20px;
            max-height: 725px;
        }

        .ukmArtikel {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100vw;
            background-color: rgb(255, 255, 255);
            padding: 90px;
            padding: 135px;
        }


        /* INDICATOR LINES */
        .carousel-indicators {
            position: absolute;
            bottom: 20px;
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .carousel-indicators li {
            width: 35px;
            height: 4px;
            background-color: rgba(0, 0, 0, 0.622);
            border-radius: 10px;
            transition: 0.3s;
        }

        .carousel-indicators .active {
            background-color: #000000;
        }


        /* NEW — NUMBER INDICATORS (1, 2, 3) */
        .carousel-numbers {
            position: absolute;
            bottom: -10px;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 12px;
            color: rgba(0, 0, 0, 0.7);
            font-size: 16px;
            font-family: "Lato", sans-serif;
            font-weight: 600;
        }

        .carousel-numbers span {
            width: 35px;
            text-align: center;
            display: inline-block;
        }


        .carouselContainer {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* CENTER EVERYTHING */
            gap: 4px;
        }

        /* --- pagination dots --- */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 14px;
        }

        .dot {
            width: 40px;
            height: 6px;
            border-radius: 3px;
            background-color: #333232;
        }

        .dot.active {
            background-color: rgb(0, 0, 0);
        }

        /* --- numbers --- */
        .numbers {
            display: flex;
            justify-content: center;
            gap: 40px;
            padding-bottom: 5px;
            color: #000000;
            font-size: 18px;
        }

        .carousel-item {
            position: relative;
            /* REQUIRED */
        }

        .carouselOverlay {
            position: absolute;
            bottom: 40px;
            /* move up/down */
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            width: 100%;
        }

        .carouselOverlay h2 {
            font-size: 32px;
            font-family: "Amiri", serif;
            font-weight: 700;
            text-shadow: 0 3px 10px rgba(255, 255, 255, 0.849);
            color: #B4DEBD;
            margin: 0;

        }

        .carouselOverlay p {
            font-size: 18px;
            font-family: "Lato", sans-serif;
            color: #B4DEBD;
            margin-top: 4px;
        }
    </style>
</head>

<body>

    <section class="ukmLanding">
        <img class="logoHeading" src="Logo.png" alt="">
        <h1 class="ukmLHeading">LABBAIK</h1>
        <h2 class="ukmLHeading2">UKM LEMBAGA AKTIVIS ISLAM KAMPUS ( LABBAIK )</h2>

        <img class="bgHero" src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" alt="">
    </section>

    <section class="ukmIntroSection">
        <h2 class="ukmIntroArab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
        <p class="ukmIntroP">
            Selamat datang di web portal UKM Labbaik. Pelajari lebih lanjut tentang UKM Labbaik di sini.
        </p>
    </section>

    <section class="ukmSejarahimg">
        <img class="bgSejarah" src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" alt="">
    </section>

    <section class="ukmSejarah">
        <div class="ukmSejarahKet">
            <h2 class="ukmSejarahKetjdl">Sejarah</h2>
            <p class="ukmSejarahKetdesc">
                Dimulai dari kegiatan keagamaan mahasiswa Politani di Masjid Ar-Rahman yang mendapat dukungan takmir,
                terbentuklah Remaja Masjid Politani.
                Seiring kebutuhan yang berkembang, lahirlah wadah resmi bernama UKM Labaik pada 1989.
                Sebuah perjalanan singkat namun penuh makna—dan masih banyak cerita menarik di baliknya. <a class="link"
                    href="Profil">Selengkapnya.</a>
            </p>
        </div>
    </section>

    <section class="ukmDeptimg">
        <img class="bgDept" src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" alt="">
    </section>

    <section class="ukmDept">
        <br>
        <div class="ukmDeptjdl">
            <h2>Departemen</h2>
        </div>
        <div class="ukmDeptisi">
            <div class="DepartemenPSDM">
                <h3 class="jdlpsdm">Departemen PSDM</h3><br>
                <br>
                <p class="isipsdm">Ringkasan singkat psdm</p>
            </div>
            <br><br><br>
            <div class="DepartemenSyiar">
                <h3 class="jdlsyiar">Departemen Syiar</h3><br>
                <br>
                <p class="isisyiar">Ringkasan singkat Syiar</p>
            </div>
            <br><br><br>
            <div class="DepartemenKemuslimahan">
                <h3 class="jdlKemuslimahan">Departemen Kemuslimahan</h3><br>
                <br>
                <p class="isiKemuslimahan">Ringkasan singkat Kemuslimahan</p>
            </div>
            <br><br><br>
            <div class="DepartemenKominfo">
                <h3 class="jdlKominfo">Departemen Kominfo</h3><br>
                <br>
                <p class="isiKominfo">Ringkasan singkat Kominfo</p>
            </div>
        </div>
    </section>

    <section class="ukmArtikel">
        <div id="Artikel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#Artikel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#Artikel" data-bs-slide-to="1"></li>
                <li data-bs-target="#Artikel" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <img src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" class="w-100 d-block" alt="">
                    <div class="carouselOverlay">
                        <h2 class="judulban">OSAKA</h2>
                        <p class="ketBan">Kami membuka pendaftaran pada ukm labbaik dari 20/20/2000 sampai 21/21/2021,
                            jadi daftarlah sekarang untuk mendapatkan berbagai softskill.</p>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" class="w-100 d-block" alt="">
                    <div class="carouselOverlay">
                        <h2 class="judulban">OSAKA</h2>
                        <p class="ketBan">OSAKA KET</p>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/Ql97V2eWPm0/maxresdefault.jpg" class="w-100 d-block" alt="">
                    <div class="carouselOverlay">
                        <h2 class="judulban">OSAKA</h2>
                        <p class="ketBan">OSAKA KET</p>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#Artikel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#Artikel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("scroll", () => {

            const section1 = document.querySelector(".ukmSejarahimg");
            const img1 = document.querySelector(".bgSejarah");

            if (section1) {
                const rect1 = section1.getBoundingClientRect();
                const speed = 0.4;

                if (rect1.top < window.innerHeight && rect1.bottom > 0) {
                    const offset = rect1.top * speed * -1;
                    img1.style.transform = `translateY(${offset}px)`;
                }
            }


            const section2 = document.querySelector(".ukmDeptimg");
            const img2 = document.querySelector(".bgDept");

            if (section2) {
                const rect2 = section2.getBoundingClientRect();
                const speed = 0.4;

                if (rect2.top < window.innerHeight && rect2.bottom > 0) {
                    const offset = rect2.top * speed * -1;
                    img2.style.transform = `translateY(${offset}px)`;
                }
            }
        });
    </script>
</body>

@endsection