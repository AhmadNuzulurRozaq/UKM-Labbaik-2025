@extends('layouts.app')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galeri | UKM Labbaik</title>
</head> 

<link rel="stylesheet" href="{{ asset('css/galeri.css')}}">

<main>
    <div class="judulGaleri" style= "margin-bottom:20px;">
        <h1> > GALERI</h1>
        <span>KUMPULAN DOKUMENTASI KEGIATAN UKM LABBAIK</span>
    </div>

    <div class="albumGaleri">
        
        <div class="gallery-item">
            <img class="imageThumbnail" 
                 src="{{ asset('/images/dokumentasi/foto1.jpg') }}" 
                 alt="Kegiatan TFT Wilayah 4&5 Madiun 2019" 
                 onclick="bukaPopup(this)">
            <div class="desc">Kegiatan TFT Wilayah 4&5 Madiun 2019</div>
        </div>

        <div class="gallery-item">
            <img class="imageThumbnail" 
                 src="{{ asset('/images/dokumentasi/foto2.jpeg') }}" 
                 alt="Sapa Kenal Labbaik 2017" 
                 onclick="bukaPopup(this)">
            <div class="desc">Sapa Kenal Labbaik 2017</div>
        </div>

        <div class="gallery-item">
            <img class="imageThumbnail" 
                 src="{{ asset('/images/dokumentasi/foto3.jpeg') }}" 
                 alt="Tropis 16" 
                 onclick="bukaPopup(this)">
            <div class="desc">Tropis 16</div>
        </div>

        <div class="gallery-item">
            <img class="imageThumbnail" 
                 src="{{ asset('/images/dokumentasi/foto4.jpg') }}" 
                 alt="Pelantikan Pengurus 2018 - 2019" 
                 onclick="bukaPopup(this)">
            <div class="desc">Pelantikan Pengurus 2018 - 2019</div>
        </div>

        <div class="gallery-item">
            <img class="imageThumbnail" 
                 src="{{ asset('/images/dokumentasi/foto5.jpeg') }}" 
                 alt="Sapa Kenal Labbaik 2017" 
                 onclick="bukaPopup(this)">
            <div class="desc">Sapa Kenal Labbaik 2017</div>
        </div>

        <div class="gallery-item">
            <img class="imageThumbnail" 
                 src="{{  asset('/images/dokumentasi/foto6.jpg')}}" 
                 alt="Labbaik Learning Program" 
                 onclick="bukaPopup(this)">
            <div class="desc">Labbaik Learning Program</div>
        </div>

        </div>

    <div id="myModal" class="modal">
        <span class="close" onclick="tutupPopup()">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
</main>

<script>
    // 1. Ambil elemen-elemen Modal
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01"); // Gambar Besar
    var captionText = document.getElementById("caption"); // Teks Caption

    // 2. Fungsi Buka Popup (Dipasang di setiap gambar)
    function bukaPopup(element) {
        modal.style.display = "block";
        modalImg.src = element.src; // Ambil src dari gambar yg diklik
        captionText.innerHTML = element.alt; // Ambil alt dari gambar yg diklik
    }

    // 3. Fungsi Tutup Popup (Dipasang di tombol X)
    function tutupPopup() {
        modal.style.display = "none";
    }

    // 4. Tutup jika klik area hitam di luar foto
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@endsection