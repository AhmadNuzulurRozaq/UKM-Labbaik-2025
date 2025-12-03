<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Labbaik</title>
    <link rel="stylesheet" href="{{ asset('css/header&footer.css')}}">
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

        <div class="isiFooter">
            <div class="footerku row-2 px-5 d-flex justify-content-center">
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
        </div>

        <div class="copyright">
            <span>Copyright &copy; 2025 Labbaik Team</span>
        </div>
        </div>
    </footer>
</body>

</html>