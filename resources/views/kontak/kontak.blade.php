@extends('layouts.app')

@section('contents')
<style>
    body {
    font-family: Arial, sans-serif;
    background: #fdfdfd;
    margin: 0;
    padding: 0;
}

/* CONTACT BOX */
.contact-section {
    width: 90%;
    margin: 20px auto;
    padding: 20px;
    background: linear-gradient(90deg, #88b4c6, #a8d6c4);
    border-radius: 8px;
    color: white;
}

.contact-section label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.input-box {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: none;
    margin-top: 5px;
}

.btn-send {
    background: #d8f5dd;
    border: none;
    padding: 6px 20px;
    float: right;
    margin-top: 10px;
    border-radius: 4px;
    cursor: pointer;
}


/* FAQ TITLE */
.faq-title {
    width: 90%;
    margin: 30px auto;
    padding: 20px;
    background: linear-gradient(90deg, #95c9be, #7b98ba);
    text-align: center;
    border-radius: 8px;
    color: white;
}

.faq-title h1 {
    font-size: 32px;
    margin: 0;
}

/* SEARCH BAR */
.search-container {
    width: 90%;
    margin: 10px auto;
}

.search-input {
    width: 200px;
    padding: 10px 15px;
    border-radius: 20px;
    border: none;
    background: #e6e6e6;
}

/* DIVIDER */
.divider {
    width: 90%;
    margin: 20px auto;
    border: none;
    border-top: 1px solid #cfcfcf;
}

/* FAQ CARDS */
.faq-list {
    width: 90%;
    margin: auto;
}

.faq-card {
    background: linear-gradient(90deg, #9fd4c7, #82a4bd);
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 18px;
    color: white;
}

.faq-card h3 {
    margin: 0 0 10px 0;
}

</style>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- CONTACT PERSON -->
    <section class="contact-section">
        <h3>Contact Person</h3>
        
        <label>Nama</label>
        <input type="text" class="input-box">
        
        <label>E-mail</label>
        <input type="email" class="input-box">
        
        <label>Pesan</label>
        <textarea class="input-box" rows="4"></textarea>
        
        <button class="btn-send">KIRIM</button>
    </section>
    
    
    <!-- FAQ HEADER -->
    <section class="faq-title">
        <h1>FAQ</h1>
        <p>Frequently Asked Questions</p>
    </section>
    
    
    <!-- SEARCH BAR -->
    <div class="search-container">
        <input type="text" class="search-input" placeholder="search...">
    </div>
    
    <hr class="divider">
    
    <!-- FAQ ITEMS -->
    <section class="faq-list">
        
        <div class="faq-card">
            <h3>Pertanyaan 1 |</h3>
            <p>Siapa saja yang boleh bergabung dengan UKM Labbaik?</p>
        </div>
        
        <div class="faq-card">
            <h3>Pertanyaan 2 |</h3>
            <p>Apakah ada biaya pendaftaran atau iuran bulanan?</p>
        </div>
        
        <div class="faq-card">
            <h3>Pertanyaan 3 |</h3>
            <p>Apakah harus memiliki keahlian dasar TIK untuk mendaftar?</p>
        </div>
        
    </section>
    
</body>
    @endsection