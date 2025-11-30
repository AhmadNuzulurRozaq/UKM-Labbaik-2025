@extends('layouts.app')

@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galeri | UKM Labbaik</title>
</head>

<link rel="stylesheet" href="{{ asset('css/header&footer.css')}}">
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

@endsection