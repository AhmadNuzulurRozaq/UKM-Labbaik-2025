<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header&footer.css')}}">
</head>
    <body>
        <header>
            <div class="logo">
                <img src="{{ asset('/images/logo/logopolije.png') }}" alt="LOGO POLIJE">
                <img src="{{ asset('/images/logo/logoukm.png') }}" alt="LOGO UKM">
            </div>
                <div class="menuNavigasi">
                    <nav class="menu">
                        <ul>
                            <li><a href="#">PROFILE</a></li>
                            <li><a href="#">GALERI</a></li>
                            <li class="dropdown">
                                <button class="dropButton">DEPARTEMEN ⇂
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="#">DEPARTEMEN PSDM</a>
                                    <a href="#">DEPARTEMEN SYIAR</a>
                                    <a href="#">DEPARTEMEN KEMUSLIMAHAN</a>
                                    <a href="#">DEPARTEMEN KEWIRAUSAHAAN</a>
                                    <a href="#">DEPARTEMEN KOMINFO</a>
                                </div>
                            </li>
                            <li><a href="#">KONTAK</a></li>
                        </ul>
                    </nav>
                </div>
        </header>
        <main>
         <div class="judulGaleri">
            <h1> > GALERI</h1>
            <span>KUMPULAN DOKUMENTASI KEGIATAN UKM LABBAIK</span>
        </div>
            <div class="albumGaleri">
                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto1.jpg">
                        <img src="{{ asset('/images/dokumentasi/foto1.jpg') }}" alt="Kegiatan TFT Wilayah 4&5 Madiun 2019" width="600" height="400">
                    </a>
                    <div class="desc">Kegiatan TFT Wilayah 4&5 Madiun 2019</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto2.jpeg">
                        <img src="{{ asset('/images/dokumentasi/foto2.jpeg') }}" alt="Sapa Kenal Labbaik 2017" width="600" height="400">
                    </a>
                    <div class="desc">Sapa Kenal Labbaik 2017</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto3.jpeg">
                        <img src="{{ asset('/images/dokumentasi/foto3.jpeg') }}" alt="Tropis 16" width="600" height="400">
                    </a>
                    <div class="desc">Tropis 16</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto4.jpg">
                        <img src="{{ asset('/images/dokumentasi/foto4.jpg') }}" alt="Pelantikan Pengurus 2018 - 2019" width="600" height="400">
                    </a>
                    <div class="desc">Pelantikan Pengurus 2018 - 2019</div>
                </div>
                
                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto5.jpeg">
                        <img src="{{ asset('/images/dokumentasi/foto5.jpeg') }}" alt="Sapa Kenal Labbaik 2017" width="600" height="400">
                    </a>
                    <div class="desc">Sapa Kenal Labbaik 2017</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto6.jpg">
                        <img src="{{  asset('/images/dokumentasi/foto6.jpg')}}" alt="Labbaik Learning Program" width="600" height="400">
                    </a>
                    <div class="desc">Labbaik Learning Program</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto7.jpg">
                        <img src="{{  asset('/images/dokumentasi/foto7.jpg') }}" alt="Talkshow Kemuslimahan" width="600" height="400">
                    </a>
                    <div class="desc">Talkshow Kemuslimahan</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto8.jpg">
                        <img src="{{  asset('/images/dokumentasi/foto8.jpg') }}" alt="Muslimah Creative Club" width="600" height="400">
                    </a>
                    <div class="desc">Muslimah Creative Club</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto9.jpg">
                    <img src="{{  asset('/images/dokumentasi/foto9.jpg') }}" alt="Sapa Kenal Labbaik 2018" width="600" height="400">
                    </a>
                    <div class="desc">Sapa Kenal Labbaik 2018</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto10.jpeg">
                        <img src="{{  asset('/images/dokumentasi/foto10.jpeg') }}" alt="Sapa Kenal Labbaik 2017" width="600" height="400">
                    </a>
                    <div class="desc">Sapa Kenal Labbaik 2017</div>
                </div>
                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto11.jpg">
                        <img src="{{  asset('/images/dokumentasi/foto11.jpg' )}}" alt="Labbaik  Fun" width="600" height="400">
                    </a>
                    <div class="desc">Labbaik Fun</div>
                </div>

                <div class="gallery-item">
                    <a target="_blank" href="/images/dokumentasi/foto12.jpeg">
                        <img src="{{  asset('/images/dokumentasi/foto12.jpeg') }}" alt="Rilah 2016" width="600" height="400">
                    </a>
                    <div class="desc">Rilah 2016</div>
                </div>
            </div>
        </main>
            <footer>
                <div class="isiFooter">
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
                    <div class="menuFooter">
                        <div class="menuNavbar">
                            <ul>
                                <li><h3>MENU</h3></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="#">GALERI</a></li>
                                <li><a href="#">DEPARTEMEN</a></li>
                                <li><a href="#">KONTAK</a></li>
                            </ul>
                        </div>
                        <div class="menuDepartemen">
                            <ul>
                                <li><h3>DEPARTEMEN</h3></li>
                                <li><a href="#">DEPARTEMEN PSDM</a></li>
                                <li><a href="#">DEPARTEMEN SYIAR</a></li>
                                <li><a href="#">DEPARTEMEN KEMUSLIMAHAN</a></li>
                                <li><a href="#">DEPARTEMEN KEWIRAUSAHAAN<a></li>
                                <li><a href="#">DEPARTEMEN KOMINFO</a></li>
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
                <div class="copyright">
                    <span>Copyright &copy; 2025 Labbaik Team</span>
                </div>
            </footer>
        </main>
    </body>
</html>
