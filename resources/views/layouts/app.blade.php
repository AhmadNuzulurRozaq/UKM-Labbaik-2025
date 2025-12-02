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
                        <button class="dropButton">DEPARTEMEN ⇂
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
    <footer>

        <div class="isiFooter">
            <div class="footerku">
                <div class="logoUKM">
                    <img src="{{ asset('/images/logo/logoukm.png') }}" alt="LOGO UKM">
                </div>
                <div class="infoFooter">
                    <span>UNIT KEGIATAN MAHASISWA</span>
                    <h1>LABBAIK POLIJE</h1>
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
                <div class="menuFooter">
                    <div class="menuNavbar">
                        <ul>
                            <li>
                                <h3>MENU</h3>
                            </li>
                            <li><a href="/profil/profil">PROFILE</a></li>
                            <li><a href="/galeri/galeri">GALERI</a></li>
                            <li><a href="/departement/psdm">DEPARTEMEN</a></li>
                            <li><a href="/kontak/kontak">KONTAK</a></li>
                        </ul>
                    </div>

                    <div class="menuDepartemen">
                        <ul>
                            <li>
                                <h3>DEPARTEMEN</h3>
                            </li>
                            <li><a href="/departement/psdm">DEPARTEMEN PSDM</a></li>
                            <li><a href="/departement/syiar">DEPARTEMEN SYIAR</a></li>
                            <li><a href="/departement/kemuslimahan">DEPARTEMEN KEMUSLIMAHAN</a></li>
                            <li><a href="/departement/kewirausahaan">DEPARTEMEN KEWIRAUSAHAAN</a></li>
                            <li><a href="/departement/kominfo">DEPARTEMEN KOMINFO</a></li>
                        </ul>
                    </div>

                    <div class="mediaSosial">
                        <h3>MEDIA SOSIAL</h3>
                        <span>Jangan lupa join juga media sosial kami dibawah ini.</span>
                        <div class="sosmedIicon">
                            <a href="#"><img src="{{ asset('/images/logo/instagram-white.svg')}}" alt="instagram"></a>
                            <a href="#"><img src="{{ asset('/images/logo/tiktok-white.png')}}" alt="tiktok"></a>
                            <a href="#"><img src="{{ asset('/images/logo/youtube-white.svg')}}" alt="youtube"></a>
                            <a href="#"><img src="{{ asset('/images/logo/facebook-white.svg') }}" alt="facebook"></a>
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