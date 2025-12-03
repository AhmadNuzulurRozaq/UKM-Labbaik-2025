<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Labbaik</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/header&footer.css')}}"> -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* FONTS */
        @font-face {
            font-family: 'Poppins';
            src: url(../fonts/Poppins/Poppins-Regular.ttf) format('truetype');
            font-weight: 400;
            font-style: normal;
        }


        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 150px;
        }

        /* header {
    background-color: #80A1BA;
    padding: 25px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
} */
        header {
            background-color: #80A1BA;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            font-size: 20px;
            font-weight: 400px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 9999;
        }


        /* .menu ul {
    display: flex;
    list-style: none;
    justify-content: center;
    align-items: center;
    margin-right: 100px;
} */
        .menu ul {
            display: flex;
            list-style: none;
            justify-content: center;
            align-items: center;
            gap: 40px;
            /* jarak antar menu */
            margin: 0;
            /* HAPUS dorongan ke kanan */
            padding: 0;
        }


        .menu ul li {
            max-height: max-content;
            padding: 0 10px;

        }

        .menu ul li a {
            display: inline-block;
            text-decoration: none;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 10px 15px;
        }

        .menu ul li a:hover {
            color: #91C4C3;
            border-radius: 3px;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .logo img {
            height: 70px;
            width: auto;
            margin-left: 5px;
            margin-right: 5px;
        }

        .title h3 {
            margin-left: 20px;
            color: white;
        }

        .banner {
            display: flex;
            gap: 100px;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .dropdown {
            position: relative;
            display: flex;
            align-items: center;
        }

        .dropdown .dropButton {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 10px 15px;
            background-color: transparent;
            font-family: inherit;
            margin: 0;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            gap: 5px;
        }

        .dropdown:hover .dropButton {
            color: #91C4C3;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #80A1BA;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 100%;

        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* CSS FOOTER */
        footer {
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #80A1BA;
            padding: 50px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .isiFooter {
            display: flex;
            justify-content: center;
        }

        .footerku {
            display: flex;
            justify-content: center;
        }

        .logoUKM img {
            height: 150px;
            width: auto;
            margin-left: 5px;
            margin-right: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
        }

        .infoFooter {
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            line-height: 0.5;
            color: white;
            /* margin-right: 100px; */
        }

        .infoFooter h1 {
            font-family: 'Poppins', sans-serif;
        }

        .infoFooter img {
            height: 30px;
            width: auto;
        }

        hr {
            position: relative;
            top: 10px;
            color: white;
        }

        .icon {
            position: relative;
            top: 10px;
        }

        .icon,
        .email,
        .phone,
        .address {
            display: flex;
            gap: 9px;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
            ;
        }

        .address span {
            display: flex;
            line-height: 1.3;
        }

        .menuFooter {
            display: flex;
            justify-content: flex-end;
            /* margin-left: 50px; */
            gap: 45px;

        }

        .menuFooter,
        .menuNavbar ul,
        .menuDepartemen ul,
        .mediaSosial {
            list-style: none;
            color: white;
            line-height: 1.9;
        }

        .menuNavbar ul li a {
            color: white;
            text-decoration: none;

        }

        .menuNavbar ul li a:hover {
            color: #91C4C3;
        }

        .menuDepartemen ul li a {
            color: white;
            text-decoration: none;
        }

        .menuDepartemen ul li a:hover {
            color: #91C4C3;
        }

        .copyright {
            display: flex;
            justify-content: flex-end;
            padding-right: 210px;
            margin-top: 40px;
            padding-bottom: 20px;
            font-size: 14px;
            color: white;
        }


        .mediaSosial img {
            height: 40px;
            width: auto;
            margin-top: 10px;
            padding-right: 10px;
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif;">
    <!-- MENU HEADER -->
    <header>
        <div class="logo">
            <img src="{{ asset('/images/logo/logopolije.png') }}" alt="LOGO POLIJE">
            <a href="{{ route('homepage.index') }}">
                <img src="{{ asset('/images/logo/logoukm.png') }}" alt="LOGO UKM">
            </a>
        </div>

        <div class="menuNavigasi">
            <nav class="menu">
                <ul>
                    <li><a href="/profil/profil">PROFILE</a></li>
                    <li><a href="/galeri/galeri">GALERI</a></li>
                    <li class="dropdown">
                        <button class="dropButton" style="font-size: 20px;">DEPARTEMEN ⇂
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="/departement/psdm">DEPARTEMEN PSDM</a>
                            <a href="/departement/syiar">DEPARTEMEN SYIAR</a>
                            <a href="/departement/kemuslimahan">DEPARTEMEN KEMUSLIMAHAN</a>
                            <a href="/departement/kewirausahaan">DEPARTEMEN KEWIRAUSAHAAN</a>
                            <a href="/departement/kominfo">DEPARTEMEN KOMINFO</a>
                        </div>

                    </li>
                    <li><a href="/kontak/kontak">KONTAK</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('contents')
    </main>
    <footer style="font-family: 'Poppins', sans-serif; padding: 100px;">

        <div class="isiFooter px-3 d-flex" style="margin-left: 40px;">
                <div class="logoUKM col">
                    <img src="{{ asset('/images/logo/logoukm.png') }}" alt="LOGO UKM">
                </div>
                <div class="infoFooter col-4">
                    <span>UNIT KEGIATAN MAHASISWA</span>
                    <h1 class="fw-bold">LABBAIK POLIJE</h1>
                    <span><i>"Salam Labbaik !!! | Bersama Labbaik Ayo Lebih Baik..."</i></span>
                    <hr>
                    <div class="icon">
                        <div class="address">
                            <img src="{{ asset('/images/logo/location-white.svg') }}" alt="Location Icon">
                            <span>Jl. Mastrip POBOX 164 <br>
                                Sumbersari - Jember</span>
                        </div>
                        <div class="phone">
                            <img src="{{ asset('/images/logo/phone-white.svg') }}" alt="Phone Icon">
                            <span>0821-4313-1449</span>
                        </div>
                        <div class="email">
                            <img src="{{ asset('/images/logo/email-white.svg') }}" alt="Email Icon">
                            <span>ukm.labaik@polije.ac.id</span>
                        </div>
                    </div>
                </div>

                <!-- MENU FOOTER DISAMAKAN -->
                <div class="menuFooter col-8 d-flex justify-content-between">
                    <div class="row mx-2">
                        <div class="menuNavbar col">
                            <ul>
                                <li>
                                    <h3 class="fw-bold py-3" style="font-size: 20px">MENU</h3>
                                </li>
                                <li><a href="/profil/profil">PROFILE</a></li>
                                <li><a href="/galeri/galeri">GALERI</a></li>
                                <li><a href="/departement/psdm">DEPARTEMEN</a></li>
                                <li><a href="/kontak/kontak">KONTAK</a></li>
                            </ul>
                        </div>

                        <div class="menuDepartemen col-5">
                            <ul>
                                <li>
                                    <h3 class="fw-bold py-3" style="font-size: 20px">DEPARTEMEN</h3>
                                </li>
                                <li><a href="/departement/psdm">DEPARTEMEN PSDM</a></li>
                                <li><a href="/departement/syiar">DEPARTEMEN SYIAR</a></li>
                                <li><a href="/departement/kemuslimahan">DEPARTEMEN KEMUSLIMAHAN</a></li>
                                <li><a href="/departement/kewirausahaan">DEPARTEMEN KEWIRAUSAHAAN</a></li>
                                <li><a href="/departement/kominfo">DEPARTEMEN KOMINFO</a></li>
                            </ul>
                        </div>

                        <div class="mediaSosial col">
                            <h3 class="fw-bold py-3" style="font-size: 20px">MEDIA SOSIAL</h3>
                            <span>Jangan lupa join juga media sosial kami dibawah ini.</span>
                            <div class="sosmedIicon">
                                <a href="https://www.instagram.com/ukmlabbaik?igsh=MXBwMWp0dTJ3djluNA=="><img src="{{ asset('/images/logo/instagram-white.svg')}}" alt="instagram"></a>
                                <a href="https://www.tiktok.com/@ukmlabbaik_polije?_r=1&_t=ZS-91t9EkCyk0z"><img src="{{ asset('/images/logo/tiktok-white.png')}}" alt="tiktok"></a>
                                <a href="https://youtube.com/@ukmlabbaikofficial?si=vBZ8ejZkf7UprgYR"><img src="{{ asset('/images/logo/youtube-white.svg')}}" alt="youtube"></a>
                                <a href="https://www.facebook.com/share/17oyWTgvCp/"><img src="{{ asset('/images/logo/facebook-white.svg') }}" alt="facebook"></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="copyright">
            <span>Copyright &copy; 2025 Labbaik Team</span>
        </div>
        </div>
    </footer>
</body>

</html>